<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'Kareem Badawy',
            'email' => 'admin@admin.com',
            'password' => Hash::make(123456),
            'created_at' => Carbon::now(),
        ]);
    }
}
