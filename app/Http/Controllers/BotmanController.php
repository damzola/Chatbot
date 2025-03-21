<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;
use Botman\BotMan\Botman;

class BotmanController extends Controller
{
    public function handle(Request $request){

        $botman = resolve('botman');

        $botman->hears('hello|hi|hey', function (Botman $bot){
            $bot->reply('hi there, how can we help you today?');

    });

    $botman->hears('Tell me about your service(.*)', function (Botman $bot){
        $bot->reply('Good Questions: We offer XYZ services');

});

    $botman->hears('I want to know the weather condiction in {location}', function ($bot, $location){
        $bot->reply('You can frame your questions like this : ');
        $bot->reply('what is the weather condiction in '. $location. ', or');
        $bot->reply('weather in '. $location. ', or');
        $bot->reply('what is the weather in '. $location);
    });

    $botman->hears('so then what is the weather in {location}', function ($bot, $location){
        $bot->reply('You can frame your questions like this : ');
        $bot->reply('what is the weather condiction in '. $location. ', or');
        $bot->reply('weather in '. $location. ', or');
        $bot->reply('what is the weather in '. $location);
    });

    $botman->hears('Tell me what the weather look like in {location}', function ($bot, $location){
        $bot->reply('You can frame your questions like this : ');
        $bot->reply('what is the weather condiction in '. $location. ', or');
        $bot->reply('weather in '. $location. ', or');
        $bot->reply('what is the weather in '. $location);
    });
    $botman->listen();



    }
}
