<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('client.base');
});

Route::get('/profile', function () {
    return view('client.profile');
})->name('profile');

Route::get('/compte', function () {
    return view('client.compte');
})->name('compte');

Route::get('/deconnexion', function () {
    return view('connexion');
})->name('deconnexion');

Route::get('/transfert', function () {
    return view('client.transfert');
})->name('transfert');

Route::get('/transaction', function () {
    return view('client.transaction');
})->name('transaction');

// -------------------------------------------------------------------------------------

Route::get('/agentdashboard', function () {
    return view('agent.dashboard');
})->name('agent');

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
Route::get("/directeurdashboard",function(){
    return view('directeur.dashboard');
});

Route::get("/comptedirecteur", function(){
    return view('directeur.compte');
})->name('comptedirecteur');

Route::get("/compteutilisateur", function(){
    return view('directeur.compteutilisateur');
})->name('compteutilisateur');

Route::get("/depotdirecteur",function(){
    return view("directeur.depotdirecteur");
})->name('depotdirecteur');

Route::get("/retraitdirecteur",function(){
    return view("directeur.retraitdirecteur");
})->name('retraitdirecteur');

Route::get("/transfertdirecteur",function(){
    return view("directeur.transfertdirecteur");
})->name('transfertdirecteur');

Route::get('/profiledirect', function(){
    return view('directeur.profiledirecteur');
})->name('profiledirecteur');

