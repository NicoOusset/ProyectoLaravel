<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
use App\Image;
use App\User;
use App\Comment;
use App\Like;
*/

Route::get('/', function () {
    /*
    $images = Image::all();

    foreach($images as $image){
       echo "Imagen: ".$image->image_path."<br>";
       echo "Autor: ".$image->user->name."<br>";

       if(count($image->comments)>=1){
            echo "<h4>Comentarios:</h4>";
            foreach($image->comments as $comment){
                echo $comment->user->nick.": ".$comment->content."<br>";
            }

       }

       echo "<h5>Likes: ".count($image->likes)  ."</h5>";


       echo "<hr>";
    }

    die();
    */
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
