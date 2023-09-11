<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $data=[
        ['key'=>0,'text' =>'“You made it so simple.”','stars'=>4, 'image'=>'https://via.placeholder.com/43x43', 'name'=>'Brian Krotesty','role'=>'Consultant'],
        ['key'=>1,'text'=>'“You made it so simple. My new site is so much faster and easier to work with than my old site. I just choose the page, make the change & it is a good channel for us.”', 'image'=>'https://via.placeholder.com/43x43', 'name'=>'Alexa Popen', 'role'=>'CEO', 'stars'=>5],
        ['key'=>2,'text'=>'“You made it so simple. My new site is so much faster and easier to work with than my old site. I just choose the page, make the change & it is a good channel for us.”', 'image'=>'https://via.placeholder.com/43x43', 'name'=>'Alexa Popen', 'role'=>'CEO', 'stars'=>5]
    
        ];
    return view('welcome')->with('data',$data);
});
