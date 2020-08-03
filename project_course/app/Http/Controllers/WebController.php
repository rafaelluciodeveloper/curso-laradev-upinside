<?php

namespace App\Http\Controllers;


use App\Mail\Contact;
use App\Post;
use App\Support\Cropper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class WebController extends Controller
{
    public function home()
    {
        $posts = Post::orderBy('created_at', 'DESC')->limit(3)->get();
        $head = $this->seo->render(env('APP_NAME') . ' - UpInside Treinamentos ',
            'Eleita a melhor escola de desenvolvimento, programação e marketing digital em mais de 17 países pela Latin Quality American Institute!',
            url('/'),
            asset('images/img_bg_1.jpg'));

        return view('front.home', [
            'head' => $head,
            'posts' => $posts
        ]);
    }

    public function course()
    {
        $head = $this->seo->render(env('APP_NAME') . ' - UpInside Treinamentos ',
            'Um treinamento completo do zero ao developer com Laravel para você aprender e se especializar no Framework PHP mais utilizado do mundo e abrir as portas de um mercado repleto de oportunidades!',
            route('course'),
            asset('images/img_bg_1.jpg'));

        return view('front.course', [
            'head' => $head]);
    }

    public function blog()
    {
        $posts = Post::orderBy('created_at', 'DESC')->get();
        $head = $this->seo->render('Blog - UpInside Treinamentos ',
            'Artigos e vídeo aulas sobre desenvolvimento, programação, marketing digital e empreendedorismo',
            route('blog'),
            asset('images/img_bg_1.jpg'));

        return view('front.blog', [
            'head' => $head,
            'posts' => $posts
        ]);
    }

    public function article($uri)
    {
        $post = Post::where('uri', $uri)->first();
        $head = $this->seo->render(env('APP_NAME') . '-' . $post->title,
            $post->subtitle,
            route('article', $post->uri),
            Storage::url(Cropper::thumb($post->cover, 1200, 628)));
        return view('front.article', [
            'head' => $head,
            'post' => $post
        ]);
    }

    public function contact()
    {
        $head = $this->seo->render('Fale Conosco - UpInside Treinamentos ',
            'Deixe aqui sua mensagem, use o telefone ou nossos canais de atendimento para falar com a UpInside',
            route('contact'),
            asset('images/img_bg_1.jpg'));

        return view('front.contact', [
            'head' => $head
        ]);
    }

    public function sendMail(Request $request)
    {
        $data = [
          'reply_name' => $request->first_name . " " . $request->last_name,
          'reply_email' => $request->email,
          'subject' => $request->subject,
          'message' => $request->message
        ];

        Mail::send(new Contact($data));

    }

}
