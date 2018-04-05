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
/*Route::get('hi', 'HiController@hi');

Route::get('mid', function(){
	return view('hello');
})->middleware('test');

Route::get('filter/{max}/{min?}', function($max, $min = 0){
	echo "max = ".$max ." min = ".$min;
});
// Route::get('sayhello/{price}', 'Hellocontroller@index')->where(['price'=>"[0-9]+"]);

Route::get('/sayhello/{age}', function ($age) {
    echo "my age is ". $age;
})-> where(['age' => "[0-9]+"]);*/

Route::get('/', 'CreatesController@home');

Route::get('/create', function(){
	return view('create');
});

Route::post('/insert', 'CreatesController@add');

Route::get('/update/{id}', 'CreatesController@update');

Route::post('/edit/{id}', 'CreatesController@edit');

Route::get('/read/{id}', 'CreatesController@read');

Route::get('/delete/{id}', 'CreatesController@delete');
// Route::get('/', function () {
//     return view('home');
// });
