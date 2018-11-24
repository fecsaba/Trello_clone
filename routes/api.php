<?php

    Route::resource('/task', 'TaskController');
    Route::get('/category/{category}/tasks', 'CategoryController@tasks');
    Route::resource('/category', 'CategoryController');
