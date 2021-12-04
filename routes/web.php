<?php
use App\Events\ExampleEvent;
/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router -> get('/hello', function () use ($router) {
    $value = config('app.locale');
    $config = app('config');
    config(['app.aa' => 'aa']);
    $environment = app() -> environment();
    $debug = env('APP_DEBUG', 1);
    //$results = app('db')->select("SELECT * FROM threads");
    event(new ExampleEvent);
    $results = env('APP_DEBUG', 1);
    $a = 1;
    /*$threads = App\Models\Phone::all();
    foreach ($threads as $thread) {
        echo $thread->id;
    }*/
    return "hello";
});

$router -> get('/store/{name}', '\App\Http\Controllers\ExampleController@store');
$router -> get('/getphone', '\App\Http\Controllers\ExampleController@eloquentOrmRelation');

$router -> get('/hello/{id}', '\App\Http\Controllers\ExampleController@showYourCase');

