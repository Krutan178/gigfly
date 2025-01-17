<?php
namespace App\Livewire\Main\Create;

use App\Http\Validators\Main\Create\GalleryValidator;
use App\Models\Gig;
use App\Models\Admin;
use App\Models\GigFaq;
use App\Models\GigSeo;
use Livewire\Component;
use App\Models\Category;
use App\Models\GigImage;
use App\Models\GigUpgrade;
use WireUi\Traits\Actions;
use App\Models\GigDocument;
use App\Models\Subcategory;
use Illuminate\Support\Str;
use App\Models\Childcategory;
use Livewire\WithFileUploads;
use App\Models\GigRequirement;
use Livewire\Attributes\Layout;
use App\Models\GigRequirementOption;
use App\Utils\Uploader\ImageUploader;
use Illuminate\Support\Facades\Http;
use Intervention\Image\Facades\Image;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Illuminate\Support\Facades\Storage;
use App\Models\FileManager;

use App\Notifications\Admin\PendingGig;
use Illuminate\Database\Eloquent\Collection;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Http\Validators\Main\Create\PricingValidator;
use App\Http\Validators\Main\Create\OverviewValidator;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use App\Http\Validators\Main\Create\RequirementsValidator;

class CreateComponent extends Component
{
    use WithFileUploads, SEOToolsTrait, Actions, LivewireAlert;

    public $subcategories        = [];
    public $childcategories      = [];
    public $tags                 = [];
    public $add_upgrade          = [];
    public $available_deliveries = [];
    public $faqs                 = [];
    public $upgrades             = [];
    public $requirements         = [];
    public $add_requirement      = [
        'options' => [0 => '', 1 => '']
    ];

    // Requirements
    public $question;
    public $answer;
    public $selected;

    // Overview section
    public $title;
    public $category;
    public $subcategory;
    public $childcategory;
    public $description;
    public $seo_title;
    public $seo_description;
    
    // Pricing
    public $price;
    public $delivery_time;
    public $currency_symbol;

    // Gallery
    public $images    = [];
    public $documents = [];
    public $thumbnail;
    public $gigs;

    public $isFinished  = false;
    public $is_approved = false;
    public $is_edit     = false;


    /**
     * Initialize component
     *
     * @return void
     */
    public function mount() : void
    {
        // Set available deliveries dates
        $this->available_deliveries = [
            ['value' => 0, 'text' => __('messages.t_none')],
            ['value' => 1, 'text' => __('messages.t_1_day')],
            ['value' => 2, 'text' => __('messages.t_2_days')],
            ['value' => 3, 'text' => __('messages.t_3_days')],
            ['value' => 4, 'text' => __('messages.t_4_days')],
            ['value' => 5, 'text' => __('messages.t_5_days')],
            ['value' => 6, 'text' => __('messages.t_6_days')],
            ['value' => 7, 'text' => __('messages.t_1_week')],
            ['value' => 14, 'text' => __('messages.t_2_weeks')],
            ['value' => 21, 'text' => __('messages.t_3_weeks')],
            ['value' => 30, 'text' => __('messages.t_1_month')]
        ];

        // Get default currency
        $currency              = settings('currency');

          $this->gigs = Gig::with('thumbnail', 'images.small', 'images.medium', 'images.large')->get();
       
        
 
 
         $this->categories = Category::all();
        
        // Set currency symbol
        $this->currency_symbol = isset(config('money')[$currency->code]['symbol']) ? config('money')[$currency->code]['symbol'] : $currency->code;

    }


