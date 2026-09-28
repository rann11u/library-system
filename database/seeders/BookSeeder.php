<?php

namespace Database\Seeders;

use App\Models\Book;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Book 2
        Book::create([
            'title' => 'Laravel untuk Pemula',
            'author' => 'Rian Ariona',
            'year' => 2021,
            'stock' => 8,
        ]);
        
        //Book 3
        Book::create([
            'title' => 'Basis Data',
            'author' => 'Fathansyah',
            'year' => 2015,
            'stock' => 3,
        ]);

        //Book 4
        Book::create([
            'title' => 'Algoritma dan Pemrograman',
            'author' => 'Rinaldi Munir',
            'year' => 2015,
            'stock' => 7,
        ]);

        //Book 5
        Book::create([
            'title' => 'Pemrograman Berorientasi Objek',
            'author' => 'Rosa A.S.',
            'year' => 2022,
            'stock' => 9,
        ]);

        //Book 6
        Book::create([
            'title' => 'Habis gelap terbitlah terang',
            'author' => 'R.A. Kartini',
            'year' => 1911,
            'stock' => 2,
        ]);

        //Book 7
        Book::create([
            'title' => 'Atomic Habits',
            'author' => 'James Clear',
            'year' => 2018,
            'stock' => 3,
        ]);

        //Book 8
        Book::create([
            'title' => 'Madilog',
            'author' => 'Tan Malaka',
            'year' => 1943,
            'stock' => 1,
        ]);
    }
}
