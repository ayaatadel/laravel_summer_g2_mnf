<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/users',function(){
    $users=[
        ["id"=>1,"name"=>"ayaat","age"=>24],
        ["id"=>2,"name"=>"nada","age"=>26],
        ["id"=>3,"name"=>"mohammed","age"=>22],
        ["id"=>4,"name"=>"ameena","age"=>18],

        ];
        return view('usersData',["users"=>$users]);

});
