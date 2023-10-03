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
    <title>Factorial</title>
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
    </style>
    <!-- Fin de la sección de estilos CSS en línea -->
</head>
<!-- Fin de la sección de encabezado del documento -->

<body>
    <!-- Inicio del cuerpo del documento -->
    <header>
        <!-- Encabezado de la página -->
        <h1>Factorial</h1>
        <!-- Título principal de la página -->
    </header>
    <!-- Fin del encabezado -->

    <main>
        <!-- Contenido principal de la página -->

        <?php

        function factorial($numero)
        {
            if ($numero < 0) {
                return "No se puede calcular el factorial";
            } elseif ($numero == 0 || $numero == 1) {
                return 1;
            } else {
                $resultado = 1;
                for ($i = 2; $i <= $numero; $i++) {
                    $resultado *= $i;
                }
                return $resultado;
            }
        }

        $numero = 7;
        // Número para calcular el factorial

        $factorial = factorial($numero);
        // Llamada a la función "factorial" para calcular el factorial

        echo "El factorial de $numero es: $factorial";
        // Impresión del resultado del cálculo del factorial

        ?>
    </main>
    <!-- Fin del contenido principal -->
</body>
<!-- Fin del cuerpo del documento -->

</html>