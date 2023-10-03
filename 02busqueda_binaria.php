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
    <title>Busqueda Binaria</title>
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

        /* Estilos para el encabezado */
        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
        }

        /* Estilos para el contenido principal */
        main {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin: 20px auto;
            max-width: 600px;
        }

        /* Estilos para el título dentro del encabezado */
        h1 {
            margin: 0;
            padding: 0;
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
    <!-- Inicio del cuerpo del documento -->
    <header>
        <!-- Encabezado de la página -->
        <h1>Búsqueda Binaria</h1>
        <!-- Título principal de la página -->
    </header>
    <!-- Fin del encabezado -->

    <main>
        <!-- Contenido principal de la página -->

        <?php
        /* Inicio de la sección PHP */
        function busquedaBinaria($lista, $elemento)
        {
            // Declaración de una función llamada "busquedaBinaria" que toma una lista y un elemento como argumentos
            $izquierda = 0;
            // Inicialización de la variable "$izquierda" para la búsqueda binaria
            $derecha = count($lista) - 1;
            // Inicialización de la variable "$derecha" para la búsqueda binaria

            while ($izquierda <= $derecha) {
                // Inicio de un bucle "while" para la búsqueda binaria

                $mitad = floor(($izquierda + $derecha) / 2);
                // Cálculo de la posición media

                if ($lista[$mitad] == $elemento) {
                    // Comprueba si el elemento en la posición media es igual al elemento buscado
                    return $mitad;
                    // Si se encuentra el elemento, devuelve la posición donde se encontró
                }

                if ($lista[$mitad] < $elemento) {
                    $izquierda = $mitad + 1;
                    // Actualiza la variable "$izquierda" para buscar en la mitad derecha
                } else {
                    $derecha = $mitad - 1;
                    // Actualiza la variable "$derecha" para buscar en la mitad izquierda
                }
            }
        }
        $miLista = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        // Creación de una lista llamada "$miLista" con valores

        $elementoBuscar = 4;
        // Asignación del valor a buscar en la lista

        $resultado = busquedaBinaria($miLista, $elementoBuscar);
        // Llamada a la función "busquedaBinaria" para buscar el elemento en la lista

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
    </main>
    <!-- Fin del contenido principal -->
</body>
<!-- Fin del cuerpo del documento -->

</html>
