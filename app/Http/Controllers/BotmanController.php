<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;
use Botman\BotMan\Botman;

class BotmanController extends Controller
{
    public function handle(Request $request){

        $botman = app('botman');

        $botman->hears('hello|hi|hey', function (Botman $bot){
            $bot->reply('hi there, how can we help you today?');

    });

    $botman->hears('Tell me about your service(.*)', function (Botman $bot){
        $bot->reply('Good Questions: We offer XYZ services');

});


    $botman->listen();



    }
}
