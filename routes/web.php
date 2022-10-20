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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['namespace' => 'AdminPanel','middleware' => 'auth'], function(){

    Route::get('/dashboard','DashboardController@home')->name('dashboard');


                   // U s e r s

    Route::get('/users','UserController@all_users')->name('users');

    Route::get('/user/add','UserController@add_user')->name('add.user');
    Route::post('/user/adding','UserController@adding_user')->name('user.added');

    Route::get('/user/edit/{id}','UserController@edit')->name('user.edit');

    Route::post('/user/update/{id}','UserController@update')->name('user.update');

    Route::get('/user/delete/{id}','UserController@delete')->name('user.delete');


                // S U R V E Y

   Route::get('/survey','SurveyController@all')->name('survey');
    Route::get('/survey/add/category','SurveyController@adding')->name('survey.add');
     Route::post('/survey/added','SurveyController@added')->name('survey.added');
  
                      // C A T E G O R Y

    Route::get('/category/add','CategoryController@add')->name('category.add');

    Route::post('/category/added','CategoryController@added')->name('category.added');
    
                    // S U B   C A T E G O R Y

    Route::get('/sub_category/add','SubCategoryController@add')->name('sub_category.add');

    Route::post('/sub_category/added','SubCategoryController@added')->name('sub_category.added');

                     // S U B   C A T E G O R Y   D a t a

    Route::get('/sub_category_data/add','SubCategoryDataController@add')->name('sub_category_data.add');
    Route::get('/get_subcategories', 'SubCategoryDataController@getSubCategories')->name('get_subcategories');
                     
                     // adding survey
    Route::post('/sub_category_data/added','SubCategoryDataController@added')->name('sub_category_data.added');


                  // Edit survey

  Route::get('/survey/edit/{id}', 'SubCategoryDataController@edit')->name('survey.edit');

   Route::post('/update/survey/{id}', 'SubCategoryDataController@update')->name('survey.update');


                 // Adding question to survey
Route::get('/add/questions/{id}', 'SurveyQuestionController@add_question')->name('add.question');

                   // Deleting survey
 
  Route::get('/survey/delete/{id}', 'SubCategoryDataController@delete')->name('survey.delete');


                    // Adding Survey Question

Route::post('/survey/adding/questions/{id}', 'SurveyQuestionController@creating')->name('survey.question.add');



    Route::get('/logout', function(){

    Auth::logout();
    return redirect()->route('login');

    })->name('logout');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::view('forgot_password/', 'auth.reset-password')->name('password.reset');

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
