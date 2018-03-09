<?php

Route::group(['prefix' => '', 'namespace' => 'App\\Modules\Susu\Http\Controllers'], function()
{
    Route::get('/', 'SusuController@index');
});
