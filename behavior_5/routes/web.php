<?php


use App\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/log', function () {
    /* Log::info('Teste');
     Log::channel('stack')->info('Teste');*/

    Log::stack(['stack', 'daily'])->info('Teste');
});

Route::get('/session', function () {

    session([
        'curso' => 'LaraDev'
    ]);

    session()->put('name', 'Rafael Lucio');


    /*session('','')->*/

    var_dump(session()->all());
});

Route::get('/email', function () {

    $user = new stdClass();
    $user->name = "Rodrigo Maxwell";
    $user->email = "rafaellucio.developer@gmail.com";

    $order = new stdClass();
    $order->type = "billet";
    $order->due_at = "2019-01-10";
    $order->value = "697";

    Mail::send(new \App\Mail\welcomeLaraDev($user, $order));
    //return new \App\Mail\welcomeLaraDev($user,$order    );
});
Route::get('/email-queue', function () {

    $user = new stdClass();
    $user->name = "Rodrigo Maxwell";
    $user->email = "rafaellucio.developer@gmail.com";

    $order = new stdClass();
    $order->type = "billet";
    $order->due_at = "2019-01-10";
    $order->value = "697";

    \App\Jobs\welcomeLaraDev::dispatch($user, $order)->delay(now()->addSeconds(15));

    //Mail::send(new \App\Mail\welcomeLaraDev($user,$order));
    //return new \App\Mail\welcomeLaraDev($user,$order    );
});


Route::get('/files', function () {

    \Illuminate\Support\Facades\Storage::makeDirectory('public/course');


    $files = Storage::files();
    $Allfiles = Storage::allFiles();
    $directories = Storage::directories();
    $allDirectories = Storage::Alldirectories();


    var_dump($Allfiles, $directories, $allDirectories);
});

Route::get('/', function () {
    $user = new stdClass();
    $user->name = 'Rafael Lucio';
    $user->birth = '1990-07-14';

    return view('front.home' ,[
        'user' => $user
    ]);
});


Route::get('curso', function(){
    return view('front.course');
});
