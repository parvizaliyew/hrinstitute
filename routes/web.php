<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProgramController;

$locale = Request::segment(1);

if(in_array($locale, ['az','en'])){
    App::setLocale($locale);
}else{
    App::setLocale('az');

    $locale = '';
}


Route::get('/',[HomeController::class,'index'])->name('index.az');
Route::get('/en',[HomeController::class,'index'])->name('index.en');


Route::get('/biz-kimik',[AboutController::class,'index'])->name('about.az');
Route::get('/en/who-we-are',[AboutController::class,'index'])->name('about.en');

Route::get('/tedbirler/kecmis-tedbirler',[EventController::class,'event'])->name('fin.az');
Route::get('/en/events/finished-events',[EventController::class,'event'])->name('fin.en');

Route::get('/tedbirler/qarsidan-gelen-tedbirler',[EventController::class,'event'])->name('fut.az');
Route::get('/en/events/up-coming-events',[EventController::class,'event'])->name('fut.en');

Route::get('/tedbir/qarsidan-gelen-tedbir/{slug}',[EventController::class,'future'])->name('future.az');
Route::get('/en/event/up-coming-event/{slug}',[EventController::class,'future'])->name('future.en');

Route::get('/tedbir/kecmis-tedbir/{slug}',[EventController::class,'finish'])->name('finish.az');
Route::get('/en/event/finished-event/{slug}',[EventController::class,'finish'])->name('finish.en');

Route::get('/hr-hell/{slug}',[ProgramController::class,'hr'])->name('hr.az');
Route::get('/en/hr-solution/{slug}',[ProgramController::class,'hr'])->name('hr.en');

Route::get('/tedris-proqrami/{slug}',[ProgramController::class,'tedris'])->name('tedris.az');
Route::get('/en/training-program/{slug}',[ProgramController::class,'tedris'])->name('tedris.en');

Route::get('/sertifikasiya-proqrami/{slug}',[ProgramController::class,'sertifkasiya'])->name('sertifkasiya.az');
Route::get('/en/certification-program/{slug}',[ProgramController::class,'sertifkasiya'])->name('sertifkasiya.en');

Route::post('/form-post',[ProgramController::class,'form_post'])->name('form_post');

Route::get('/beynelxalq-emekdasliq',[AboutController::class,'cooperation'])->name('cooperation.az');
Route::get('/en/international-cooperation',[AboutController::class,'cooperation'])->name('cooperation.en');


Route::get('/elaqe',[ContactController::class,'index'])->name('contact.az');
Route::get('/en/contact',[ContactController::class,'index'])->name('contact.en');
Route::post('/elaqe/post',[ContactController::class,'contact_post'])->name('contact_post');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
