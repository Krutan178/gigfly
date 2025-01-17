<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingsAppearanceTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        
        \DB::table('settings_appearance')->insert(array (
            0 => 
            array (
                'id'                     => 1,
                'colors'                 => '{"primary":"#4f46e5"}',
                'sizes'                  => '{"header_desktop_logo_height":"30"}',
                'is_dark_mode'           => 1,
                'font_link'              => '<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Display:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">',
                'font_family'            => 'Noto Sans Display',
                'is_featured_categories' => 1,
                'is_best_sellers'        => 1,
                'placeholder_img_id'     => null,
            ),
        ));
        
        
    }
}