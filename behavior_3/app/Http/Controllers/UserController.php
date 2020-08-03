<?php

namespace App\Http\Controllers;

use App\Address;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
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
        $user = User::find($id);

        echo "<h1> Dados do Usuário</h1>";
        echo "Nome do Usuário : {$user->name}<br>";
        echo "Email do Usuário : {$user->email}<br>";

        $addressDelivery = $user->addressDelivery()->first();

        if ($addressDelivery) {
            echo "<h1> Endereço de Entrega</h1>";
            echo "Endereço : {$addressDelivery->address} , {$addressDelivery->number}<br>";
            echo "Complemento : {$addressDelivery->complement} , CEP: {$addressDelivery->zipcode}<br>";
            echo "Cidade/Estado : {$addressDelivery->city}/{$addressDelivery->state}<br>";
        }

//        $address1 = new Address([
//            'address' => 'Rua 11 De Junho',
//            'number' => '14',
//            'complement' => 'Complemento',
//            'zipcode' => '57014-410',
//            'city' => 'Maceió',
//            'state' => 'AL'
//        ]);
//
//        $address = new Address();
//        $address->address = 'Rua dos Bobos 1';
//        $address->number = '2';
//        $address->complement = 'Complemento 2';
//        $address->zipcode = '57214-789';
//        $address->city = 'Barra';
//        $address->state = 'Al';
//
////        $user->addressDelivery()->save($address);
////        $user->addressDelivery()->saveMany([$address, $address1]);
//
//        $user->addressDelivery()->create([
//            'address' => 'Rua 12 De Junho',
//            'number' => '14',
//            'complement' => 'Complemento',
//            'zipcode' => '57014-410',
//            'city' => 'Maceió',
//            'state' => 'AL'
//        ]);
//
//        $user->addressDelivery()->createMany([[
//            'address' => 'Rua 13 De Junho',
//            'number' => '14',
//            'complement' => 'Complemento',
//            'zipcode' => '57014-410',
//            'city' => 'Maceió',
//            'state' => 'AL'
//        ],[
//            'address' => 'Rua 14 De Junho',
//            'number' => '14',
//            'complement' => 'Complemento',
//            'zipcode' => '57014-410',
//            'city' => 'Maceió',
//            'state' => 'AL'
//        ]]);

//        $users = User::with('addressDelivery')->get();
//        dd($users);

        $posts = $user->posts()->orderBy('id','DESC')->get();

        if ($posts) {
            echo "<h1> Posts</h1>";
            foreach ($posts as $post) {
                echo " #{$post->id} Titulo : {$post->title}<br>";
                echo "Subtitulo : {$post->subtitle}<br>";
                echo "Conteudo : {$post->description}<br>";
                echo "<hr>";
            }
        }

       /* $comments = $user->commmentsOnMyPost()->get();

        if($comments){
            echo "<h1> Comentarios</h1><br>";
            foreach ($comments as $comment){
                echo "Post #{$comment->post} User #{$comment->user} {$comment->content} <br>";
            }
        }*/


        $user->comments()->create([
           'content' => 'Teste de Comentario'
        ]);

        $comments = $user->comments()->get();

        if ($comments) {
            echo "<h1> Comentarios </h1>";
            foreach ($comments as $comment) {
                echo "Comentatario # {$comment->content}<br>";
            }
        }

        $students = User::students()->get();

        if($students){
            echo "<h1> Alunos </h1>";
            foreach ($students as $student) {
                echo "Nome do Usuário : {$student->name}<br>";
                echo "Email do Usuário : {$student->email}<br>";
                echo "<br>";
            }
        }

        $admins = User::admins()->get();

        if($admins){
            echo "<h1> Administradores </h1>";
            foreach ($admins as $admin) {
                echo "Nome do Usuário : {$admin->name}<br>";
                echo "Email do Usuário : {$admin->email}<br>";
                echo "<br>";
            }
        }
        $users = User::all();
        var_dump($users->makeVisible('created_at')->toArray());
        var_dump($users->makeHidden('created_at')->toJson(JSON_PRETTY_PRINT));

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
