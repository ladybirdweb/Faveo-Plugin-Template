<?php


//which all events it wants to listen to 
// Event::listen('event', function(){
// 	//action or call to any controller method
// });

//plugin routes
Route::prefix('yourPluginName')->group(['middleware' => ['web']], function() {
	//define your routes here
});