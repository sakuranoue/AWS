<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FlashcardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('flashcards')->insert([
            'word' => 'word',
            'table_no'  => 1,
            'meaning' => '言葉',
            'language_id' => 1,
            'user_id' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]); 
        
        DB::table('flashcards')->insert([
            'word' => 'cat',
            'table_no'  => 2,
            'meaning' => '猫',
            'language_id' => 2,
            'user_id' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]); 
        
        DB::table('flashcards')->insert([
            'word' => 'dog',
            'table_no'  => 3,
            'meaning' => '犬',
            'language_id' => 3,
            'user_id' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]); 
    }
}
