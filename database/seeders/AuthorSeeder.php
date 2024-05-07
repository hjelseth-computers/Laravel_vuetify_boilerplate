<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use Database\Factories\BookFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $authors = Author::factory(3)->create();
        $books = Book::factory(3)->create();



        foreach ($authors as $author) {
            $author->books()->attach($books->random(3));
        }

        foreach ($books as $book) {
            $book->authors()->attach($authors->random(3));
        }
    }
}
