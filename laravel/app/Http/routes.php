<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// use namespace App;


Route::get('/abc', function()
{
    $game = new Game;
    $game->name = 'Assassins Creed';
    $game->description = 'Assassins VS templars.';
    $game->save();


    
    $game->name = 'Assassins Creed 2';
    $game->description = 'Requiescat in pace, Ezio.';
    $game->save();

});

