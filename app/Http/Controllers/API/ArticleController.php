<?php

namespace laravelito\Http\Controllers\API;

use Illuminate\Http\Request;
use laravelito\Article;
use laravelito\Http\Controllers\Controller;
use laravelito\Http\Requests\StoreArticle;
use laravelito\Http\Resources\GeneralCollection;
use laravelito\Http\Resources\Article as ArticleResource;

class ArticleController extends Controller
{
    protected $article;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Article $article)
    {
        $this->article = $article;
    }
    public function index(): GeneralCollection
    {
        try {
            //probando resource
            // $article = Article::all();
            $article = $this->article::all();
            return new GeneralCollection($article);
            //La función de autenticación devuelve una instancia de autenticador.
            // en este caso cada usuario posee articulos
            // $articles = auth()->user()->articles;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticle $request)
    {
        try {
            $validated = $request->validated();
            if ($validated) {
                $data = auth()->user()->articles()->create($request->all());
                return new ArticleResource($data);
            }
        } catch (\Exception $e) {
            return $e->getMessage();
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
        return new ArticleResource($article);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \laravelito\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(StoreArticle $request, Article $article)
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
