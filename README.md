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

- George Washington
* John Adams
+ Thomas Jefferson

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

![Screenshot of a comment on a GitHub issue showing an image, added in the Markdown, of an Octocat smiling and raising a tentacle.](https://myoctocat.com/assets/images/base-octocat.svg)

- [x] #739
- [ ] https://github.com/octo-org/octo-repo/issues/740
- [ ] Add delight to the experience when all tasks are complete :tada:

@github/support What do you think about these updates?

@octocat :+1: This PR looks great - it's ready to merge! :shipit:

Here is a simple footnote[^1].

A footnote can also have multiple lines[^2].

[^1]: My reference.

[^2]: To add line breaks within a footnote, prefix new lines with 2 spaces.

  This is a second line.

> [!NOTE]
> Useful information that users should know, even when skimming content.

> [!TIP]
> Helpful advice for doing things better or more easily.

> [!IMPORTANT]
> Key information users need to know to achieve their goal.

> [!WARNING]
> Urgent info that needs immediate user attention to avoid problems.

> [!CAUTION]
> Advises about risks or negative outcomes of certain actions.

Ignoring Markdown formatting

You can tell GitHub to ignore (or escape) Markdown formatting by using \ before the Markdown character.

Let's rename \*our-new-project\* to \*our-old-project\*.

| Command | Description |
| --- | --- |
| `git status` | List all *new or modified* files |
| `git diff` | Show file differences that **haven't been** staged |
