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
        
        // debug in console
        // $this->command->info(print_r($comics));

        foreach($comics as $comic) {
            $newComic = new Comic();

            // $table->string('title', 100);
            $newComic->title = $comic['title'];
            // $table->text('description');
            $newComic->description = $comic['description'];
            // $table->string('thumb');
            $newComic->thumb = $comic['thumb'];
            // $table->float('price');
            $newComic->price = $comic['price'];
            // $table->string('series');
            $newComic->series = $comic['series'];
            // $table->date('sale_date');
            $newComic->sale_date = $comic['sale_date'];
            // $table->string('type');
            $newComic->type = $comic['type'];
            // $table->json('artists');
            $newComic->artists = implode(',', $comic['artists']);
            // $table->json('writers');
            $newComic->writers = implode(',', $comic['writers']);

            $newComic->save();
        }


    }
}
