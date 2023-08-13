<?php
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/info', function () {

    User::updateOrCreate([
        'email' => 'jdoe21112@gmail.com'
    ],[
        'name' => 'John Doe1',
        'email' => 'jdoe21112@gmail.com',
        'password' => bcrypt('password')
    ]);

    $users = User::all();

    return $users;
});

Route::get('/about', function () {

   return response()->json([
       'status' => true,
       'code'=>1,
       'message'=>"请求成功",
       'data'=>"Hello, and welcome to my personal 3D model project, where I have created interactive and visually stunning
                            models of some of the world's most famous beverage brands - Coca-Cola, Sprite, and Dr Pepper. Using
                            state-of-the-art 3D modeling software and techniques, I have designed detailed and customizable models that
                            showcase the unique and iconic features of each product. These models are perfect for enhancing your
                            marketing strategies or simply for personal use to appreciate the intricate designs of these beloved drinks.

                            Through my project, I hope to provide an immersive and engaging way for people to interact with these
                            products in a way that traditional images or videos cannot offer. Each model provides a 360-degree view,
                            allowing you to explore every angle and detail of the product, and includes interactive features and
                            animations that highlight the unique characteristics of each drink. By using these models, you can improve
                            your marketing campaigns or presentations, as they offer an innovative and creative way to showcase your
                            products and stand out from the competition.

                            Whether you are a marketing professional, a designer, or simply a fan of Coca-Cola, Sprite, or Dr Pepper, my
                            3D models offer a new and exciting way to appreciate these brands. So, take some time to explore my models
                            and discover the endless possibilities they offer for enhancing your product visualization and marketing
                            strategies.",
   ], 200);
});
Route::get('/contact', function () {

   return response()->json([
       'status' => true,
       'code'=>1,
       'message'=>"请求成功",
       'data'=>" Email: garygary951951@gmail.com
                            Gary Hung
                            Github: https://github.com/GayRy",
   ], 200);
});
