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


Route::get('/', function () {

    /*Queue::push(function($job){
       Log::info('Queue run on the queue');
        $job->delete();
    });*/

    $ships = array(
        array(
            'name' => 'Galactica',
            'show' => 'Battlestar Galactica')
    );
    $queue = Queue::push('App\Jobs\ParseJob', array('ships' => $ships));
    var_dump($queue);
    //Queue::push('App\Jobs\ParseJob', array('file' => '/tmp/file.csv'));

    return view('welcome');
});
