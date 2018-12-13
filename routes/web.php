<?php


// Routes pour Pages Static

Route::get('/', 'StaticPagesController@index') -> name('index_path');
Route::get('/about', 'StaticPagesController@about') -> name('about_path');
Route::get('/faq', 'StaticPagesController@faq') -> name('faq_path');
Route::get('/contact', 'MessagesController@create') -> name('contact_path');


// Routes pour admin

Route::get('/admin', 'AdminPagesController@home') -> name('Adminhome');
Route::get('/admin/messages','AdminPagesController@message') -> name('messages');
Route::get('/admin/notifications','AdminPagesController@notification') -> name('notifications');
Route::get('/admin/comments','AdminPagesController@comment') -> name('comments');
Route::resource('/admin/users','UsersController');
Route::resource('/admin/pays', 'PaysController');
Route::resource('/admin/villes', 'VillesController');
Route::resource('/admin/compagnies', 'CompagniesController');



// Routes pour Agent

Route::get('/agent', 'AgentPagesController@home') -> name('AgentHome');
Route::resource('/agent/trajets', 'AgentTrajetsController');
Route::resource('/agent/heureDepart', 'AgentHeuresDepartController');
Route::get('/agent/infoTrajet', 'InfoTrajetController@index') -> name('InfoTrajet');
Route::resource('/agent/reservations', 'AgentReservationsController');
Route::get('/agent/ficheDeControle', 'AgentReservationsController@fiche') ->name ('AgentFicheControle');


// Routes pour Abonnée

Route::get('/client', 'ClientPagesController@home') -> name('ClientHome');

?>
