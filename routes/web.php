<?php
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Session;

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

Route::get('/', 'HomeController@home');
Route::get('index', 'HomeController@index');
Route::get('actual', 'HomeController@actual');
Route::get('contact', 'HomeController@contact');
Route::get('mark', 'HomeController@mark');
Route::get('com', 'HomeController@com');
Route::get('imp', 'HomeController@imp');
Route::get('cons', 'HomeController@cons');
Route::get('pres', 'HomeController@pres');
Route::get('res', 'HomeController@res');
Route::get('ent', 'HomeController@ent');
Route::get('inscrit', 'HomeController@inscrit');
Route::get('service', 'HomeController@service');
Route::get('present', 'HomeController@present');
Route::get('mast', 'HomeController@mast');
Route::get('most', 'HomeController@most');
Route::get('config', 'HomeController@config');
Route::get('search_result', 'HomeController@search_result');
Route::get('ajax_search_list', 'HomeController@ajax_search_list');



Route::get('/', function() {
    return view('home');
});

// Route qui permet de connaître la langue active
Route::get('locale', 'LocalizationController@getLang')->name('getlang');

// Route qui permet de modifier la langue
Route::get('locale/{lang}', 'LocalizationController@setLang')->name('setlang');

Route::post('/insert', 'Controller@insert')->name('iahs.form.insert');
Route::post('/inserto', 'Controller@inserto')->name('iahs.form.inserto');
Route::post('/ajout', 'Controller@ajout')->name('iahs.form.ajout');
Route::post('/enr', 'Controller@enr')->name('iahs.form.enr');
Route::post('/env', 'Controller@env')->name('iahs.form.env');
Route::get('/search', 'Controller@search');


Route::get('/search',function(){
    $q = Input::get ( 'q' );
    $service = Servive::where('categ','LIKE','%'.$q.'%')->orWhere('intitule','LIKE','%'.$q.'%')->get();
    if(count($service) > 0)
        return view('mast')->withDetails($service)->withQuery ( $q );
    else return view ('mast')->withMessage('Aucun élément trouvé ! Essayer à nouveau !');
});

Route::get('locale/{locale}', function ($locale){
    Session::put('locale',$locale);
    return redirect()->back();
});


// 

?>