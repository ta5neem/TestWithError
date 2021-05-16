<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/inventory/add', 'InventoryController@showaddview');
Route::get('/manufacturer/add', 'ManufacturerController@showaddview');
Route::get('/purchace/add','PurchaceController@showaddview');
Route::get('/manufaturerreturnlist/add','ManufacturerReturnListsController@showaddview');
Route::get('/message/add','messageController@showaddview');
Route::get('/responses/add','ResponseController@showaddview');


Route::POST('/inventory/store','InventoryController@store');
Route::POST('/manufacturer/store','ManufacturerController@store');
Route::POST('/purchase/store','PurchaceController@store');
Route::POST('/manufaturerreturnlist/store','ManufacturerReturnListsController@store');
Route::POST('/message/store','messageController@store');
Route::POST('/response/store','ResponseController@store');


Route::get('/inventory/all','InventoryController@all');
Route::get('/manufacturer/all','ManufacturerController@all');
Route::get('/manufacturerreturnlist/all','ManufacturerReturnListsController@all');
Route::get('/message/all','MessageController@all');
Route::get('/purchace/all','PurchaceController@all');
Route::get('/response/all','ResponseController@all');


Route::get('/inventory/delete/{inventory_id}','InventoryController@delete');
Route::get('/manufacturer/delete/{manufacturer_id}','ManufacturerController@delete');
Route::get('/manufacturerreturnlist/delete/{id}','ManufacturerReturnListsController@delete');
Route::get('/message/delete/{id}','MessageController@delete');
Route::get('/purchace/delete/{id}','PurchaceController@delete');
Route::get('/response/delete/{id}','ResponseController@delete');


Route::get('/inventory/edit/{inventory_id}','InventoryController@edit');
Route::get('/manufacturer/edit/{manufacturer_id}','ManufacturerController@edit');
Route::get('/manufacturerreturnlist/edit/{id}','ManufacturerReturnListsController@edit');
Route::get('/message/edit/{id}','MessageController@edit');
Route::get('/purchace/edit/{id}','PurchaceController@edit');
Route::get('/response/edit/{id}','ResponseController@edit');
