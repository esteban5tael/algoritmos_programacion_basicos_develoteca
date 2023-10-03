<!DOCTYPE html>
<!-- Declaración del tipo de documento y apertura del elemento HTML -->
<html lang="es">
<!-- Inicio del elemento HTML con el atributo lang que define el idioma como español -->

<head>
    <!-- Inicio de la sección de encabezado del documento -->
    <meta charset="UTF-8">
    <!-- Definición del conjunto de caracteres UTF-8 para admitir caracteres especiales -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Configuración de la escala inicial del contenido para dispositivos móviles -->
    <title>Busqueda Secuencial</title>
    <!-- Establecimiento del título de la página en la barra de navegación -->
    <style>
        /* Inicio de la sección de estilos CSS en línea */
        /* Estilos para el cuerpo de la página */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        /* Estilos para el contenedor principal */
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin: 20px auto;
            max-width: 600px;
        }

        /* Estilos para el encabezado */
        h1 {
            color: #333;
        }

        /* Estilos para los resultados */
        .result {
            font-weight: bold;
            margin-top: 20px;
        }

        /* Estilos para la lista */
        .list {
            text-align: left;
        }
    </style>
    <!-- Fin de la sección de estilos CSS en línea -->
</head>
<!-- Fin de la sección de encabezado del documento -->

<body>
    <header>
        <h1>Búsqueda Secuencial</h1>
        <!-- Encabezado principal de la página -->
    </header>
    <!-- Inicio del cuerpo del documento -->
    <div class="container">
        <!-- Creación de un contenedor con la clase "container" para aplicar estilos -->


        <?php
        /* Inicio de la sección PHP */
        /* Buqueda secuencial */
        function busquedaSecuencial($lista, $elemento)
        {
            // Declaración de una función llamada "busquedaSecuencial" que toma una lista y un elemento como argumentos
            $logitud = count($lista);
            // Obtiene la longitud de la lista usando la función "count" y la almacena en la variable $logitud

            for ($i = 0; $i < $logitud; $i++) {
                // Inicio de un bucle "for" que recorre la lista
                if ($lista[$i] === $elemento) {
                    // Comprueba si el elemento actual es igual al elemento buscado
                    return $i;
                    // Si se encuentra el elemento, devuelve la posición donde se encontró
                }
            }

            return -1;
            // Si el elemento no se encuentra en la lista, devuelve -1
        }

        $miLista = [1, 3, 5, 7, 9, 2, 4, 6, 8, 10];
        // Creación de una lista llamada "$miLista" con valores

        $elementoBuscar = 4;
        // Asignación del valor a buscar en la lista

        $resultado = busquedaSecuencial($miLista, $elementoBuscar);
        // Llamada a la función "busquedaSecuencial" para buscar el elemento en la lista

        echo ("<p>En la Lista:</p>");
        // Impresión de un párrafo que indica que se muestra la lista
        echo ("<pre class='list'>");
        // Inicio de un bloque "pre" con la clase "list" para mostrar la lista formateada
        print_r($miLista);
        // Impresión de la lista utilizando "print_r" para una representación más legible
        echo ("</pre>");

        if ($resultado != -1) {
            // Comprobación del resultado de la búsqueda
            echo "<p class='result'>El elemento " . $elementoBuscar . " se encontró en la posición: " . $resultado . "</p>";
            // Si se encontró el elemento, se muestra un mensaje con la posición
        } else {
            echo "<p class='result'>El elemento " . $elementoBuscar . " no se encontró en la lista</p>";
            // Si no se encontró el elemento, se muestra un mensaje indicando que no se encontró
        }
        ?>
    </div>
    <!-- Cierre del contenedor principal -->
</body>
<!-- Fin del cuerpo del documento -->

</html>