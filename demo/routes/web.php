<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TrackController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get($uri, $action (function, controller))

// Route::get('/home',function(){
// echo "php summer group 2";
// });

// Route::get('/users',function(){
//     $users=[
//         ["id"=>1,"name"=>"ayaat","age"=>24],
//         ["id"=>2,"name"=>"nada","age"=>26],
//         ["id"=>3,"name"=>"mohammed","age"=>22],
//         ["id"=>4,"name"=>"ameena","age"=>18],

//         ];
//         return $users;

// });
/// display only one  user  by id

// Route::get('/users/{id}',function($id){
//     $users=[
//         ["id"=>1,"name"=>"ayaat","age"=>24],
//         ["id"=>2,"name"=>"nada","age"=>26],
//         ["id"=>3,"name"=>"mohammed","age"=>22],
//         ["id"=>4,"name"=>"ameena","age"=>18],
//         ];
//         if($id<count($users))
//         {

//             return $users[$id-1];
//         }else{
//            return abort(404);
//         }

// })->where('id','[0-9]+');


/// display on views

// Route::get('/users',function(){
//     $users=[
//         ["id"=>1,"name"=>"ayaat","age"=>24],
//         ["id"=>2,"name"=>"nada","age"=>26],
//         ["id"=>3,"name"=>"mohammed","age"=>22],
//         ["id"=>4,"name"=>"ameena","age"=>18],

//         ];
//         return view('usersData',["users"=>$users]);

// });

/**
 * Route methods
 * get
 * post
 * put
 * delete
 */

 /**
  * create user ==> form => get all data of user(function return view)
  *  store data  ==> function (store data)

 * edit  => data that we want to edit
 * submit edit data

  */



Route::get('/students',[StudentController::class,'index'])->name('students.index');
Route::delete('/students/{id}',[StudentController::class,'destroy'])->name('students.destroy');
Route::get('/students/create',[StudentController::class,'create'])->name('students.create');
Route::get('/students/{id}',[StudentController::class,'show'])->name('students.show');
Route::post('/students/store',[StudentController::class,'store'])->name('students.store');
Route::get('/student/{id}/edit',[StudentController::class,'edit'])->name('students.edit');
Route::put('/student/{id}',[StudentController::class,'update'])->name('students.update');


Route::resource('/tracks',TrackController::class);

/*
// get all routes --> php artisan route:list

 GET|HEAD        tracks ........... tracks.index › TrackController@index
  POST            tracks ........... tracks.store › TrackController@store
  GET|HEAD        tracks/create .. tracks.create › TrackController@create
  GET|HEAD        tracks/{track} ..... tracks.show › TrackController@show
  PUT|PATCH       tracks/{track} . tracks.update › TrackController@update
  DELETE          tracks/{track} tracks.destroy › TrackController@destroy
  GET|HEAD        tracks/{track}/edit tracks.edit › TrackController@edit

*/


/**
 * Day3 task
 * handle all cruds functon for student and track using beautiful design
 */



