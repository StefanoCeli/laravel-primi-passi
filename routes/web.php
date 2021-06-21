<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data = [
        'name' => 'Franco',
        'age' => 17,
        'videogames' => [
            'Demon souls',
            'Ratchet and clank',
            'Lost Ark',
            'World of Warcraft',
            'Devil may cry 5'
        ],
        'links' => [
            [
                'name' => 'Home',
                'url' => '/'
            ],
            [
                'name' => 'About',
                'url' => '/about'
            ],
            [
                'name' => 'Services',
                'url' => '/services'
            ],
            [
                'name' => 'Contacts',
                'url' => '/contacts'
            ]
           
        ]
    ];
    return view('home',$data);
});

Route::get('/about',function () {
    return view('about');
});

Route::get('/services',function () {
    return view('services');
});

Route::get('/contacts',function () {
    return view('contacts');
});
