<?php

Route::group(['middleware' => config('menu.middleware')], function () {
    //Route::get('wmenuindex', array('uses'=>'\LaravelMenu\Menu\Controllers\MenuController@wmenuindex'));
    $path = rtrim(config('menu.route_path'));
    Route::post($path . '/addcustommenu', array('as' => 'haddcustommenu', 'uses' => '\LaravelMenu\Menu\Controllers\MenuController@addcustommenu'));
    Route::post($path . '/deleteitemmenu', array('as' => 'hdeleteitemmenu', 'uses' => '\LaravelMenu\Menu\Controllers\MenuController@deleteitemmenu'));
    Route::post($path . '/deletemenug', array('as' => 'hdeletemenug', 'uses' => '\LaravelMenu\Menu\Controllers\MenuController@deletemenug'));
    Route::post($path . '/createnewmenu', array('as' => 'hcreatenewmenu', 'uses' => '\LaravelMenu\Menu\Controllers\MenuController@createnewmenu'));
    Route::post($path . '/generatemenucontrol', array('as' => 'hgeneratemenucontrol', 'uses' => '\LaravelMenu\Menu\Controllers\MenuController@generatemenucontrol'));
    Route::post($path . '/updateitem', array('as' => 'hupdateitem', 'uses' => '\LaravelMenu\Menu\Controllers\MenuController@updateitem'));
});
