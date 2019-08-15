<?php

use Illuminate\Database\Seeder;
use laravelito\Article;

class ArticlesTableSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Article::class, 20)->create();
    }
}
