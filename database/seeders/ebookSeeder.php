<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ebookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ebooks')->insert([
            ['title' => 'boboiboy', 'author' => 'isiyama', 'description' => 'boboiboy is the hero protect the earth from allien that want to destroy earth.'],
            ['title' => 'disabled hero', 'author' => 'wit', 'description' => 'this is the story about hero who is disabled that deaf and mute and want to be king.'],
            ['title' => 'love war', 'author' => 'ewan', 'description' => 'the story of comedy love in junior high school'],
            ['title' => 'Tokyo gang', 'author' => 'takemichi', 'description' => 'the story is about draken who travel back to the past for saving his beloved.'],
            ['title' => 'ssss grim', 'author' => 'iruna', 'description' => 'story about hero fight with a robot to fight allien.']

        ]);
    }
}
