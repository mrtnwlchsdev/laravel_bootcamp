<?php

/*
|- laravel_app
    |- routes
        ...
*/

// El directorio routes contiene las rutas del navegador donde la aplicacion sera ejecutada
// Las rutas en laravel son definidas mediante la clase Route

/*
    Route::get('/', function() {
        return response('<h1></h1>')
    })
*/

// En el ejemplo anterior se realiza una peticion HTTP GET a la direccion '/'.
// Una vez realizada la peticion se muestra por pantalla el encabezado HTML especificado.

// El codigo de la peticion puede incluir los encabezados de la misma

/*
    Route::get('/', function() {
        return response('<h1>Hello World</h1>')
            ->header('Content-Type', 'text/html')
    })
*/