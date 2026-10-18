<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BookSeeder extends Seeder
{
   public function run(): void
    {
        DB::table('books')->insert([
            [
                'title' => 'The Great Gatsby',
                'price' => 15.99,
                'author' => 'F. Scott Fitzgerald',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'To Kill a Mockingbird',
                'price' => 12.50,
                'author' => 'Harper Lee',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => '1984',
                'price' => 10.99,
                'author' => 'George Orwell',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
