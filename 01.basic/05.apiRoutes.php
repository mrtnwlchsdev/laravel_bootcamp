<?php

/*
    |- Laravel_app
        |- routes
            |- api.php  
*/

// Dentro del archivo api.php se pueden definir las rutas de las API's usadas en la aplicacion

/*
    Route::get('/posts', function() {
        return response()->json([
            'posts' => [
                'Title' => 'Post One'
            ]
        ]);
    });
*/

// Para acceder a la ruta de la API posts, se debe anteponer el prefijo api
    // laravelapp/api/posts