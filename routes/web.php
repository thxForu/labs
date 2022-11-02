<?php

use Illuminate\Support\Facades\Route;
use Telegram\Bot\Api;


Route::get('/', function () {

    $response = Telegram::getMe();
    $botId = $response->getId();
    $firstName = $response->getFirstName();
    $username = $response->getUsername();
    echo $botId . '<br />' . $firstName . '<br />' . $username;

    //return view('welcome');
});
