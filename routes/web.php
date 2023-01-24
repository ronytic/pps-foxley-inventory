<?php

Route::group(['middleware' => ['auth']], function () {
    Route::get('admin/pps-foxley-inventory', 'PpsFoxleyInventoryController@index')->name('package.skeleton.index');
    Route::get('pps-foxley-inventory', 'PpsFoxleyInventoryController@index')->name('package.skeleton.tab.index');
});
