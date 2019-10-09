<?php

namespace laravelito\Http\Controllers\API;

use Illuminate\Http\Request;
use laravelito\Article;
use laravelito\Http\Controllers\Controller;
use laravelito\Http\Requests\StoreArticle;
use laravelito\Http\Resources\Article as ArticleResource;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //La función de autenticación devuelve una instancia de autenticador.
        // en este caso cada usuario posee articulos
        // $articles = auth()->user()->articles;
        // return response()->json([
        //     'success' => true,
        //     'data' => $articles
        // ]);

        //probando resource
        $articulos = auth()->user()->articles()->paginate(2);
        // $user = Article::find(20)->users;
        // return $user;

        // return newArticleCollection($articulos);
        return ArticleResource::collection($articulos)->additional(['meta' =>
            ['version' => '1.0.0',
            'API_base_url' => url('/')],
        ]);

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
                'Error' => 'que andai haciendo',
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
