<?php

namespace App\Http\Validators\Admin\Pages;

use Illuminate\Support\Facades\Validator;

class CreateValidator
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

            // Set empty rules array
            $rules               = [];

            // Get supported languages
            $supported_languages = supported_languages();

            // Loop through supported languages
            foreach ($supported_languages as $lang) {
                
                // Set rule
                $rules['title.' . $lang->language_code] = 'required|max:100';

            }

            $rules['slug']    = 'required|max:30|unique:pages';
            $rules['is_link'] = 'boolean';
            $rules['link']    = 'nullable|max:120';
            $rules['column']  = 'required|in:1,2,3,4';

            // Set errors messages
            $messages = [
                'title.*.required'  => __('messages.t_validator_required'),
                'title.*.max'       => __('messages.t_validator_max', ['max' => 100]),
                'slug.required'   => __('messages.t_validator_required'),
                'slug.max'        => __('messages.t_validator_max', ['max' => 30]),
                'slug.unique'     => __('messages.t_validator_unique'),
                'is_link.boolean' => __('messages.t_validator_boolean'),
                'link.max'        => __('messages.t_validator_max', ['max' => 120]),
                'column.required' => __('messages.t_validator_required'),
                'column.in'       => __('messages.t_validator_in')
            ];

            // Set data to validate
            $data     = [
                'title'   => $request->title,
                'slug'    => $request->slug,
                'content' => $request->content,
                'is_link' => $request->is_link,
                'link'    => $request->link,
                'column'  => $request->column
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
