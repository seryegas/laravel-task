<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 11; $i++) {
            DB::table('authors')->insert([
                'author_name' => 'Author ' . $i,
            ]);
        }
    }
}
