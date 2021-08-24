<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// $prefix_admin = config('zvn.url.prefix_admin');
$prefix_admin =  Config::get('zvn.url.prefix_admin', 'huy');

Route::group(['prefix' => $prefix_admin], function() {
    //=================SLIDER==================
    $prefix = 'slider';  
    $controllerName ='slider';
    Route::group(['prefix' => $prefix], function() use ($controllerName) {            
            $controller = ucfirst($controllerName).'Controller@';
            Route::get('/',                          ['as' => $controllerName,            'uses' => $controller . 'index'  ]);
            Route::get('form/{id?}',                 ['as' => $controllerName .'/form',   'uses' => $controller . 'form'   ])->where('id', '[0-9]+');  
            Route::get('delete/{id}',                ['as' => $controllerName .'/delete', 'uses' => $controller . 'delete' ])->where('id', '[0-9]+');  
            Route::get('change-status-{status}/{id}',['as' => $controllerName .'/status', 'uses' => $controller . 'status' ])->where('id', '[0-9]+');  

    });
        //=================DASHBOARD==================
        $prefix = 'dashboard';  
        $controllerName ='dashboard';
        Route::group(['prefix' => $prefix], function() use ($controllerName) {            
                $controller = ucfirst($controllerName).'Controller@';
                Route::get('/',                          ['as' => $controllerName,            'uses' => $controller . 'index'  ]);
                Route::get('form/{id?}',                 ['as' => $controllerName .'/form',   'uses' => $controller . 'form'   ])->where('id', '[0-9]+');  
                Route::get('delete/{id}',                ['as' => $controllerName .'/delete', 'uses' => $controller . 'delete' ])->where('id', '[0-9]+');  
                Route::get('change-status-{status}/{id}',['as' => $controllerName .'/status', 'uses' => $controller . 'status' ])->where('id', '[0-9]+');  
    
        });
    
});  