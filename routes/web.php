<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
  $comis_data = config("db_comics");
  $final_comics_data = [];

  foreach ($comis_data as $index => $comic){
    $comic['id'] = $index;
    $final_comics_data[] = $comic;
  }
  dump($final_comics_data);

  return view('home.index', [
    "comics_list" => $final_comics_data
  ]);
})->name("home");

Route::get('/comics', function() {
  return view('products.comic_page');
})->name('products.comic_page');