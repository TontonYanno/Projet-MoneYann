<?php

use App\Http\Controllers\CompteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller ;
use App\Http\Controllers\UserController;
use Illuminate\Auth\Middleware\Authenticate;

Route::get('/clientdashboard', function () {
    return view('client.base');
})->name('clientdashboard');

Route::get('/profile', function () {
    return view('client.profile');
})->name('profile');

Route::get('/compte', function () {
    return view('client.compte');
})->name('compte');


Route::get('/transfert', function () {
    return view('client.transfert');
})->name('transfert');

Route::get('/transaction', function () {
    return view('client.transaction');
})->name('transaction');

// -------------------------------------------------------------------------------------

Route::get('/agentdashboard', function () {
    return view('agent.dashboard');
})->name('agentdashboard');

Route::get('/depotagent', function () {
    return view('agent.depotagent');
})->name('depotagent');

Route::get('/retraitagent', function () {
    return view('agent.retraitagent');
})->name('retraitagent');

Route::get('/tranfertagent', function () {
    return view("agent.transfertagent");
})->name('transfertagent');

Route::get('/profileagent', function(){
    return view('agent.profileagent');
})->name('profileagent');

Route::get("/compteagent",function(){
    return view('agent.compte');
})->name('compteagent');

// ------------------------------------------------------------


Route::middleware(['auth', 'auth.session'])->group(function () {
    Route::get("/directeurdashboard" ,[UserController::class, 'directeurdashboard'] )->name('directeurdashboard')->middleware('auth');
    Route::get("/comptedirecteur", [UserController::class, 'comptedirecteur'])->name('comptedirecteur');
    Route::get("/compteutilisateur", [UserController::class,'compteutilisateur'])->name('compteutilisateur');
    Route::get("/depotdirecteur",[UserController::class, 'depotdirecteur'])->name('depotdirecteur');
    Route::get("/retraitdirecteur",[UserController::class,'retraitdirecteur'])->name('retraitdirecteur');
    Route::get("/transfertdirecteur",[UserController::class,'transfertdirecteur'])->name('transfertdirecteur');
    Route::get('/profiledirect',[UserController::class,'profiledirecteur'])->name('profiledirecteur');
});


Route::get('/test',[CompteController::class,'test']);
Route::get('/',[UserController::class,'connexion'])->name('connexion');

Route::post('/deconnexion',[UserController::class,'deconnexion'])->name('deconnexion');
Route::post('/authentification',[UserController::class,'authentification'])->name('authentification');
