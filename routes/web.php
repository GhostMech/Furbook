<?php

use Facades\App\Services\Twitter;

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
    return view('welcome');
});

Route::get('/check_login', function() {
   return view('check_login'); 
});

// See https://laravel.com/docs/5.4/mail#introduction
Route::get('/send_email', function () {
    
    $allCats = App\Cat::all();
    $catMail = new App\Mail\Catmail($allCats);
    
    Mail::to(App\Cat::first()->owner_email)->send($catMail);
    
    return 'Mail has been sent';
});

//Route::resource('/cats', 'CatsController');

Route::get('/cats', function () {
    $cats = App\Cat::all();
   
    return view('all_cats')->with('cats', $cats);
});

Route::get('cats/{id}', function($id) {
    $cat = App\Cat::find($id);
    
    return view('cat')->with('cat', $cat);
})->where('id', '[0-9]+');

Route::get('cats/create', function () {
    return view('create_cat');
});
Route::get('/cats/edit/{id?}', function ($id = 0) {
    $cat = App\Cat::whereId($id)->first();
    
    return view('edit_cat')->with('cat', $cat);
});


Route::get('cats/breeds', function () {
    $breeds = App\Breed::all();
    
   return view('breeds')->with('breeds', $breeds);
});
Route::get('cats/breed/{name?}', function ($name = 'domestic') {
    
    // Get all the breeds from the DB.
    $breeds = App\Breed::all();
    
    // Create an array where the key is the breed id, and the value is the breed name.
    foreach ($breeds as $breed) {
        $breedNames[$breed['id']] = strtolower($breed['name']);
    }
    
    // Set some defaults.
    $name = strtolower($name);
    $breedname = 'Breed Not Found';
    $cats = [];
    
    // Check if the breed name from the URL exists in our DB.
    foreach ($breedNames as $key => $value) {
        if ($name === $value) {
            $breedname = ucfirst($breedNames[$key]);
            $breedId = $key;
            
            $cats = App\Cat::where('breed_id', '=', $breedId)->get();
            $catsCount = $cats->count();
        }
    }
      
    return view('breed', ['breedname' => $breedname, 'cats' => $cats, 'catsCount' => $catsCount]);
});

Route::get('/bradys', function () {
    $bradys = App\User::all();
    
    return view('bradys')->with('bradys', $bradys);
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
