<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        #DB::insert('insert into books(isbn,title,price,publisher,published)
        #values ("978-4-8222-5399-8","visual c# 超入門",2000,"ジャパンIT","2022-08-22")');
        Book::factory()->count(50)->create();
    }
}
