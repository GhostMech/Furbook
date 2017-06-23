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

Route::get('/', function () {
    return view('welcome');
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
    
    $breeds = App\Breed::all();

    foreach ($breeds as $breed) {
        $names[$breed['id']] = strtolower($breed['name']);
    }
    
    $breedname = 'Breed Not Found';
    
    foreach ($names as $key => $value) {
        if ($name === $value) {
            $breedname = ucfirst($names[$key]);
            $breedId = $key;
        }
    }
    
    $cats = App\Cat::where('breed_id', '=', $breedId)->get();
      
    return view('breed')->with('breedname', $breedname)->with('cats', $cats);
    
});




Route::get('/bradys', function () {
    $bradys = App\User::all();
    
    return view('bradys')->with('bradys', $bradys);
});