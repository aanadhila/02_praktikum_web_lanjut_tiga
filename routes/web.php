<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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
    return '<a href=": https://www.educastudio.com">Home</a>';
});

Route::prefix('category')->group(function(){
    Route::get('/eduGames',function(){
        return '<a href="https://www.educastudio.com/category/marbel-edu-games">Halaman Educational Game</a>';
    });
    Route::get('/kidsGames',function(){
        return '<a href="https://www.educastudio.com/category/marbel-and-friends-kids-games">Halaman Kids Games/a>';
    });
    Route::get('/storyBooks',function(){
        return '<a href="https://www.educastudio.com/category/riri-story-books">Halaman Kids Story Book/a>';
    });
    Route::get('/songs',function(){
        return '<a href="https://www.educastudio.com/category/kolak-kids-songs">Halaman Kids Song/a>';
    });
});

Route::get('/news/{id}',function($id){
    if ($id == 1) {
        return "<a href=https://www.educastudio.com/> Halaman Daftar Berita </a>";
    }
    else {
        return "<a href=https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19> Halaman Berita Covid-19</a>";
    }
});

Route::prefix('program')->group(function(){
    Route::get('/karir',function(){
        return '<a href="https://www.educastudio.com/program/karir">Karir</a>';
    });
    Route::get('/magang',function(){
        return '<a href="https://www.educastudio.com/program/magang">Magang/a>';
    });
    Route::get('/kunjunganIndustri',function(){
        return '<a href="https://www.educastudio.com/program/kunjungan-industri">Kunjungan Industri/a>';
    });
});

Route::get('/about', function () {
    return '<a href=":https://www.educastudio.com/about-us">About Us</a>';
});

Route::resource('/contact', ContactController::class)->only([
    'index'
]);