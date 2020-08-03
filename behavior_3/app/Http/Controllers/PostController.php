<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);

        if ($post) {
            echo " #{$post->id} Titulo : {$post->title}<br>";
            echo "Subtitulo : {$post->subtitle}<br>";
            echo "Conteudo : {$post->createdFmt}<br>";
            echo "Data Criação : {$post->description}<br><hr>";
        }

        /*$post->title = "Título de teste do meu artigo!";
        $post->save();*/

        $postAuthor = $post->author()->get()->first();

        if ($postAuthor) {
            echo "<h1> Dados do Usuário</h1>";
            echo "Nome do Usuário : {$postAuthor->name}<br>";
            echo "Email do Usuário : {$postAuthor->email}<br>";

        }

        $postCategories = $post->categories()->get();

        if ($postCategories) {
            echo "<h1> Categorias</h1>";
            foreach ($postCategories as $category) {
                echo "Categoria # {$category->id} {$category->name}<br>";
            }
        }

        //$post->categories()->attach([3]);
        //$post->categories()->detach([3]);
        //$post->categories()->sync([5,10]);
        //$post->categories()->syncWithoutDetaching([5,6,7]);

        /*$post->comments()->create([
           'content' => 'Teste de Comentario'
        ]);*/

        $comments = $post->comments()->get();

        if ($comments) {
            echo "<h1> Comentarios </h1>";
            foreach ($comments as $comment) {
                echo "Comentatario # {$comment->content}<br>";
            }
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
