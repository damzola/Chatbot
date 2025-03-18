<?php

$botman = app('botman');

$botman->hears('Hello', function ($bot){
    $bot->reply('hi');
});
