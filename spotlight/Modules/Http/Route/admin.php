<?php

use Illuminate\Http\Request;
use Spotlight\Http\Route\RouteNames;
 

Route::group(['prefix' => 'admin/api/v1'], function()
{
	Route::get('createCampaign','Admin\Controllers\AdminApiController@createCampaign')->name(RouteNames::CREATE_CAMPAIGN);	
	Route::get('test','Admin\Controllers\TestController@index');	
});



