<?php

use Illuminate\Support\Facades\Route;

//use Phpсatсom\LaravelPermissionGui\Http\Controllers\PermissionGuiController;

use App\Http\Controllers\Controller;


Route::group([
        'as' => 'phpcatcom.',
        'prefix' => 'phpcatcom',
    ]
    , function () {
        Route::group([
                'as' => 'permission.',
                'prefix' => 'permission',
            ]
            , function () {

                Route::get('', [Phpcatcom\Permission\Gui\Controllers\PermissionGuiController::class, 'showIndex'])
                    ->name('index');

                Route::resource('role', Phpcatcom\Permission\Gui\Controllers\RoleController::class)
                    ->only('index', 'store');

                Route::resource('user', Phpcatcom\Permission\Gui\Controllers\UserController::class)
                    ->only('index', 'store');

                Route::resource('places', Phpcatcom\Permission\Gui\Controllers\PlaceController::class)
                    ->only('index', 'store');

                Route::resource('setter', Phpcatcom\Permission\Gui\Controllers\SetterController::class)
                    ->only('index', 'store');

            });
    });
