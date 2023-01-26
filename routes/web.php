<?php

Route::group(['middleware' => ['auth']], function () {
    Route::get('admin/pps-foxley-inventory', 'PpsFoxleyInventoryController@index')->name('package.foxleyinventory.index');
    Route::get('pps-foxley-inventory', 'PpsFoxleyInventoryController@index')->name('package.foxleyinventory.tab.index');
});
