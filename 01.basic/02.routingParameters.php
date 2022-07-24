<?php

// Una ruta puede incluir parametros

/*
    Route::get('/user/{id}', function($id) {
        return response('Hello ' . $id);
    });
*/

// Cuando se define una ruta como en el ejemplo anterior, cualquier valor es permitido
// Se puede crear una clausula que restringa el aceso a la ruta con determinados parametros

/*
    Route::get('/user/{id}', function($id) {
        return response('Hello ' . $id);
    })->where('id', '[0-9]+');
*/