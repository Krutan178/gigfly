<?php

namespace App\Http\Validators\Admin\Languages;

use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class EditValidator
{
    
    /**
     * Validate form
     *
     * @param object $request
     * @return void
     */
    static function validate($request)
    {
        try {

            // Set rules
            $rules    = [
                'name'                   => ['required', 'max:60', Rule::unique('languages')->ignore($request->language->id)],
                'language_code'          => ['required', 'max:2', Rule::unique('languages')->ignore($request->language->id)],
                'country_code'           => 'required|max:2',
                'is_active'              => 'boolean',
                'force_rtl'              => 'boolean',
                'backend_timing_locale'  => 'required|max:20',
                'frontend_timing_locale' => 'required|max:20',
                'i_will_indentation'     => 'required|integer'
            ];

            // Set errors messages
            $messages = [
                'name.required'                   => __('messages.t_validator_required'),
                'name.max'                        => __('messages.t_validator_max', ['max' => 60]),
                'name.unique'                     => __('messages.t_validator_unique'),
                'language_code.required'          => __('messages.t_validator_required'),
                'language_code.max'               => __('messages.t_validator_max', ['max' => 2]),
                'language_code.unique'            => __('messages.t_validator_unique'),
                'country_code.required'           => __('messages.t_validator_required'),
                'country_code.max'                => __('messages.t_validator_max', ['max' => 2]),
                'is_active.boolean'               => __('messages.t_validator_boolean'),
                'force_rtl.boolean'               => __('messages.t_validator_boolean'),
                'backend_timing_locale.required'  => __('messages.t_validator_required'),
                'backend_timing_locale.max'       => __('messages.t_validator_max', ['max' => 20]),
                'frontend_timing_locale.required' => __('messages.t_validator_required'),
                'frontend_timing_locale.max'      => __('messages.t_validator_max', ['max' => 20]),
                'i_will_indentation.required'     => __('messages.t_validator_required'),
                'i_will_indentation.integer'      => __('messages.t_validator_integer'),
            ];

            // Set data to validate
            $data     = [
                'name'                   => $request->name,
                'language_code'          => $request->language_code,
                'country_code'           => $request->country_code,
                'is_active'              => $request->is_active,
                'force_rtl'              => $request->force_rtl,
                'backend_timing_locale'  => $request->backend_timing_locale,
                'frontend_timing_locale' => $request->frontend_timing_locale,
                'i_will_indentation'     => $request->i_will_indentation,
            ];

            // Validate data
            Validator::make($data, $rules, $messages)->validate();

            // Reset validation
            $request->resetValidation();

        } catch (\Throwable $th) {
            throw $th;
        }
    }

}
