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
    <title>Ordenamiento de Inserción</title>
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

        /* Estilos para la lista */
        .list {
            text-align: left;
        }

        /* Estilos para los párrafos */
        p {
            margin: 0;
            padding: 10px 0;
        }
    </style>
    <!-- Fin de la sección de estilos CSS en línea -->
</head>
<!-- Fin de la sección de encabezado del documento -->

<body>
    <!-- Inicio del cuerpo del documento -->
    <header>
        <!-- Encabezado de la página -->
        <h1>Ordenamiento de Inserción</h1>
        <!-- Título principal de la página -->
    </header>
    <!-- Fin del encabezado -->

    <main>
        <!-- Contenido principal de la página -->

        <?php

        function ordenamientoInsercion($lista)
        {
            $contador = count($lista);
            
            for ($i = 1; $i < $contador; $i++) {
                
                $valorActual = $lista[$i];
                
                $j = $i - 1;
                
                while ($j >= 0 && $lista[$j] > $valorActual) {
                
                    $lista[$j + 1] = $lista[$j];
                
                    $j--;
                
                }
                
                $lista[$j + 1] = $valorActual;
                
            }
            
            return $lista;
        }
        
        $miLista = [1, 5, 9, 5, 7, 3, 8, 4, 6, 3, 2, 0];
        // Creación de una lista llamada "$miLista" con valores desordenados
        
        $listaOrdenada = ordenamientoInsercion($miLista);
        // Llamada a la función "ordenamientoInsercion" para ordenar la lista

        echo ("<p>Lista Desordenada:</p>");
        // Impresión de un párrafo que indica que se muestra la lista desordenada
        echo ("<pre class='list'>");
        // Inicio de un bloque "pre" con la clase "list" para mostrar la lista formateada
        print_r($miLista);
        // Impresión de la lista desordenada utilizando "print_r" para una representación más legible
        echo ("</pre>");

        echo ("<p>Lista Ordenada:</p>");
        // Impresión de un párrafo que indica que se muestra la lista ordenada
        echo ("<pre class='list'>");
        // Inicio de un bloque "pre" con la clase "list" para mostrar la lista formateada
        print_r($listaOrdenada);
        // Impresión de la lista ordenada utilizando "print_r" para una representación más legible
        echo ("</pre>");
        ?>
    </main>
    <!-- Fin del contenido principal -->
</body>
<!-- Fin del cuerpo del documento -->

</html>