<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comics = config('comics');
        foreach ($comics as $com) {
            $newComic = new Comic();
            $newComic->title = $com['title'];
            $newComic->description = $com['description'];
            $newComic->thumb = $com['thumb'];
            $newComic->price = $com['price'];
            $newComic->series = $com['series'];
            $newComic->sale_date = $com['sale_date'];
            $newComic->type = $com['type'];
            $newComic->artists = implode(',',$com['artists']) ;
            $newComic->writers = implode(',',$com['writers']);
            $newComic->save();
        }
    }
}
