<?php

namespace App\Livewire\Admin\Services\Payment\Gateways;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
use App\Utils\Uploader\ImageUploader;
use App\Models\AutomaticPaymentGateway;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use App\Http\Validators\Admin\Services\Payment\UpdateValidator;

class CampayComponent extends Component
{
    use SEOToolsTrait, WithFileUploads, LivewireAlert;

    public $name;
    public $slug;
    public $currency;
    public $country;
    public $exchange_rate;
    public $deposit_min_amount;
    public $deposit_max_amount;
    public $is_active;
    public $logo;

    // Fee settings
    public $deposit_fee_percentage;
    public $deposit_fee_fixed;
    public $gigs_checkout_fee_percentage;
    public $gigs_checkout_fee_fixed;
    public $projects_checkout_fee_percentage;
    public $projects_checkout_fee_fixed;
    public $bids_checkout_fee_percentage;
    public $bids_checkout_fee_fixed;

    // Payment gateway settings
    public $app_username;
    public $app_password;
    public $env;

    // Api request link
    public $sandbox_link    = "https://demo.campay.net";
    public $production_link = "https://www.campay.net";

    /**
     * Initialize component
     *
     * @return void
     */
    public function mount()
    {
        
        // Get slug
        $payment_slug = request()->segment(count(request()->segments()));

        // Get settings
        $settings     = payment_gateway($payment_slug);

        // Check if has settings
        if ($settings && $settings->percentage_fee && $settings->settings && $settings->fixed_fee) {
            
            // Get percentage fee
            $fee_percentage = $settings->percentage_fee;

            // Get fixed fee
            $fee_fixed      = $settings->fixed_fee;

            // Get api settings
            $api_settings   = $settings->settings;

            // Fill form
            $this->fill([
                'name'                             => $settings?->name,
                'slug'                             => $settings?->slug,
                'currency'                         => $settings?->currency,
                'country'                          => $settings?->country,
                'exchange_rate'                    => $settings?->exchange_rate,
                'deposit_min_amount'               => $settings?->deposit_min_amount,
                'deposit_max_amount'               => $settings?->deposit_max_amount,
                'deposit_fee_percentage'           => isset($fee_percentage['deposit']) ? $fee_percentage['deposit'] : null,
                'deposit_fee_fixed'                => isset($fee_fixed['deposit']) ? $fee_fixed['deposit'] : null,
                'gigs_checkout_fee_percentage'     => isset($fee_percentage['gigs']) ? $fee_percentage['gigs'] : null,
                'gigs_checkout_fee_fixed'          => isset($fee_fixed['gigs']) ? $fee_fixed['gigs'] : null,
                'projects_checkout_fee_percentage' => isset($fee_percentage['projects']) ? $fee_percentage['projects'] : null,
                'projects_checkout_fee_fixed'      => isset($fee_fixed['projects']) ? $fee_fixed['projects'] : null,
                'bids_checkout_fee_percentage'     => isset($fee_percentage['bids']) ? $fee_percentage['bids'] : null,
                'bids_checkout_fee_fixed'          => isset($fee_fixed['bids']) ? $fee_fixed['bids'] : null,
                'is_active'                        => $settings?->is_active ? 1 : 0,

            ]);

            // Fill api settings
            $this->fill([
                'app_username' => isset($api_settings['app_username']) ? $api_settings['app_username'] : null,
                'app_password' => isset($api_settings['app_password']) ? $api_settings['app_password'] : null,
                'env'          => isset($api_settings['env']) ? $api_settings['env'] : null
            ]);

        } else {

            // Not configured yet
            return redirect(admin_url('services/payment'));

        }


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
        $this->seo()->setTitle( setSeoTitle($this->name, true) );
        $this->seo()->setDescription( settings('seo')->description );

        return view('livewire.admin.services.payment.gateways.' . $this->slug, [
            'currencies' => config('money')['currencies']
        ]);
    }


    /**
     * Update payment gateway
     *
     * @return mixed
     */
    public function update() 
    {
        try {
            
            // Validate form
            UpdateValidator::validate($this);

            // Get old settings
            $settings = payment_gateway($this->slug);

            // Check if a new logo exists in the request
            if ($this->logo) {
                
                // Upload new logo
                $logo_id = ImageUploader::make($this->logo)
                                        ->folder('services')
                                        ->deleteById($settings->logo_id)
                                        ->handle();

            } else {

                // Use old logo
                $logo_id = $settings->logo_id;

            }

            // Set fixed fee
            $fee_fixed      = [
                'deposit'  => $this->deposit_fee_fixed,
                'gigs'     => $this->gigs_checkout_fee_fixed,
                'projects' => $this->projects_checkout_fee_fixed,
                'bids'     => $this->bids_checkout_fee_fixed
            ];

            // Set percentage fee
            $fee_percentage = [
                'deposit'  => $this->deposit_fee_percentage,
                'gigs'     => $this->gigs_checkout_fee_percentage,
                'projects' => $this->projects_checkout_fee_percentage,
                'bids'     => $this->bids_checkout_fee_percentage
            ];

            // Set api settings
            $api_settings   = [
                'app_username'    => $this->app_username,
                'app_password'    => $this->app_password,
                'env'             => $this->env,
                'sandbox_link'    => $this->sandbox_link,
                'production_link' => $this->production_link
            ];

            // Update payment gateway
            AutomaticPaymentGateway::where('slug', $this->slug)->update([
                'name'               => $this->name,
                'logo_id'            => $logo_id,
                'currency'           => $this->currency,
                'exchange_rate'      => $this->exchange_rate,
                'fixed_fee'          => $fee_fixed,
                'percentage_fee'     => $fee_percentage,
                'deposit_min_amount' => $this->deposit_min_amount,
                'deposit_max_amount' => $this->deposit_max_amount,
                'settings'           => $api_settings,
                'is_active'          => $this->is_active ? 1 : 0
            ]);

            // Update cache
            payment_gateway($this->slug, true);

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

        }
    }
    
}
