<?php

use Illuminate\Support\Facades\Route;
use Yuannova\Excel\Validator;
use Yuannova\Excel\Format\TypeA;
use Yuannova\Excel\Format\TypeB;
use Library\TypeC;
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

Route::get('/test1', function() {
    parenthesis('a (b c (d e (f) g) h) i (j k)', 2);
});

Route::get('/test2', function () {
    echo '<h1>File Type A</h1>';
    if (!Validator::validate(base_path('excel/Type_A.xlsx'), TypeA::class)) {
        $errors = Validator::errors();
        foreach ($errors as $row => $error) {
            $rowMessage = [];        
            foreach ($error as $messages) {
                $rowMessage = array_merge($rowMessage, $messages['messages']);
            }
            echo 'Row '.$row.' : '.implode(', ', $rowMessage).'<br>';
        }
    }
    echo '<hr>';
    echo '<h1>File Type B</h1>';
    if (!Validator::validate(base_path('excel/Type_B.xlsx'), TypeB::class)) {
        $errors = Validator::errors();
        foreach ($errors as $row => $error) {
            $rowMessage = [];        
            foreach ($error as $messages) {
                $rowMessage = array_merge($rowMessage, $messages['messages']);
            }
            echo 'Row '.$row.' : '.implode(', ', $rowMessage).'<br>';
        }
    }
    echo '<hr>';
    echo '<h1>File Type B xls</h1>';
    if (!Validator::validate(base_path('excel/Type_B.xls'), TypeB::class)) {
        $errors = Validator::errors();
        foreach ($errors as $row => $error) {
            $rowMessage = [];        
            foreach ($error as $messages) {
                $rowMessage = array_merge($rowMessage, $messages['messages']);
            }
            echo 'Row '.$row.' : '.implode(', ', $rowMessage).'<br>';
        }
    }
    echo '<hr>';
    echo '<h1>File Type C</h1>';
    if (!Validator::validate(base_path('excel/Type_C.xlsx'), TypeC::class)) {
        $errors = Validator::errors();
        foreach ($errors as $row => $error) {
            $rowMessage = [];        
            foreach ($error as $messages) {
                $rowMessage = array_merge($rowMessage, $messages['messages']);
            }
            echo 'Row '.$row.' : '.implode(', ', $rowMessage).'<br>';
        }
    }
});