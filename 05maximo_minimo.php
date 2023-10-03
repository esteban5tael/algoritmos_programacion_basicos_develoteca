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
    <title>Máximo y Mínimo</title>
    <!-- Establecimiento del título de la página en la barra de navegación -->
    <style>
        /* Inicio de la sección de estilos CSS en línea */
        /* Estilos para el cuerpo de la página */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
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

        /* Estilos para el título dentro del encabezado */
        h1 {
            margin: 0;
            padding: 0;
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

        /* Estilos para los párrafos */
        p {
            margin: 0;
            padding: 10px 0;
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
        <h1>Máximo y Mínimo</h1>
        <!-- Título principal de la página -->
    </header>
    <!-- Fin del encabezado -->

    <main>
        <!-- Contenido principal de la página -->

        <?php

        function encontrarMaximoMinimo($lista)
        {
            $contador = count($lista);

            if ($contador === 0) {
                return null;
            }

            $maximo = $lista[0];
            $minimo = $lista[0];

            for ($i = 1; $i < $contador; $i++) {
                if ($lista[$i] > $maximo) {
                    $maximo = $lista[$i];
                }

                if ($lista[$i] < $minimo) {
                    $minimo = $lista[$i];
                }
            }

            return ['maximo' => $maximo, 'minimo' => $minimo];
        }

        $miLista = [1, 5, 9, 5, 7, 3, 8, 4, 6, 3, 2, 50];
        // Creación de una lista llamada "$miLista" con valores

        $maximoMinimo = encontrarMaximoMinimo($miLista);
        // Llamada a la función "encontrarMaximoMinimo" para encontrar el máximo y el mínimo de la lista

        echo "Lista: <p><pre class='list'>";
        // Impresión de un mensaje indicando que se muestra la lista desordenada
        echo implode(', ', $miLista);
        // Impresión de la lista utilizando "implode" para una representación más legible
        echo "</pre></p>";

        echo ("<p>Máximo: <pre>" . $maximoMinimo['maximo'] . "</pre></p>");
        // Impresión del máximo encontrado en la lista
        echo ("<p>Mínimo: <pre>" . $maximoMinimo['minimo'] . "</pre></p>");
        // Impresión del mínimo encontrado en la lista
        ?>
    </main>
    <!-- Fin del contenido principal -->
</body>
<!-- Fin del cuerpo del documento -->

</html>