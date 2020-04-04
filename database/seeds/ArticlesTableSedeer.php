<?php

use Illuminate\Database\Seeder;
use laravelito\Article;
use laravelito\User;

class ArticlesTableSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(Article::class, 20)->create();
        /* creo 20 usuarios con 20 articulos */
        factory(User::class, 4)->create()->each(function ($article) {
            $article->articles()->saveMany(factory(Article::class, 5)->make());
        });
        // factory(Article::class, 20)->create()->each(function ($user) {
        //     $user->articles()->save(factory(User::class)->make());
        // });
    }
}
