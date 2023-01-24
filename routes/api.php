<?php
Route::group(['middleware' => ['auth:api', 'bindings']], function() {
    Route::get('admin/pps-foxley-inventory/fetch', 'PpsFoxleyInventoryController@fetch')->name('package.skeleton.fetch');
    Route::apiResource('admin/pps-foxley-inventory', 'PpsFoxleyInventoryController');
});
