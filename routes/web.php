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


Route::get('/', 'HomeController@splash')->name('splash');

Route::get('/movie-api', function () {
    
    return view('movie-api');
});

Route::get('/omdb', function () {
        
    return view('omdb');
});
Route::get('/tvshowz', function () {
    
return view('tvshowz');
});

Route::get('/components', function () {

    return view('components');
});

Route::get('/profilepage', function () {
    return view('profile-page');   
});

Route::get('/item', function () {
    return view('item-page');   
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users', 'UsersController');
  
Route::resource('movies', 'MoviesController');
Route::resource('people', 'PeopleController');
Route::resource('genres', 'GenresController');
Route::resource('tvshows', 'TvshowsController');
Route::resource('reviews', 'ReviewsController');

Route::group(['middleware' => 'web', 'prefix' => config('backpack.base.route_prefix')], function () {
    Route::get('logout', 'Auth\LoginController@logout');
});
Route::get('categories', 'MoviesController@genreSelect');

Route::get('tvshows/{item_id}/seasons/{season_nr}', 'SeasonsController@show');
Route::get('tvshows/{item_id}/seasons/{season_nr}/episodes/{episode_nr}', 'EpisodesController@show');

Route::get('/search', 'SearchController@index');
Route::resource('movies.reviews', 'ReviewsController');
Route::resource('movies.reviews.comments', 'CommentsController');

Route::resource('tvshows.reviews', 'ReviewsController');
Route::resource('tvshows.reviews.comments', 'CommentsController');

Route::get('watchlist', 'WatchlistsController@show')->middleware('auth');
Route::post('/watchlist', 'WatchlistsController@store');
Route::delete('/watchlist/delete', 'WatchlistsController@destroy');
