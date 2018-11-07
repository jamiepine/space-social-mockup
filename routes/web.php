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

Auth::routes();

/*
|--------------------------------------------------------------------------
| GET METHODS
|--------------------------------------------------------------------------
|*/

// APP INITIALIZER
Route::get('/', 'FeedController@index');


// if(Auth::check()){

// 	Route::get('/', 'PagesController@landing');

// } else {

// 	Route::get('/', 'FeedController@index');

// }

Route::get('/logout', 'Auth\LoginController@logout');


Route::get('/user/{user}', function ($user) {
    return view('app');
});

// Route::get('/user/{user}', 'profileController@index')->name('profileController');


/*
|--------------------------------------------------------------------------
| AJAX POST METHODS
|--------------------------------------------------------------------------
|*/
Route::post('/getUpdates', 'FeedController@getUpdates');

Route::post('/newUpdate', 'updateController@store');








// Route::post('/load', 'loadController@index')->name('ajax');

// Route::get('/user/{userid}', 'loadController@app')->with('userid', $userid)->name('user');

// Route::get('/', function () {
//     return view('welcome');
// });



// Accounting

Route::get('/accounting', function () {
    return view('accounting.app');
});
// For each template we create a custom POST route directing to the template controller
// Respective controller returns the appropriate view via AJAX
Route::post('/showTransactions', 'TransactionsController@show')->name('showTransactions');

Route::post('/newTransaction', 'TransactionsController@store')->name('newTransaction');

// Use Eliquent to automatically create routes for each function within the TransactionsController.
Route::resource('accountingTransactions','TransactionsController');





// Route::get('/u/{jeff}', function($jeff)
// {
//   // Run controller and method
//   $app = app();
//   $controller = $app->make('\App\Http\Controllers\FeedController');

//   return $controller->callAction('index', $parameters = array($jeff));

// });










// TEST :: LOADING VIEWS FROM URL (works)
Route::get('/_testloadpage/{page}', function ($page) {
    
	if (View::exists($page)) {
		return view($page);
	} else {
		return 'i dont got it';
	};

});

// Route::post('/loadPage', 'ajaxLoadController');



