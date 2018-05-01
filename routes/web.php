<?php
use App\Event;
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



Auth::routes();

Route::get('/', function () {

    $events = Event::where('posted', true)->where('date','>=', date('Y-m-d'))->orderBy('date', 'desc')->get();
    return view('public.index', compact('events'));
});

Route::group(['middleware' => ['private']], function () {
    Route::resource('my-events', 'MyEventsController');
    Route::get('/home', 'HomeController@index')->name('home');
});
