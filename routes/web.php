<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\authController;
use App\Http\Controllers\adminController;
//use App\Http\Controllers\Sections\SectionController;

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

/*Route::get('/', function () {
    return view('empty');
});
*/
Route::group(
	[
		'prefix' => LaravelLocalization::setLocale(),
		'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath','auth' ]
	], function(){
		 
		Route::get('dashboard',[adminController::class,"index"]);

		Route::group(['namespace'=>'Grades'],function(){
			Route::resource('Grades',GradesController::class);
		});

		Route::group(['namespace'=>'Classrooms'],function(){
			Route::resource('Classroom',ClassroomController::class);
			//Route::post('delete_all',[ClassroomController::class,'delete_all'])->name('delete_all');
			 //Route::post('Filter_Classes',[ClassroomController::class,'Filter_Classes'])->name('Filter_Classes');

			 Route::post('delete_all', 'ClassroomController@delete_all')->name('delete_all');
			 Route::post('Filter_Classes', 'ClassroomController@Filter_Classes')->name('Filter_Classes');

		});

		Route::group(['namespace'=>'Sections'],function(){
			Route::resource('Sections',SectionsController::class);
			//Route::get('/classes/{id}', [SectionController::class,"getclasses"]);
			Route::get('/classes/{id}', 'SectionsController@getclasses');

	 	});


		 Route::view('add_parent','livewire.show_Form')->name('add_parent');
		 Route::get('test',function(){
             return view('dashboard/test');
	});



	});

/*
/*
//Route::group(['prefix' => LaravelLocalization::setLocale()], function()
//{
	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
	////	Route::get('/', function()
	//	{
		//		return View('empty');
		//	});

		//});*/

	//	Route::get('/', [authController::class,"login"]);

	//for user not logined
	Route::group(['middleware'=>['guest']],function(){
	     Route::get('/',[authController::class,"login"]);
		});

		Route::get('/login',[authController::class,"login"])->name('login');
		Route::post('/postlogin',[authController::class,"postlogin"]);

		Route::get('/register',[authController::class,"register"]);
		Route::post('/postregister',[authController::class,"postregister"]);

		Route::get('/logout',[authController::class,"logout"]);
	