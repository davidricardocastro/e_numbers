<?php

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


use Illuminate\Support\Facades\Input;
use App\Enumber;


Route::get('/', function () {
    return view('index');
});


//Route::get('/detail/{id}', 'DetailController@show')->name('enumber detail');

//Route::get('/list', 'ListController@listing');


Route::post('/search', function(){
    $q = Input::get('searchENumber');
    if($q !=""){
        $enumber = Enumber::where('code', 'LIKE', '%'. $q. '%')
                            ->get();
        if(count($enumber) > 0)
        return view('index')->withDetails($enumber)->withQuery($q);
    }
    return view('index')->withMessage("E number not found!");
});