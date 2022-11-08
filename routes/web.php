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
Route::post('/OnSChwHunGaRAnSonVAnoMPERemaLUtRimPTInEMENOUSTrepi/webhook', function () {
    $update = Telegram::commandsHandler(true);

    // Commands handler method returns an Update object.
    // So you can further process $update object
    // to however you want.

    return 'ok';
});
