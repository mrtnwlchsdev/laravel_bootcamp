<?php

/*
    - Laravel incluye un ORM (Mapeador de objetos relacionales) llamado Eloquent
    - Eloquent permite la interaccion con una base de datos
    - Cada tabla de la base de datos tiene un modelo, el cual es usado para interactur con esa tabla
    - Los modelos Eloquent permiten recuperar, insertar, actualizar y eliminar registros de una tabla
    - Los modelos se localizan en la siguiente ruta

        |- laravel_app
            |- app
                - Models

    Los modelos de eloquent pueden ser generados mediante el siguiente comando de artisan

        $ php artisan make:model ModelName

    Por convencion el nomnbre de un modelo debe ser definido en singular
*/

// Contenido de un modelo

class ModelName {
    public static function all() {
        // DATABASE INFO
    }
}

// Uso de un modelo dentro de una vista 
/*
    Los modelos son accedidos mediante la siguiente sintaxis
        ModelName::function_name
*/


/*
    use app\Models\ModelName;

    Route::get('/', function() {
        return view('view_name', [
            'heading' => 'Languages',
            'content' => ModelName::all()
        ])
    })
*/

// Una vez obtenida la informacion del modelo, esta puede ser representada a traves de una vista

/*
    | test.blade.php

    <h1>{{$content['heading']}}</h1>
    <p>{{$content['info']}}</p>
*/