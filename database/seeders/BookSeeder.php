<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Book::create([
            'title' => 'The Great Gatsby',
            'author' => 'F. Scott Fitzgerald',
            'year' => 1925,
            'isbn' => '9780743273565',
        ]);
        Book::create([
            'title' => 'To Kill a Mockingbird',
            'author' => 'Harper Lee',
            'year' => 1960,
            'isbn' => '9780061120084',
        ]);
    }
}
