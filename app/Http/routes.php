<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
//-------------------------------------Documentation Routes--------------------
$app->get('/', function () use ($app) {
    return view('Home.index');
//    return $app->version();
});
$app->get('recipe',function(){
    return view('Home.include.recipe');
});
$app->get('ingredients',function(){
    return view('Home.include.ingredients');
});
$app->get('directions',function(){
    return view('Home.include.directions');
});
$app->get('nutritional',function(){
    return view('Home.include.nutritional');
});
$app->get('authentication',function(){
    return view('Home.include.authentication');
});
$app->get('serialization',function(){
    return view('Home.include.serialization');
});


//-------------------------------------API Routes User------------------------------

//Users
$app->get('user', 'UserController@index');
$app->post('user/create','UserController@save');
$app->post('user/log','UserController@log');
$app->get('user/login','UserController@login');
$app->get('user/logout','UserController@logout');
//User Admin
$app->get('user/addrecipe','UserController@form');
$app->get('user/updaterecipe','UserController@update');
$app->get('user/deleterecipe','UserController@delete');
$app->get('user/getDetials','UserController@getDetails');
//update
$app->post('updateRecip','UserController@updateRecip');
$app->post('updateIngre','UserController@updateIngre');
$app->post('updateDirec','UserController@updateDirec');
$app->post('updateNut','UserController@updateNut');
//Delete
$app->post('deleteRecip','UserController@deleteRecip');
$app->post('deleteIngre','UserController@deleteIngre');
$app->post('deleteDirec','UserController@deleteDirec');
$app->post('deleteNut','UserController@deleteNut');

//=======================================================API Routes=======================================================
//recipe
$app->post('api/recipe/create/{apiKey}','RecipeController@save');
$app->put('api/recipe/update/{id}/{apiKey}','RecipeController@update');
$app->delete('api/recipe/delete/{id}/{apiKey}','RecipeController@delete');
$app->get('api/recipe/{id}/{apiKey}','RecipeController@getById');
$app->get('api/recipe/{title}','RecipeController@getByTitle');
//ingredients
$app->post('api/ingredients/create/{apiKey}','IngredientsController@save');
$app->put('api/ingredients/update/{id}/{apiKey}','IngredientsController@update');
$app->delete('api/ingredients/delete/{id}/{apiKey}','IngredientsController@delete');
$app->get('api/ingredients/{id}/{apiKey}','IngredientsController@getById');
//directions
$app->post('api/directions/create/{apiKey}','DirectionsController@save');
$app->put('api/directions/update/{id}/{apiKey}','DirectionsController@update');
$app->delete('api/directions/delete/{id}/{apiKey}','DirectionsController@delete');
$app->get('api/directions/{id}/{apiKey}','DirectionsController@getById');
//nutritional
$app->post('api/nutritional/create/{apiKey}','NutritionalController@save');
$app->put('api/nutritional/update/{id}/{apiKey}','NutritionalController@update');
$app->delete('api/nutritional/delete/{id}/{apiKey}','NutritionalController@delete');
$app->get('api/nutritional/{id}/{apiKey}','NutritionalController@getById');






//$app->get('index','testController@index');
//$app->get('api','testController@test');
//$app->post('api/save','testController@save');
