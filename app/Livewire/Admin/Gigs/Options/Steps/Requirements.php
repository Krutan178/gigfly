<?php

namespace App\Livewire\Admin\Gigs\Options\Steps;

use App\Http\Validators\Admin\Gigs\Edit\RequirementsValidator;
use App\Models\Gig;
use App\Models\GigRequirement;
use App\Models\GigRequirementOption;
use Livewire\Component;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;

class Requirements extends Component
{
    use SEOToolsTrait;
    
    public $requirements    = [];
    public $add_requirement = [
        'options' => [0 => '', 1 => '']
    ];
    public $is_edit         = false;
    public $selected;

    public $gig;

    /**
     * Init component
     *
     * @param integer $id
     * @return void
     */
    public function mount(Gig $gig)
    {
        // Set gig
        $this->gig = $gig;

        // Set requirements
        foreach ($gig->requirements as $req) {
            
            // Set empty options
            $options = [];

            // Check if requirement has options
            if ($req->options()->count()) {
                foreach ($req->options as $option) {
                    array_push($options, $option->option);
                }
            }
            
            // Set requirement
            $requirement = [
                'question'    => $req->question,
                'type'        => $req->type,
                'is_required' => $req->is_required,
                'is_multiple' => $req->is_multiple,
                'options'     => $options
            ];

            // Add this requirement to list
            array_push($this->requirements, $requirement);

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
        $this->seo()->setTitle( setSeoTitle(__('messages.t_edit_requirements'), true) );
        $this->seo()->setDescription( settings('seo')->description );

        return view('livewire.admin.gigs.options.steps.requirements');
    }


    /**
     * Init select2 when requirement type changed
     *
     * @return void
     */
    public function updatedAddRequirement()
    {
        // Reload Select2
        $this->dispatch('pharaonic.select2.load', [
            'target'    => '.select2_requirements',
            'component' => $this->id
        ]);
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

        // Reload Select2
        $this->dispatch('pharaonic.select2.load', [
            'target'    => '.select2_requirements',
            'component' => $this->id
        ]);
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

        // Reload Select2
        $this->dispatch('pharaonic.select2.load', [
            'target'    => '.select2_requirements',
            'component' => $this->id
        ]);
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

            // Reload Select2
            $this->dispatch('pharaonic.select2.load', [
                'target'    => '.select2_requirements',
                'component' => $this->id
            ]);

        } catch (\Illuminate\Validation\ValidationException $e) {

            // Validation error
            $this->alert(
                'error', 
                __('messages.t_error'), 
                livewire_alert_params( __('messages.t_toast_form_validation_error'), 'error' )
            );

            // Reload Select2
            $this->dispatch('pharaonic.select2.load', [
                'target'    => '.select2_requirements',
                'component' => $this->id
            ]);

            throw $e;

        } catch (\Throwable $th) {

            // Error
            $this->alert(
                'error', 
                __('messages.t_error'), 
                livewire_alert_params( __('messages.t_toast_something_went_wrong'), 'error' )
            );

            // Reload Select2
            $this->dispatch('pharaonic.select2.load', [
                'target'    => '.select2_requirements',
                'component' => $this->id
            ]);

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

        // Reload Select2
        $this->dispatch('pharaonic.select2.load', [
            'target'    => '.select2_requirements',
            'component' => $this->id
        ]);
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
            $this->dispatch('open-modal', 'modal-add-service-requirement-container');
        }

        // Reload Select2
        $this->dispatch('pharaonic.select2.load', [
            'target'    => '.select2_requirements',
            'component' => $this->id
        ]);
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
                $this->requirements[$this->selected]['is_required'] = $this->add_requirement['is_required'] ? true : false;
                $this->requirements[$this->selected]['is_multiple'] = $this->add_requirement['is_multiple'] ? true : false;
                $this->requirements[$this->selected]['options']     = $this->add_requirement['options'] ? $this->add_requirement['options'] : [];

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

            // Reload Select2
            $this->dispatch('pharaonic.select2.load', [
                'target'    => '.select2_requirements',
                'component' => $this->id
            ]);

        } catch (\Illuminate\Validation\ValidationException $e) {

            // Validation error
            $this->alert(
                'error', 
                __('messages.t_error'), 
                livewire_alert_params( __('messages.t_toast_form_validation_error'), 'error' )
            );

            // Reload Select2
            $this->dispatch('pharaonic.select2.load', [
                'target'    => '.select2_requirements',
                'component' => $this->id
            ]);

            throw $e;

        } catch (\Throwable $th) {

            // Error
            $this->alert(
                'error', 
                __('messages.t_error'), 
                livewire_alert_params( __('messages.t_toast_something_went_wrong'), 'error' )
            );

            // Reload Select2
            $this->dispatch('pharaonic.select2.load', [
                'target'    => '.select2_requirements',
                'component' => $this->id
            ]);

            throw $th;

        }
    }


    /**
     * Go back to preview step
     *
     * @return void
     */
    public function back()
    {
        // Go back to preview step
        return redirect( config('global.dashboard_prefix') . "/gigs/edit/" . $this->gig->uid . "?step=pricing" );
    }


    /**
     * Save requirements data section
     *
     * @return void
     */
    public function save()
    {
        try {
            // Validate form
            RequirementsValidator::all($this);

            // Get old requirements
            $old = GigRequirement::where('gig_id', $this->gig->id)->get();

            // Loop through requirements
            foreach ($old as $o) {
                
                // Delete options
                GigRequirementOption::where('requirement_id', $o->id)->delete();

                // Delete requirement
                $o->delete();

            }

            // Save new requirements
            foreach ($this->requirements as $req) {
                    
                // Save requirement
                $requirement = GigRequirement::create([
                    'gig_id'      => $this->gig->id,
                    'question'    => clean($req['question']),
                    'type'        => $req['type'],
                    'is_required' => isset($req['is_required']) ? $req['is_required'] : false,
                    'is_multiple' => isset($req['is_multiple']) ? $req['is_multiple'] : false
                ]);

                // Check if requirement multiple choices
                if ($req['type'] === 'choice') {
                    
                    // Loop through options
                    foreach ($req['options'] as $option) {
                        
                        // Save option
                        GigRequirementOption::create([
                            'requirement_id' => $requirement->id,
                            'option'         => $option
                        ]);

                    }

                }

            }

            // Success
            return redirect( config('global.dashboard_prefix') . "/gigs/edit/" . $this->gig->uid . "?step=gallery" )->with('success', __('messages.t_requirements_section_has_been_saved'));

        } catch (\Illuminate\Validation\ValidationException $e) {

            // Validation error
            $this->alert(
                'error', 
                __('messages.t_error'), 
                livewire_alert_params( __('messages.t_toast_form_validation_error'), 'error' )
            );

            // Reload Select2
            $this->dispatch('pharaonic.select2.load', [
                'target'    => '.select2_requirements',
                'component' => $this->id
            ]);

            throw $e;

        } catch (\Throwable $th) {

            // Error
            $this->alert(
                'error', 
                __('messages.t_error'), 
                livewire_alert_params( __('messages.t_toast_something_went_wrong'), 'error' )
            );

            // Reload Select2
            $this->dispatch('pharaonic.select2.load', [
                'target'    => '.select2_requirements',
                'component' => $this->id
            ]);

            throw $th;

        }
    }
    
}
