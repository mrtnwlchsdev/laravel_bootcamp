<!--
    - Blade es un motor de plantillas ligero incluido en laravel
    - La extension de un archivo blade es blade.php
    - Los archivos blade.php se alojan dentro de la siguiente ruta
    
        |- laravel_app
            |- resources
                |- views

    - Un archivo blade.php es accedido mediante las rutsas de la aplicacion laravel
    - Dentro de llaves dobles {{}} es posible incluir contenido dinamico dentro de un archivo blade.php
-->

<!-- Laravel Route -->
<!--
    Route::get('/', function() {
        return view('view_name', [
            'heading' => 'Hello World'
        ]);
    });
-->

<h1>{{$heading}}</h1>

<!-- Directiva for -->
@for ($i = 0; $i < $count; $i++)
    <p>{{$i}}</p>
@endfor

<!-- Directiva if -->
@if (true)
<p>Message</p>    
@endif