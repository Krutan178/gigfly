<?php
namespace App\Livewire\Admin\Profile;

use Livewire\Component;
use WireUi\Traits\Actions;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Hash;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Http\Validators\Admin\Profile\EditValidator;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;

class ProfileComponent extends Component
{
    use SEOToolsTrait, LivewireAlert, Actions;
    
    public $username;
    public $email;
    public $password;
    public $new_password;
    public $password_confirm;

    /**
     * Init component
     *
     * @return void
     */
    public function mount()
    {
        // Get admin
        $admin = auth('admin')->user();

        // Fill form
        $this->fill([
            'username' => $admin->username,
            'email'    => $admin->email
        ]);
    }


    /**
     * Render component
     *
     * @return Illuminate\View\View
     */
    #[Layout('components.layouts.admin-app')]
    public function render()
    {
        // Seo
        $this->seo()->setTitle( setSeoTitle(__('messages.t_edit_profile'), true) );
        $this->seo()->setDescription( settings('seo')->description );

        return view('livewire.admin.profile.profile');
    }
    

    /**
     * Update profile
     *
     * @return void
     */
    public function update()
    {
        try {

            // Validate form
            EditValidator::validate($this);

            // Get admin
            $admin = auth('admin')->user();

            // Verify current password
            if (!Hash::check($this->password, $admin->password)) {
               
                // Error
                $this->notification([
                    'title'       => __('messages.t_error'),
                    'description' => __('messages.t_current_password_doesnt_match'),
                    'icon'        => 'error'
                ]);

                return;

            }

            // Request password change?
            if ($this->new_password) {
                
                // Update admin password
                $admin->password = Hash::make($this->new_password);
                $admin->save();

            }

            // Update details
            $admin->username = $this->username;
            $admin->email    = $this->email;
            $admin->save();

            // Success
            $this->notification([
                'title'       => __('messages.t_success'),
                'description' => __('messages.t_admin_profile_updated'),
                'icon'        => 'success'
            ]);

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

}
