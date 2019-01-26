<?php


// Routes pour Pages Static

Route::get('/', 'StaticPagesController@index') -> name('index_path');
Route::get('/about', 'StaticPagesController@about') -> name('about_path');
Route::get('/faq', 'StaticPagesController@faq') -> name('faq_path');
Route::get('/contact', 'MessagesController@create') -> name('contact_path');
Route::post('/trajets', 'StaticPagesController@trajet') -> name('trajets_path');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Routes pour admin

Route::get('/admin', 'AdminPagesController@home') -> name('Adminhome');
Route::get('/admin/messages','AdminPagesController@message') -> name('messages');
Route::get('/admin/notifications','AdminPagesController@notification') -> name('notifications');
Route::get('/admin/comments','AdminPagesController@comment') -> name('comments');
Route::get('/admin/role', 'RoleController@create')->name('userRole');
Route::get('/admin/trajets', 'AdminTrajetsController@index')->name('adminTrajet');
Route::resource('/admin/users','UsersController');
Route::resource('/admin/pays', 'PaysController');
Route::resource('/admin/villes', 'VillesController');
Route::resource('/admin/compagnies', 'CompagniesController');
Route::resource('/admin/mesReservations', 'AdminReservationsController');


// Routes pour Agent

Route::get('/agent', 'AgentPagesController@home') -> name('AgentHome');
Route::resource('/agent/maCompagnie', 'AgentCompagnieController');
Route::resource('/agent/trajets', 'TrajetsController');
Route::resource('/agent/heureDepart', 'AgentHeuresDepartController');
Route::resource('/agent/lieuEmbarq', 'AgentLieuEmbarqController');
Route::get('/agent/infoTrajet', 'TrajetsController@info') -> name('InfoTrajet');
Route::resource('/agent/reservations', 'AgentReservationsController');
Route::get('/agent/ficheDeControle', 'AgentReservationsController@fiche') ->name ('AgentFicheControle');
Route::get('/agent/clotureReservation', 'AgentReservationsController@cloture') ->name ('AgentClotureReserv');


// Routes pour Client

Route::get('/client', 'ClientPagesController@home') -> name('ClientHome');
Route::get('/client/compagnies', 'ClientCompagniesController@index')-> name('clientComp');
Route::get('/client/trajets', 'ClientTrajetsController@index')->name('clientTrajet');
Route::resource('/client/mes_reservations', 'ClientReservationsController')->middleware('client');


?>

