<?php

namespace App\Http\Validators\Admin\Projects\Skills;

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
                'name'     => ['required', 'max:60', Rule::unique('projects_skills')->ignore($request->skill->id)],
                'slug'     => ['required', 'max:160', Rule::unique('projects_skills')->ignore($request->skill->id)],
                'category' => 'required|exists:categories,id'
            ];

            // Set errors messages
            $messages = [
                'name.required'     => __('messages.t_validator_required'),
                'name.max'          => __('messages.t_validator_max', ['max' => 60]),
                'name.unique'       => __('messages.t_validator_unique'),
                'slug.required'     => __('messages.t_validator_required'),
                'slug.max'          => __('messages.t_validator_max', ['max' => 160]),
                'slug.unique'       => __('messages.t_validator_unique'),
                'category.required' => __('messages.t_validator_required'),
                'category.exists'   => __('messages.t_validator_exists')
            ];

            // Set data to validate
            $data     = [
                'name'     => $request->name,
                'slug'     => $request->slug,
                'category' => $request->category
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