    /**
     * Render component
     *
     * @return Illuminate\View\View
     */
    #[Layout('components.layouts.main-app')]
    public function render()
    {
        // SEO
        $separator   = settings('general')->separator;
        $title       = __('messages.t_publish_new_gig') . " $separator " . settings('general')->title;
        $description = settings('seo')->description;
        $ogimage     = src( settings('seo')->ogimage );

        $this->seo()->setTitle( $title );
        $this->seo()->setDescription( $description );
        $this->seo()->setCanonical( url()->current() );
        $this->seo()->opengraph()->setTitle( $title );
        $this->seo()->opengraph()->setDescription( $description );
        $this->seo()->opengraph()->setUrl( url()->current() );
        $this->seo()->opengraph()->setType('website');
        $this->seo()->opengraph()->addImage( $ogimage );
        $this->seo()->twitter()->setImage( $ogimage );
        $this->seo()->twitter()->setUrl( url()->current() );
        $this->seo()->twitter()->setSite( "@" . settings('seo')->twitter_username );
        $this->seo()->twitter()->addValue('card', 'summary_large_image');
        $this->seo()->metatags()->addMeta('fb:page_id', settings('seo')->facebook_page_id, 'property');
        $this->seo()->metatags()->addMeta('fb:app_id', settings('seo')->facebook_app_id, 'property');
        $this->seo()->metatags()->addMeta('robots', 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1', 'name');
        $this->seo()->jsonLd()->setTitle( $title );
        $this->seo()->jsonLd()->setDescription( $description );
        $this->seo()->jsonLd()->setUrl( url()->current() );
        $this->seo()->jsonLd()->setType('WebSite');
// dd($this->categories);
        return view('livewire.main.create.create', [
            'categories' => $this->categories,
             'gigs' => $this->gigs
            
        ]);
    }


    /**
     * Get parent categories
     *
     * @return Collection
     */
    public function getCategoriesProperty() : Collection
    {
        return Category::select('id', 'uid','name', 'created_at')->withTranslation()->latest()->get();
    }


    /**
     * Set subcategories
     *
     * @param int $id
     * @return void
     */
    public function updatedCategory($id) : void
    {
        // Set subcategories
        $this->subcategories = Subcategory::where('parent_id', $id)
                                            ->select('id', 'uid', 'created_at')
                                            ->withTranslation()
                                            ->latest()
                                            ->get();
                                            
        $this->subcategory = null;
        $this->childcategories = [];
        $this->childcategory = null;                                  
    }


    /**
     * Set childcategories
     *
     * @param int $id
     * @return void
     */
    public function updatedSubcategory($id) : void
    {
        // Set childcategories
        $this->childcategories = Childcategory::where('subcategory_id', $id)
                                                ->where('parent_id', $this->category)
                                                ->select('id', 'uid', 'created_at')
                                                ->withTranslation()
                                                ->latest()
                                                ->get();
      
      $this->childcategory = null;
      
    }


    /**
     * Add tag to list
     *
     * @param string $tag
     * @return void
     */
    public function addTag(string $tag)
    {
        // Validate form
        try {

            // Validate form
            OverviewValidator::tag($tag);

            // Clear tag
            $clean = str_replace(['"', "'", ";", ":", "/", ",", ".", "-", "_", "&", "!"], "", $tag);

            // Add add tag to list
            array_push($this->tags, $clean);

            // Refresh tags list
            array_values($this->tags);

        } catch (\Illuminate\Validation\ValidationException $e) {

            // Validation error
            $this->alert(
                'error', 
                __('messages.t_error'), 
                livewire_alert_params( __('messages.t_toast_form_validation_error'), 'error' )
            );

            throw $e;

        } catch (\Throwable $th) {

            // Error
            $this->alert(
                'error', 
                __('messages.t_error'), 
                livewire_alert_params( __('messages.t_toast_something_went_wrong'), 'error' )
            );

            throw $th;

        }
    }


    /**
     * Remove tag from list
     *
     * @param string $tag
     * @return void
     */
    public function removeTag($tag)
    {
        // Get tag key
        $key = array_search($tag, $this->tags);

        // Check if tag exists
        if (isset($this->tags[$key])) {
            
            // Delete this tag
            unset($this->tags[$key]);

            // Refresh tags list
            array_values($this->tags);

        }
    }


    /**
     * Add a FAQ to list
     *
     * @return void
     */
    public function addFaq()
    {
        // Validate form
        try {

            // Validate form
            OverviewValidator::faq($this);

            // Set faq
            $faq = [
                'question' => $this->question,
                'answer'   => $this->answer
            ];

            // Add this faq to list
            array_push($this->faqs, $faq);

            // Reset form
            $this->reset(['answer', 'question']);

            // Success
            $this->alert(
                'success', 
                __('messages.t_success'), 
                livewire_alert_params( __('messages.t_faq_added_successfully') )
            );

        } catch (\Illuminate\Validation\ValidationException $e) {

            // Validation error
            $this->alert(
                'error', 
                __('messages.t_error'), 
                livewire_alert_params( __('messages.t_toast_form_validation_error'), 'error' )
            );

            throw $e;

        } catch (\Throwable $th) {

            // Error
            $this->alert(
                'error', 
                __('messages.t_error'), 
                livewire_alert_params( __('messages.t_toast_something_went_wrong'), 'error' )
            );

            throw $th;

        }
    }

    /**
     * Remove item from list
     *
     * @param integer $key
     * @return void
     */
    public function removeFaq($key)
    {
        // Check if item set in array
        if (isset($this->faqs[$key])) {
            
            // Remove it
            unset($this->faqs[$key]);

        }
    }


    /**
     * Add a service upgrade
     *
     * @return void
     */
    public function addUpgrade()
    {
        // Validate form
        try {

            // Validate form
            PricingValidator::upgrade($this);

            // Set upgrade
            $upgrade = [
                'title'      => $this->add_upgrade['title'],
                'price'      => $this->add_upgrade['price'],
                'extra_days' => isset($this->add_upgrade['extra_days']) ? $this->add_upgrade['extra_days'] : 0,
            ];

            // Add this upgrade to list
            array_push($this->upgrades, $upgrade);

            // Reset form
            $this->reset('add_upgrade');

            // Close modal
            $this->dispatch('close-modal', 'modal-add-upgrade-container');

            // Scroll to see this upgrade
            $this->dispatch('scrollTo', 'scroll-to-upgrade-id-' . array_key_last($this->upgrades));

        } catch (\Illuminate\Validation\ValidationException $e) {

            // Validation error
            $this->alert(
                'error', 
                __('messages.t_error'), 
                livewire_alert_params( __('messages.t_toast_form_validation_error'), 'error' )
            );

            throw $e;

        } catch (\Throwable $th) {

            // Error
            $this->alert(
                'error', 
                __('messages.t_error'), 
                livewire_alert_params( __('messages.t_toast_something_went_wrong'), 'error' )
            );

            throw $th;

        }
    }


    /**
     * Remove select upgrade from list
     *
     * @param integer $key
     * @return void
     */
    public function removeUpgrade($key)
    {
        // Check if upgrade exists in list
        if (isset($this->upgrades[$key])) {
            
            // Delete upgrade from list
            unset($this->upgrades[$key]);

        }
    }


    /**
     * Add new option to list
     *
     * @return void
     */
    public function addOption()
    {
        // Set new option
        $option = [''];

        // Add new option
        array_push($this->add_requirement['options'], $option);

        // Refresh value
        array_values($this->add_requirement['options']);

        // Success
        $this->alert(
            'success', 
            __('messages.t_success'), 
            livewire_alert_params( __('messages.t_toast_operation_success') )
        );
    }


    /**
     * Delete selected option
     *
     * @param integer $index
     * @return void
     */
    public function deleteOption($index)
    {
        // Check if option exists
        if (isset($this->add_requirement['options'][$index])) {
            
            // Remove it
            unset($this->add_requirement['options'][$index]);

            // Refresh options
            array_values($this->add_requirement['options']);

            // Success
            $this->alert(
                'success', 
                __('messages.t_success'), 
                livewire_alert_params( __('messages.t_toast_operation_success') )
            );

        }
    }

    
    /**
     * Add requirement
     *
     * @return void
     */
    public function addRequirement()
    {
        try {

            // Validate form
            RequirementsValidator::add($this);

            // Set requirement
            $requirement = [
                'question'    => $this->add_requirement['question'],
                'type'        => $this->add_requirement['type'],
                'is_required' => isset($this->add_requirement['is_required']) && $this->add_requirement['is_required'] ? true : false,
                'is_multiple' => isset($this->add_requirement['is_multiple']) && $this->add_requirement['is_multiple'] ? true : false,
                'options'     => isset($this->add_requirement['options']) ? $this->add_requirement['options'] : [],
            ];

            // Add this requirement to list
            array_push($this->requirements, $requirement);

            // Reset form
            $this->reset('add_requirement');

            // Success
            $this->alert(
                'success', 
                __('messages.t_success'), 
                livewire_alert_params( __('messages.t_toast_operation_success') )
            );

        } catch (\Illuminate\Validation\ValidationException $e) {

            // Validation error
            $this->alert(
                'error', 
                __('messages.t_error'), 
                livewire_alert_params( __('messages.t_toast_form_validation_error'), 'error' )
            );

            throw $e;

        } catch (\Throwable $th) {

            // Error
            $this->alert(
                'error', 
                __('messages.t_error'), 
                livewire_alert_params( __('messages.t_toast_something_went_wrong'), 'error' )
            );

            throw $th;

        }
    }


    /**
     * Delete selected requirement
     *
     * @param integer $index
     * @return void
     */
    public function deleteRequirement($index)
    {
        // Check if requirement exists
        if (isset($this->requirements[$index])) {
            
            // Delete it
            unset($this->requirements[$index]);

            // Refresh array
            array_values($this->requirements);

            // Success
            $this->alert(
                'success', 
                __('messages.t_success'), 
                livewire_alert_params( __('messages.t_toast_operation_success') )
            );

        }
    }


    /**
     * Edit requirement by id
     *
     * @param integer $index
     * @return void
     */
    public function editRequirement($index)
    {
        // Check if requirement exists
        if (isset($this->requirements[$index])) {
            
            // Get requirement
            $req = $this->requirements[$index];

            // Set requirement
            $this->add_requirement['question']    = isset($req['question']) ? $req['question'] : null;
            $this->add_requirement['type']        = isset($req['type']) ? $req['type'] : null;
            $this->add_requirement['is_required'] = isset($req['is_required']) ? $req['is_required'] : null;
            $this->add_requirement['is_multiple'] = isset($req['is_multiple']) ? $req['is_multiple'] : null;
            $this->add_requirement['options']     = isset($req['options']) ? $req['options'] : [];

            // Set default action as edit
            $this->is_edit  = true;

            // Set selected requirement
            $this->selected = $index;

            // Open modal
            $this->dispatch('open-modal', 'modal-add-requirement-container');
        }
    }


    /**
     * Update requirement
     *
     * @return void
     */
    public function updateRequirement()
    {
        try {
                
            // Get requirement
            $requirement = $this->requirements[$this->selected];

            // Check if exists
            if (isset($requirement)) {

                // Validate form
                RequirementsValidator::add($this);
                
                // Update requirement
                $this->requirements[$this->selected]['question']    = $this->add_requirement['question'];
                $this->requirements[$this->selected]['type']        = $this->add_requirement['type'];
                $this->requirements[$this->selected]['is_required'] = isset($this->add_requirement['is_required']) ? true : false;
                $this->requirements[$this->selected]['is_multiple'] = isset($this->add_requirement['is_multiple']) ? true : false;
                $this->requirements[$this->selected]['options']     = isset($this->add_requirement['options']) ? $this->add_requirement['options'] : [];

                // Close modal
                $this->dispatch('close-modal', 'modal-add-service-requirement-container');

                // Reset form
                $this->reset('add_requirement');

                // Success
                $this->alert(
                    'success', 
                    __('messages.t_success'), 
                    livewire_alert_params( __('messages.t_toast_operation_success') )
                );

            }

        } catch (\Illuminate\Validation\ValidationException $e) {

            // Validation error
            $this->alert(
                'error', 
                __('messages.t_error'), 
                livewire_alert_params( __('messages.t_toast_form_validation_error'), 'error' )
            );

            throw $e;

        } catch (\Throwable $th) {

            // Error
            $this->alert(
                'error', 
                __('messages.t_error'), 
                livewire_alert_params( __('messages.t_toast_something_went_wrong'), 'error' )
            );

            throw $th;

        }
    }


    /**
     * Now let's post this gig
     *
     * @return void
     */
//     public function create()
//     {
//         try {
            
//             // Check if requirements are set
//             if (!count($this->requirements)) {
                
//                 // Error
//                 $this->alert(
//                     'error', 
//                     __('messages.t_error'), 
//                     livewire_alert_params( __('messages.t_u_have_to_add_at_least_1_requirement'), 'error' )
//                 );

//                 return;

//             }

//             // Validate form
//             OverviewValidator::all($this);
//             PricingValidator::all($this);
//             RequirementsValidator::all($this);
//             GalleryValidator::all($this);

//             // Generate unique id for this gig
//             $uid                  = uid();

//             // Get title
//             $title                = htmlspecialchars_decode(clean($this->title));

//             // Generate unique slug for this gig
//             $slug                 = substr( Str::slug($title), 0, 138 ) . '-' . $uid;

//             // Get description
//             $description          = clean($this->description);

//             // Get price
//             $price                = clean($this->price);

//             // Get delivery time
//             $delivery_time        = $this->delivery_time;

//             // Get parent category
//             $category_id          = $this->category;

//             // Get subcategory
//             $subcategory_id       = $this->subcategory;

//             // Get childcategory
//             $childcategory_id     = $this->childcategory;

//             // Get gig status
//             $status               = settings('publish')->auto_approve_gigs ? 'active' : 'pending';

//             // Check if gig has upgrades
//             $has_upgrades         = is_array($this->upgrades) && count($this->upgrades) ? true : false;

//             // Check if gig has faqs
//             $has_faqs             = is_array($this->faqs) && count($this->faqs) ? true : false;

//             // Get video link
//             $video_link           = null;

//             // Get video id
//             $video_id             = null;

//             // Get gig preview image
//             $preview              = $this->thumbnail;
// dd($preview);
//          //   Upload thumbnail image
//             $image_thumb_id       = ImageUploader::make($preview)->resize(400)->folder('gigs/previews/small')->handle();

//             // Upload medium image
//             $image_medium_id      = ImageUploader::make($preview)->resize(800)->folder('gigs/previews/medium')->handle();

//             // Upload large image
//             $image_large_id       = ImageUploader::make($preview)->resize(1200)->folder('gigs/previews/large')->handle();




//             // Save gig
//             $gig                   = new Gig();
//             $gig->uid              = $uid;
//             $gig->user_id          = auth()->id();
//             $gig->title            = $title;
//             $gig->slug             = $slug;
//             $gig->description      = $description;
//             $gig->price            = $price;
//             $gig->delivery_time    = $delivery_time;
//             $gig->category_id      = $category_id;
//             $gig->subcategory_id   = $subcategory_id;
//             $gig->childcategory_id = $childcategory_id;
//             $gig->image_thumb_id   = $image_thumb_id;
//             $gig->image_medium_id  = $image_medium_id;
//             $gig->image_large_id   = $image_large_id;
//             $gig->status           = $status;
//             $gig->has_upgrades     = $has_upgrades;
//             $gig->has_faqs         = $has_faqs;
//             $gig->video_link       = $video_link;
//             $gig->video_id         = $video_id;
//             $gig->save();

//             // Save tags
//             foreach ($this->tags as $tag) {
//                 $gig->tag($tag);
//             }

//             // Check if gig has upgrades
//             if (is_array($this->upgrades) && count($this->upgrades)) {
                
//                 // Loop through upgrades
//                 foreach ($this->upgrades as $upgrade) {
                    
//                     // Save uprade
//                     GigUpgrade::create([
//                         'uid'        => uid(),
//                         'gig_id'     => $gig->id,
//                         'title'      => $upgrade['title'],
//                         'price'      => $upgrade['price'],
//                         'extra_days' => isset($upgrade['extra_days']) ? $upgrade['extra_days'] : 0,
//                     ]);

//                 }

//             }

//             // Check if gig has faqs
//             if (is_array($this->faqs) && count($this->faqs)) {
                
//                 // Loop through faqs
//                 foreach ($this->faqs as $faq) {
                    
//                     // Save faq
//                     GigFaq::create([
//                         'gig_id'   => $gig->id,
//                         'question' => clean($faq['question']),
//                         'answer'   => clean($faq['answer'])
//                     ]);

//                 }

//             }

//             // Check if gig has requirements
//             if (count($this->requirements)) {
                
//                 // Loop through requirements
//                 foreach ($this->requirements as $req) {
                    
//                     // Save requirement
//                     $requirement = GigRequirement::create([
//                         'gig_id'      => $gig->id,
//                         'question'    => clean($req['question']),
//                         'type'        => $req['type'],
//                         'is_required' => isset($req['is_required']) ? $req['is_required'] : false,
//                         'is_multiple' => isset($req['is_multiple']) ? $req['is_multiple'] : false
//                     ]);

//                     // Check if requirement multiple choices
//                     if ($req['type'] === 'choice') {
                        
//                         // Loop through options
//                         foreach ($req['options'] as $option) {
                            
//                             // Save option
//                             GigRequirementOption::create([
//                                 'requirement_id' => $requirement->id,
//                                 'option'         => $option
//                             ]);

//                         }

//                     }

//                 }

//             }

//             // Check if gig has custom seo
//             if ($this->seo_title && $this->seo_description) {
                
//                 // Save seo
//                 GigSeo::create([
//                     'gig_id'      => $gig->id,
//                     'title'       => clean($this->seo_title),
//                     'description' => clean($this->seo_description),
//                 ]);

//             }

//             // Save gig images
//             foreach ($this->images as $image) {
                
//                 // Upload small image
//                 $img_thumb_id  = ImageUploader::make($image)->resize(400)->folder('gigs/gallery/small')->handle();

//                 // Upload medium image
//                 $img_medium_id = ImageUploader::make($image)->resize(800)->folder('gigs/gallery/medium')->handle();

//                 // Upload large image
//                 $img_large_id  = ImageUploader::make($image)->resize(1200)->folder('gigs/gallery/large')->handle();

//                 // Save images
//                 GigImage::create([
//                     'gig_id'        => $gig->id,
//                     'img_thumb_id'  => $img_thumb_id,
//                     'img_medium_id' => $img_medium_id,
//                     'img_large_id'  => $img_large_id
//                 ]);

//             }

//             // Check if documents exists in request
//             if (settings('publish')->is_documents_enabled && is_array($this->documents) && count($this->documents)) {
                
//                 // Loop through documents
//                 foreach ($this->documents as $doc) {
                    
//                     // Generate document unique id
//                     $doc_uid = uid();

//                     // Get original name
//                     $name    = $doc->getClientOriginalName();

//                     // Get file size
//                     $size    = $doc->getSize();

//                     // Move document to local storage
//                     $doc->storeAs('gigs/documents', $doc_uid . '.pdf', 'custom');

//                     // Save document in database
//                     GigDocument::create([
//                         'uid'    => $doc_uid,
//                         'gig_id' => $gig->id,
//                         'name'   => $name,
//                         'size'   => $size
//                     ]);


//                 }

//             }   

//             // Gig has been posted successfully
//             $this->isFinished = url('service', $slug);

//             // Send notification to admin
//             if ($status === 'pending') {
                
//                 $this->is_approved = false;

//                 Admin::first()->notify( (new PendingGig($gig))->locale(config('app.locale')) );

//             } else {

//                 $this->is_approved = true;

//             }

//             // Success message
//             $this->alert(
//                 'success', 
//                 __('messages.t_success'), 
//                 livewire_alert_params( __('messages.t_gig_created_successfully') )
//             );

//             // Scroll up
//             $this->dispatch('scrollUp');

//         } catch (\Illuminate\Validation\ValidationException $e) {
            
//             // Validation error
//             $this->alert(
//                 'error', 
//                 __('messages.t_error'), 
//                 livewire_alert_params( __('messages.t_toast_form_validation_error'), 'error' )
//             );

//             throw $e;

//         } catch (\Throwable $th) {

//             // Error
//             $this->alert(
//                 'error', 
//                 __('messages.t_error'), 
//                 livewire_alert_params( __('messages.t_toast_something_went_wrong'), 'error' )
//             );

//         }
//     }
    
    
    public function create()
{
    try {
        // Check if requirements are set
        if (!count($this->requirements)) {
            $this->alert(
                'error', 
                __('messages.t_error'), 
                livewire_alert_params(__('messages.t_u_have_to_add_at_least_1_requirement'), 'error')
            );

            return;
        }

        // Validate form
        OverviewValidator::all($this);
        PricingValidator::all($this);
        RequirementsValidator::all($this);
        GalleryValidator::all($this);

        // Generate unique id for this gig
        $uid = uid();

        // Get title
        $title = htmlspecialchars_decode(clean($this->title));

        // Generate unique slug for this gig
        $slug = substr(Str::slug($title), 0, 138) . '-' . $uid;

        // Get description
        $description = clean($this->description);

        // Get price
        $price = clean($this->price);

        // Get delivery time
        $delivery_time = $this->delivery_time;

        // Get parent category
        $category_id = $this->category;

        // Get subcategory
        $subcategory_id = $this->subcategory;

        // Get childcategory
        $childcategory_id = $this->childcategory;

        // Get gig status
        $status = settings('publish')->auto_approve_gigs ? 'active' : 'pending';

        // Check if gig has upgrades
        $has_upgrades = is_array($this->upgrades) && count($this->upgrades) ? true : false;

        // Check if gig has faqs
        $has_faqs = is_array($this->faqs) && count($this->faqs) ? true : false;

        // Get video link
        $video_link = null;

        // Get video id
        $video_id = null;

        $image_thumb_id = null;
        $image_medium_id = null;
        $image_large_id = null;
        
        // Get gig preview image
        $preview = $this->thumbnail;

       
        
        // Ensure the uploaded file is an instance of TemporaryUploadedFile
        if ($preview instanceof TemporaryUploadedFile) {
            // Process and upload image
            $imageContent = Http::get($preview->temporaryUrl())->body();
            $image = Image::make($imageContent);

            // Resize and upload the image in different sizes
            $sizes = [
                'small' => 400,
                'medium' => 800,
                'large' => 1200
            ];
 $fileManagerIds = [];
            foreach ($sizes as $size => $width) {
                $resizedImage = $image->resize($width, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->encode('jpg');

                $path = "gigs/previews/{$size}/" . $preview->hashName();
                Storage::disk('s3')->put($path, (string) $resizedImage);

                // Save to file_manager table
              $fileManager =  FileManager::create([
                    'uid' => uid(),
                    'file_name' => $preview->hashName(),
                    'file_url' => "https://s3.ap-south-1.amazonaws.com/gigfly.in/{$path}",
                    'file_folder' => "gigs/previews/{$size}",
                    'file_size' => Storage::disk('s3')->size($path),
                    'file_mimetype' => $resizedImage->mime(),
                    'file_extension' => 'jpg',
                    'storage_driver' => 's3',
                    'uploader_type' => 'user', // or any other type
                    'uploader_id' => auth()->id(),
                    'uploaded_at' => now(),
                ]);
                  $fileManagerIds[$size] = $fileManager->id;
                    
            }
// dd($fileManagerIds);
            // Save paths or identifiers
            // $image_thumb_id = "gigs/previews/small/" . $preview->hashName();
            // $image_medium_id = "gigs/previews/medium/" . $preview->hashName();
            // $image_large_id = "gigs/previews/large/" . $preview->hashName();
            $image_thumb_id = $fileManagerIds['small'] ?? null;
            $image_medium_id = $fileManagerIds['medium'] ?? null;
            $image_large_id = $fileManagerIds['large'] ?? null;
               
        } else {
            throw new \Exception("Invalid file upload. Received type: " . get_class($preview));
        }
        
        
        
// dd($fileManager);
        // Save gig
        $gig = new Gig();
        $gig->uid = $uid;
        $gig->user_id = auth()->id();
        $gig->title = $title;
        $gig->slug = $slug;
        $gig->description = $description;
        $gig->price = $price;
        $gig->delivery_time = $delivery_time;
        $gig->category_id = $category_id;
        $gig->subcategory_id = $subcategory_id;
        $gig->childcategory_id = $childcategory_id;
        $gig->image_thumb_id = $image_thumb_id;
        $gig->image_medium_id = $image_medium_id;
        $gig->image_large_id = $image_large_id;
        $gig->status = $status;
        $gig->has_upgrades = $has_upgrades;
        $gig->has_faqs = $has_faqs;
        $gig->video_link = $video_link;
        $gig->video_id = $video_id;
        $gig->save();
//  dd($gig);
        // Save tags
        foreach ($this->tags as $tag) {
            $gig->tag($tag);
        }

        // Process gig upgrades
        if (is_array($this->upgrades) && count($this->upgrades)) {
            foreach ($this->upgrades as $upgrade) {
                GigUpgrade::create([
                    'uid' => uid(),
                    'gig_id' => $gig->id,
                    'title' => $upgrade['title'],
                    'price' => $upgrade['price'],
                    'extra_days' => isset($upgrade['extra_days']) ? $upgrade['extra_days'] : 0,
                ]);
            }
        }

        // Process gig FAQs
        if (is_array($this->faqs) && count($this->faqs)) {
            foreach ($this->faqs as $faq) {
                GigFaq::create([
                    'gig_id' => $gig->id,
                    'question' => clean($faq['question']),
                    'answer' => clean($faq['answer'])
                ]);
            }
        }

        // Process gig requirements
        if (count($this->requirements)) {
            foreach ($this->requirements as $req) {
                $requirement = GigRequirement::create([
                    'gig_id' => $gig->id,
                    'question' => clean($req['question']),
                    'type' => $req['type'],
                    'is_required' => isset($req['is_required']) ? $req['is_required'] : false,
                    'is_multiple' => isset($req['is_multiple']) ? $req['is_multiple'] : false
                ]);

                if ($req['type'] === 'choice') {
                    foreach ($req['options'] as $option) {
                        GigRequirementOption::create([
                            'requirement_id' => $requirement->id,
                            'option' => $option
                        ]);
                    }
                }
            }
        }

        // Process custom SEO
        if ($this->seo_title && $this->seo_description) {
            GigSeo::create([
                'gig_id' => $gig->id,
                'title' => clean($this->seo_title),
                'description' => clean($this->seo_description),
            ]);
        }
// 
  $sizes = [
        'small' => 100,
        'medium' => 500,
        'large' => 1000,
    ];
    
    foreach ($this->images as $image) {
    if ($image instanceof TemporaryUploadedFile) {
        // Store the file temporarily to get a proper path
        $storedImage = $image->store('gigs/gallery', 's3');

        // Construct the full S3 URL for the stored image
        $storedImageUrl = Storage::disk('s3')->url($storedImage);

        // Create an Image instance from the S3 URL
        $galleryImage = Image::make($storedImageUrl);

        $fileManagerIds = [];
        foreach ($sizes as $size => $width) {
            $resizedGalleryImage = $galleryImage->resize($width, null, function ($constraint) {
                $constraint->aspectRatio();
            })->encode('jpg');

            $galleryPath = "gigs/gallery/{$size}/" . basename($storedImage);
            Storage::disk('s3')->put($galleryPath, (string) $resizedGalleryImage);

            // Collect image paths
            $imagePaths[$size] = Storage::disk('s3')->url($galleryPath);

            // Save to file_manager table
            $fileManager = FileManager::create([
                'uid' => uid(),
                'file_name' => basename($galleryPath),
                'file_url' => $imagePaths[$size],
                'file_folder' => "gigs/gallery/{$size}",
                'file_size' => Storage::disk('s3')->size($galleryPath),
                'file_mimetype' => $resizedGalleryImage->mime(),
                'file_extension' => 'jpg',
                'storage_driver' => 's3',
                'uploader_type' => 'user', // or any other type
                'uploader_id' => auth()->id(),
                'uploaded_at' => now(),
            ]);

            // Collect file manager IDs
            $fileManagerIds[$size] = $fileManager->id;
        }

        // Create GigImage record with the file manager IDs
        GigImage::create([
            'gig_id' => $gig->id,
            'img_thumb_id' => $fileManagerIds['small'] ?? null,
            'img_medium_id' => $fileManagerIds['medium'] ?? null,
            'img_large_id' => $fileManagerIds['large'] ?? null,
        ]);
    } else {
        // Handle non-TemporaryUploadedFile instances
        dd('not an instance of TemporaryUploadedFile', $image);
    }
}


//   foreach ($this->images as $image) {
//     if ($image instanceof TemporaryUploadedFile) {
//         // Store the file temporarily to get a proper path
//         $storedImage = $image->store('gigs/gallery', 's3');

//         // Construct the full S3 URL for the stored image
//         $storedImageUrl = Storage::disk('s3')->url($storedImage);

//         // Create an Image instance from the S3 URL
//         $galleryImage = Image::make($storedImageUrl);

//         $imagePaths = [];
//         foreach ($sizes as $size => $width) {
//             $resizedGalleryImage = $galleryImage->resize($width, null, function ($constraint) {
//                 $constraint->aspectRatio();
//             })->encode('jpg');

//             $galleryPath = "gigs/gallery/{$size}/" . basename($storedImage);
//             Storage::disk('s3')->put($galleryPath, (string) $resizedGalleryImage);

//             // Collect image paths
//             $imagePaths[$size] = Storage::disk('s3')->url($galleryPath);

//             // Save to file_manager table
//             FileManager::create([
//                 'uid' => uid(),
//                 'file_name' => basename($galleryPath),
//                 'file_url' => $imagePaths[$size],
//                 'file_folder' => "gigs/gallery/{$size}",
//                 'file_size' => Storage::disk('s3')->size($galleryPath),
//                 'file_mimetype' => $resizedGalleryImage->mime(),
//                 'file_extension' => 'jpg',
//                 'storage_driver' => 's3',
//                 'uploader_type' => 'user', // or any other type
//                 'uploader_id' => auth()->id(),
//                 'uploaded_at' => now(),
//             ]);
//         }

//         // Create GigImage record with the paths
//         GigImage::create([
//             'gig_id' => $gig->id,
//             'img_thumb_id' => $imagePaths['small'],
//             'img_medium_id' => $imagePaths['medium'],
//             'img_large_id' => $imagePaths['large'],
//         ]);
//     } else {
//         // Handle non-TemporaryUploadedFile instances
//         dd('not an instance of TemporaryUploadedFile', $image);
//     }
// }
// 
        // Process documents
        if (settings('publish')->is_documents_enabled && is_array($this->documents) && count($this->documents)) {
            foreach ($this->documents as $doc) {
                $doc_uid = uid();
                $name = $doc->getClientOriginalName();
                $size = $doc->getSize();
                $doc->storeAs('gigs/documents', $doc_uid . '.pdf', 's3');

                $fileManager = FileManager::create([
                    'uid' => $doc_uid,
                    'file_name' => $name,
                    'file_url' => "https://s3.ap-south-1.amazonaws.com/gigfly.in/gigs/documents/{$doc_uid}.pdf",
                    'file_folder' => 'gigs/documents',
                    'file_size' => $size,
                    'file_mimetype' => 'application/pdf',
                    'file_extension' => 'pdf',
                    'storage_driver' => 's3',
                    'uploader_type' => 'user', // or any other type
                    'uploader_id' => auth()->id(),
                    'uploaded_at' => now(),
                ]);

                GigDocument::create([
                    'uid' => $doc_uid,
                    'gig_id' => $gig->id,
                    'name' => $name,
                    'size' => $size
                ]);
            }
        }
// dd($fileManager);
        // Gig has been posted successfully
        $this->isFinished = url('service', $slug);

        // Send notification to admin
        if ($status === 'pending') {
            $this->is_approved = false;
            Admin::first()->notify((new PendingGig($gig))->locale(config('app.locale')));
        } else {
            $this->is_approved = true;
        }

        // Success message
        $this->alert(
            'success', 
            __('messages.t_success'), 
            livewire_alert_params(__('messages.t_gig_created_successfully'))
        );

        // Scroll up
        $this->dispatch('scrollUp');

    } catch (\Illuminate\Validation\ValidationException $e) {
        // Validation error
        $this->alert(
            'error', 
            __('messages.t_error'), 
            livewire_alert_params(__('messages.t_form_has_errors'))
        );

    } catch (\Throwable $e) {
        // General error
        $this->alert(
            'error', 
            __('messages.t_error'), 
            livewire_alert_params($e->getMessage())
        );
    }
}

    
    
    // create 2
//     public function create()
// {
//     try {
//         // Check if requirements are set
//         if (!count($this->requirements)) {
//             $this->alert(
//                 'error', 
//                 __('messages.t_error'), 
//                 livewire_alert_params(__('messages.t_u_have_to_add_at_least_1_requirement'), 'error')
//             );

//             return;
//         }

//         // Validate form
//         OverviewValidator::all($this);
//         PricingValidator::all($this);
//         RequirementsValidator::all($this);
//         GalleryValidator::all($this);

//         // Generate unique id for this gig
//         $uid = uid();

//         // Get title
//         $title = htmlspecialchars_decode(clean($this->title));

//         // Generate unique slug for this gig
//         $slug = substr(Str::slug($title), 0, 138) . '-' . $uid;

//         // Get description
//         $description = clean($this->description);

//         // Get price
//         $price = clean($this->price);

//         // Get delivery time
//         $delivery_time = $this->delivery_time;

//         // Get parent category
//         $category_id = $this->category;

//         // Get subcategory
//         $subcategory_id = $this->subcategory;

//         // Get childcategory
//         $childcategory_id = $this->childcategory;

//         // Get gig status
//         $status = settings('publish')->auto_approve_gigs ? 'active' : 'pending';

//         // Check if gig has upgrades
//         $has_upgrades = is_array($this->upgrades) && count($this->upgrades) ? true : false;

//         // Check if gig has faqs
//         $has_faqs = is_array($this->faqs) && count($this->faqs) ? true : false;

//         // Get video link
//         $video_link = null;

//         // Get video id
//         $video_id = null;

//         // Get gig preview image
//         $preview = $this->thumbnail;

//         // Ensure the uploaded file is an instance of TemporaryUploadedFile
//         if ($preview instanceof TemporaryUploadedFile) {
//             // Process and upload image
//             $imageContent = Http::get($preview->temporaryUrl())->body();
//             $image = Image::make($imageContent);

//             // Resize and upload the image in different sizes
//             $sizes = [
//                 'small' => 400,
//                 'medium' => 800,
//                 'large' => 1200
//             ];

//             foreach ($sizes as $size => $width) {
//                 $resizedImage = $image->resize($width, null, function ($constraint) {
//                     $constraint->aspectRatio();
//                 })->encode('jpg');

//                 $path = "gigs/previews/{$size}/" . $preview->hashName();
//                 Storage::disk('s3')->put($path, (string) $resizedImage);

//                 // Save to file_manager table
//                 FileManager::create([
//                     'uid' => uid(),
//                     'file_name' => $preview->hashName(),
//                     'file_url' => "https://s3.ap-south-1.amazonaws.com/gigfly.in/{$path}",
//                     'file_folder' => "gigs/previews/{$size}",
//                     'file_size' => Storage::disk('s3')->size($path),
//                     'file_mimetype' => $resizedImage->mime(),
//                     'file_extension' => 'jpg',
//                     'storage_driver' => 's3',
//                     'uploader_type' => 'user', // or any other type
//                     'uploader_id' => auth()->id(),
//                     'uploaded_at' => now(),
//                 ]);
//             }

//             // Save paths or identifiers
//             $image_thumb_id = "gigs/previews/small/" . $preview->hashName();
//             $image_medium_id = "gigs/previews/medium/" . $preview->hashName();
//             $image_large_id = "gigs/previews/large/" . $preview->hashName();
//         } else {
//             throw new \Exception("Invalid file upload. Received type: " . get_class($preview));
//         }

//         // Save gig
//         $gig = new Gig();
//         $gig->uid = $uid;
//         $gig->user_id = auth()->id();
//         $gig->title = $title;
//         $gig->slug = $slug;
//         $gig->description = $description;
//         $gig->price = $price;
//         $gig->delivery_time = $delivery_time;
//         $gig->category_id = $category_id;
//         $gig->subcategory_id = $subcategory_id;
//         $gig->childcategory_id = $childcategory_id;
//         $gig->image_thumb_id = $image_thumb_id;
//         $gig->image_medium_id = $image_medium_id;
//         $gig->image_large_id = $image_large_id;
//         $gig->status = $status;
//         $gig->has_upgrades = $has_upgrades;
//         $gig->has_faqs = $has_faqs;
//         $gig->video_link = $video_link;
//         $gig->video_id = $video_id;
//         $gig->save();

//         // Save tags
//         foreach ($this->tags as $tag) {
//             $gig->tag($tag);
//         }

//         // Process gig upgrades
//         if (is_array($this->upgrades) && count($this->upgrades)) {
//             foreach ($this->upgrades as $upgrade) {
//                 GigUpgrade::create([
//                     'uid' => uid(),
//                     'gig_id' => $gig->id,
//                     'title' => $upgrade['title'],
//                     'price' => $upgrade['price'],
//                     'extra_days' => isset($upgrade['extra_days']) ? $upgrade['extra_days'] : 0,
//                 ]);
//             }
//         }

//         // Process gig FAQs
//         if (is_array($this->faqs) && count($this->faqs)) {
//             foreach ($this->faqs as $faq) {
//                 GigFaq::create([
//                     'gig_id' => $gig->id,
//                     'question' => clean($faq['question']),
//                     'answer' => clean($faq['answer'])
//                 ]);
//             }
//         }

//         // Process gig requirements
//         if (count($this->requirements)) {
//             foreach ($this->requirements as $req) {
//                 $requirement = GigRequirement::create([
//                     'gig_id' => $gig->id,
//                     'question' => clean($req['question']),
//                     'type' => $req['type'],
//                     'is_required' => isset($req['is_required']) ? $req['is_required'] : false,
//                     'is_multiple' => isset($req['is_multiple']) ? $req['is_multiple'] : false
//                 ]);

//                 if ($req['type'] === 'choice') {
//                     foreach ($req['options'] as $option) {
//                         GigRequirementOption::create([
//                             'requirement_id' => $requirement->id,
//                             'option' => $option
//                         ]);
//                     }
//                 }
//             }
//         }

//         // Process custom SEO
//         if ($this->seo_title && $this->seo_description) {
//             GigSeo::create([
//                 'gig_id' => $gig->id,
//                 'title' => clean($this->seo_title),
//                 'description' => clean($this->seo_description),
//             ]);
//         }

//         // Process gallery images
//         foreach ($this->images as $image) {
//             if ($image instanceof Livewire\Features\SupportFileUploads\TemporaryUploadedFile) {
//                 $galleryImage = Image::make($image->getRealPath());

//                 foreach ($sizes as $size => $width) {
//                     $resizedGalleryImage = $galleryImage->resize($width, null, function ($constraint) {
//                         $constraint->aspectRatio();
//                     })->encode('jpg');

//                     $galleryPath = "gigs/gallery/{$size}/" . $image->hashName();
//                     Storage::disk('s3')->put($galleryPath, (string) $resizedGalleryImage);

//                     // Save to file_manager table
//                     FileManager::create([
//                         'uid' => uid(),
//                         'file_name' => $image->hashName(),
//                         'file_url' => "https://s3.ap-south-1.amazonaws.com/gigfly.in/{$galleryPath}",
//                         'file_folder' => "gigs/gallery/{$size}",
//                         'file_size' => Storage::disk('s3')->size($galleryPath),
//                         'file_mimetype' => $resizedGalleryImage->mime(),
//                         'file_extension' => 'jpg',
//                         'storage_driver' => 's3',
//                         'uploader_type' => 'user', // or any other type
//                         'uploader_id' => auth()->id(),
//                         'uploaded_at' => now(),
//                     ]);
//                 }

//                 GigImage::create([
//                     'gig_id' => $gig->id,
//                     'img_thumb_id' => "gigs/gallery/small/" . $image->hashName(),
//                     'img_medium_id' => "gigs/gallery/medium/" . $image->hashName(),
//                     'img_large_id' => "gigs/gallery/large/" . $image->hashName()
//                 ]);
//             }
//         }

//         // Process documents
//         if (settings('publish')->is_documents_enabled && is_array($this->documents) && count($this->documents)) {
//             foreach ($this->documents as $doc) {
//                 $doc_uid = uid();
//                 $name = $doc->getClientOriginalName();
//                 $size = $doc->getSize();
//                 $doc->storeAs('gigs/documents', $doc_uid . '.pdf', 's3');

//                 FileManager::create([
//                     'uid' => $doc_uid,
//                     'file_name' => $name,
//                     'file_url' => "https://s3.ap-south-1.amazonaws.com/gigfly.in/gigs/documents/{$doc_uid}.pdf",
//                     'file_folder' => 'gigs/documents',
//                     'file_size' => $size,
//                     'file_mimetype' => 'application/pdf',
//                     'file_extension' => 'pdf',
//                     'storage_driver' => 's3',
//                     'uploader_type' => 'user', // or any other type
//                     'uploader_id' => auth()->id(),
//                     'uploaded_at' => now(),
//                 ]);

//                 GigDocument::create([
//                     'uid' => $doc_uid,
//                     'gig_id' => $gig->id,
//                     'name' => $name,
//                     'size' => $size
//                 ]);
//             }
//         }

//         // Gig has been posted successfully
//         $this->isFinished = url('service', $slug);

//         // Send notification to admin
//         if ($status === 'pending') {
//             $this->is_approved = false;
//             Admin::first()->notify((new PendingGig($gig))->locale(config('app.locale')));
//         } else {
//             $this->is_approved = true;
//         }

//         // Success message
//         $this->alert(
//             'success', 
//             __('messages.t_success'), 
//             livewire_alert_params(__('messages.t_gig_created_successfully'))
//         );

//         // Scroll up
//         $this->dispatch('scrollUp');

//     } catch (\Illuminate\Validation\ValidationException $e) {
//         // Validation error
//         $this->alert(
//             'error', 
//             __('messages.t_error'), 
//             livewire_alert_params(__('messages.t_form_has_errors'))
//         );

//     } catch (\Throwable $e) {
//         // General error
//         $this->alert(
//             'error', 
//             __('messages.t_error'), 
//             livewire_alert_params($e->getMessage())
//         );
//     }
// }
    // end
    
    
}