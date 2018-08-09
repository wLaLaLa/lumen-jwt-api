<?php

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

// 模拟登陆,获取jwt token
$router->get('mock/token', function () {
    $user = \App\Models\User::first();
    $token = \Illuminate\Support\Facades\Auth::login($user);
    return response()->json([
        'token' => $token,
        'token_type' => 'Bearer',
        'expired' => \Illuminate\Support\Facades\Auth::factory()->getTTl(),
    ]);
});

// 需要jwt验证的路由组
$router->group(['middleware' => ['auth', 'throttle']], function ($router) {
    $router->post('version', 'ExampleController@version');
});
