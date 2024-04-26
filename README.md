<!--Headings-->

# Este seria un titulo

## Este seria un H2

### Este seria un H3

#### Este seria un H4

##### Este seria un H5

###### Este seria un H6

## This is an *italic* text

## This is an **strong** text

## This is an ~~Strikethrough~~

## * Apple

    * Orange
    * Example: Univers

* Mango

1. Margarita
    * Limon - lime
    * Azucar - Sugar
2. Maiami Vice
    1. Piña Colada
    2. Fresada!?
3. Piña Colada
4. Manhatana

[faztweb.com - Este es un enlace](http://faztweb.com "Este mensaje se mostrara al pasar el mouse sonbre la palabra")

> This is a quote

<!--Lineas horizontales-->
___
---

## Este es un ejemplo de codigo

```php

    <?php

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

    /*Route::get('/', function () {    //Viene por defecto
        return view('welcome');
    });*/

    Route::get('/', function () {
        return 'Ruta home';
    });

    Route::get('/blog  ', function () {
        return 'Listado de publicaciones';
    });

    Route::get('/blog/{slug}', function($slug) {
        //simularemos una consulta a base de datos
        return $slug;
    });
    Route::get('buscar', function(Request $request) {
        //simularemos una consulta a base de datos
        return $request->all();
    );
```

|Tables   |Are      |Cool    |
|---------|---------|--------| 
|Esto     |Es       | $456   |
|Un       |Pequeño  | $456   |
|Ejemplo  |de       | $456   |
|Una      |Tabla    | $456   |
