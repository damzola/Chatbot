<?php

use Laravel\Pail\ValueObjects\Origin\Console;

$botman = app('botman');

//HERE IS A FALLBACK MESSAGE WHEN INPUT DOES NOT MATCH WITH ANY REPLYS.

$botman -> Fallback(function ($bot){
    $message = $bot->getMessage();
    $bot->reply("Sorry i don't understand: ' ".$message->getText()." ' ".', i only answers weather related question!');

});

//Weather API communication with chatbot

//WEATHER FORECAST NOT AVAILIABLE IN FREE MODE!
// $botman->hears('{days} days weather forecast in {location}', function ($bot, $days, $location){
//     $url= 'http://api.weatherstack.com/forecast?access_key=1356ee0aa7486f2c73f9109b6411dddc&query='.urlencode($location). '&forecast_days='.urlencode($days);
//     $res = json_decode(file_get_contents($url));

//     $bot->reply('weather in '. $res->location->name . ', ' .$res->location->country. ',');
//     $bot->reply(implode(", ", $res->current->weather_descriptions));
//     $bot->reply('Temp is: '. $res->current->temperature . ' degree celsius');
//     $bot->reply('Humidity is: '. $res->current->humidity. ' ');
// });


$botman->hears('weather in {location}', function ($bot, $location){
    $url= 'http://api.weatherstack.com/current?access_key=1356ee0aa7486f2c73f9109b6411dddc&query='.urlencode($location);
    $res = json_decode(file_get_contents($url));

    $bot->reply('weather in '. $res->location->name . ', ' .$res->location->country. ',');
    $bot->reply(implode(", ", $res->current->weather_descriptions));
    $bot->reply('Temp is: '. $res->current->temperature . ' degree celsius');
    $bot->reply('Humidity is: '. $res->current->humidity. ' ');
});

$botman->hears('what is the weather condiction in {location}', function ($bot, $location){
    $url= 'http://api.weatherstack.com/current?access_key=1356ee0aa7486f2c73f9109b6411dddc&query='.urlencode($location);
    $res = json_decode(file_get_contents($url));

    $bot->reply('weather in '. $res->location->name . ', ' .$res->location->country. ',');
    $bot->reply(implode(", ", $res->current->weather_descriptions));
    $bot->reply('Temp is: '. $res->current->temperature . ' degree celsius');
    $bot->reply('Humidity is: '. $res->current->humidity. ' ');
});

$botman->hears('what is the weather in {location}', function ($bot, $location){
    $url= 'http://api.weatherstack.com/current?access_key=1356ee0aa7486f2c73f9109b6411dddc&query='.urlencode($location);
    $res = json_decode(file_get_contents($url));

    $bot->reply('weather in '. $res->location->name . ', ' .$res->location->country. ',');
    $bot->reply(implode(", ", $res->current->weather_descriptions));
    $bot->reply('Temp is: '. $res->current->temperature . ' degree celsius');
    $bot->reply('Humidity is: '. $res->current->humidity. ' ');
});

$botman->hears("information", function ($bot){
    $user = $bot->getUser();

    $bot->reply('Name: '. $user->getFirstName());
});
