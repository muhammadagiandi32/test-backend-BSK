<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\CssSelector\Parser\Shortcut\ElementParser;

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
    return view('welcome');
});

Route::get('/pattern', function () {
    $start = 5;
    for ($loop = 1; $loop <= $start; $loop++) {
        for ($InnerLoop = 1; $InnerLoop <= 8; $InnerLoop++) {
            if ($loop == $InnerLoop - 2)
                echo "*";
            elseif ($loop == $InnerLoop - 1)
                echo "*";
            else
                echo $InnerLoop;
        }
        echo "<br>";
    }
});
