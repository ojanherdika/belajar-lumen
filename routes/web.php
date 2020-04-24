<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
//Route Tabel Lumen
$router->post('/tambahdata', 'PostController@inputdata');
$router->get('/views', 'PostController@index');
$router->get('/view/{id}', 'PostController@view');
$router->put('/update/{id}', 'PostController@update');
$router->post('/update/{id}', 'PostController@updatedata');
$router->delete('/delete/{id}', 'PostController@delete');
// Route Untuk Tabel Data Kurban
$router->post('/tambahdatakurban', 'C_DataKurban@inputdata');
$router->get('/viewsDataKurban','C_DataKurban@index');
$router->get('/viewDataKurban/{id}','C_DataKurban@view');
$router->put('/updateDataKurban/{id}','C_DataKurban@update');
$router->post('/updateDataKurban/{id}','C_DataKurban@updatedata');
$router->delete('/deleteDataKurban/{id}','C_DataKurban@delete');
