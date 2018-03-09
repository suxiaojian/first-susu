<?php

Route::group(['prefix' => 'susu', 'namespace' => 'App\\Modules\Susu\Http\Controllers'], function()
{
    Route::get('/', 'SusuController@index');
});
