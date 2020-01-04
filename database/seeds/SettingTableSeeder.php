<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'sitename_ar' => 'Kareem',
            'sitename_en' => 'Kareem',
            'email' => 'test@test.com',
            'main_lang' => 'ar',
            'description' => 'Kareem',
            'keywords' => 'Kareem',
            'message_maintenance' => 'Kareem',
        ]);
    }
}
