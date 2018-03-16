<?php

Route::group(['prefix' => '', 'namespace' => 'App\\Modules\Susu\Http\Controllers'], function()
{
    Route::any('/', 'SusuController@index');
});
