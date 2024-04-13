<?php

use App\Services\Templates\ContractGenerator;
use App\Services\Templates\ReportGenerator;
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
    // return view('welcome');

    $contract = new ContractGenerator('1');
    echo $contract->generateDocumentFromTemplate("Bu #date# dan muhim shartnoma");


    $report = new ReportGenerator('2');
    echo $report->generateDocumentFromTemplate("Bu yil daromad #income# milliard");

});


