<?php

namespace laravelito\Http\Controllers\API;

use laravelito\Article;
use Illuminate\Http\Request;
use laravelito\Http\Controllers\Controller;
use laravelito\Http\Requests\StoreArticle;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Article::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticle $request)
    {
        $validated = $request->validated();
       if ($validated) {
            return response()->json($request, 201);
        } else {
            return response()->json([
                'Error' => 'que andai haciendo'
            ]);
        }

        // $article = Article::create($request->all());
        // return response()->json($article, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \laravelito\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return $article;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \laravelito\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \laravelito\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $article->update($request->all());
        return response()->json($article, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \laravelito\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return response()->json(null, 204);
    }
}
