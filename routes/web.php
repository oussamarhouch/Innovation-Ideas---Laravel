<?php

use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'App\Http\Controllers'], function(){

  Route::get('/', 'HomeController@index')->name('home.index');

  Route::group(['middleware' => ['guest']], function() {

      Route::get('/contact', 'ContactController@contact')->name('contact');
      Route::get('/propos', 'ProposController@propos')->name('propos');

    });



    Route::group(['middleware' => ['auth']], function() {
          /**
           * Logout Routes
           */
          Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

          Route::get('/compte', 'CompteController@compte')->name('compte');

          Route::get('/defi_mois', 'DefimoisController@defimois')->name('defi_mois.show');
          Route::post('defi_mois','DefimoisController@create')->name('defi_mois.perform');

          Route::get('ecrire_idee','EcrireideeController@insert')->name('ecrire_idee.show');
          Route::post('ecrire_idee','EcrireideeController@create')->name('ecrire_idee.perform');

          Route::get('ecrire_defi','EcriredefiController@insert')->name('ecrire_defi.show');
          Route::post('ecrire_defi','EcriredefiController@create')->name('ecrire_defi.perform');

          Route::get('/idees_envoyees', 'IdeesenvoyeesController@ideesenvoyees')->name('idees_envoyees');
          
          Route::get('/idees_admin', 'IdeesadminController@ideesadmin')->name('idees_admin');

          Route::get('idees','IdeesController@insert')->name('idees.show');
          Route::post('idees','IdeesController@create')->name('idees.perform');
          Route::put('/votesUp/{vote}', 'IdeesController@upVote')->name('idees.upVote');
Route::put('/votesDown/{vote}', 'IdeesController@downVote')->name('idees.downVote');

          Route::get('/voir_defi', 'VoirdefiController@voirdefi')->name('voir_defi');
      });

});


Route::get('/dashboard', function () {
    if(auth()->guard('user')->check()){
      return Redirect::route('home.index');
    } else if(auth()->guard('admin')->check()){
      return Redirect::route('home.index');
    }
})
->middleware(["auth:admin,user"])
->name('dashboard');


Route::prefix('user')
  ->name('user.')
  ->middleware(['auth:user', 'verified'])
  ->group(function ($request){
    Route::get('dashboard', function(){
      return view('dashboard');
    })->name('dashboard');
  });

  Route::prefix('admin')
    ->name('admin.')
    ->middleware(['auth:admin', 'verified'])
    ->group(function ($request){
      Route::get('dashboard', function(){
        return view('dashboard');
      })->name('dashboard');
    });



require __DIR__.'/auth.php';
