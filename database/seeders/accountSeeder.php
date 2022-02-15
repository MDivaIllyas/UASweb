<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class accountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->insert([
            ['role_id' => 1, 'gender_id'=> 1,'first_name' => 'muhammad', 'middle_name' => 'diva', 'last_name' => 'illyas', 'email' => 'muhammad.illyas@binus.ac.id', 'password' => 486245, 'display_picture_link' => 'photo.png', 'delete_flag' => 0, 'modified_by' => 'diva']
        ]);
    }
}
