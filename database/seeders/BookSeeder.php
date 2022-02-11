<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 101; $i++) {
            DB::table('books')->insert([
                'book_name' => 'Book ' . $i,
                'author_id' => rand(1, 10),
            ]);
        }
    }
}
