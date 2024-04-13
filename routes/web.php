<?php

use App\Pattern\Creational\FactoryMethod\ACreator;
use App\Pattern\Creational\FactoryMethod\ConcreteCreator1;
use App\Pattern\Creational\FactoryMethod\ConcreteCreator2;
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
    return view('welcome');
});

Route::get('/document', function () {
    // return view('welcome');

    $contract = new ContractGenerator('1');
    echo $contract->generateDocumentFromTemplate("Bu #date# dan muhim shartnoma");


    $report = new ReportGenerator('2');
    echo $report->generateDocumentFromTemplate("Bu yil daromad #income# milliard");

});

Route::get('/factory', function () {

    echo "Ilova: ConcreteCreator1 bilan ishga tushirilgan.<br>";
    clientCode(new ConcreteCreator1());
    echo "<br>";
    echo "<br>";

    echo "Ilova: ConcreteCreator2 bilan ishga tushirilgan.<br>";
    clientCode(new ConcreteCreator2());

});

function clientCode(ACreator $creator)
{
    // ...
    echo "Mijoz: Men ijodkorning sinfidan xabardor emasman, lekin u hali ham ishlaydi.<br>"
        . $creator->someOperation();
    // ...
}


