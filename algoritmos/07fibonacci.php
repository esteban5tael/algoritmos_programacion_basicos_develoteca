<!DOCTYPE html>
<!-- Declaración del tipo de documento y apertura del elemento HTML -->
<html lang="en">
<!-- Inicio del elemento HTML con el atributo lang que define el idioma como inglés -->

<head>
    <!-- Inicio de la sección de encabezado del documento -->
    <meta charset="UTF-8">
    <!-- Definición del conjunto de caracteres UTF-8 para admitir caracteres especiales -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Configuración de la escala inicial del contenido para dispositivos móviles -->
    <title>Fibonacci</title>
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
            transition: color 0.3s;
        }

        /* Efecto de cambio de color al pasar el cursor sobre el título */
        h1:hover {
            color: #ff6600;
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
            transition: background-color 0.3s;
        }

        /* Efecto de cambio de fondo al pasar el cursor sobre los párrafos */
        p:hover {
            background-color: #e5e5e5;
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
        <!-- Encabezado de la página con efecto de cambio de color -->
        <h1>Fibonacci</h1>
        <!-- Título principal de la página -->
    </header>
    <!-- Fin del encabezado -->

    <main>
        <!-- Contenido principal de la página -->

        <?php

        function fibonacci($numero)
        {
            $fibonacciArreglo = [];

            if ($numero < 1) {
                return $fibonacciArreglo;
            }

            $fibonacciArreglo[0] = 0;

            if ($numero > 1) {
                $fibonacciArreglo[1] = 1;
            }

            for ($i = 2; $i < $numero; $i++) {
                $fibonacciArreglo[$i] = $fibonacciArreglo[$i - 1] + $fibonacciArreglo[$i - 2];
            }

            return $fibonacciArreglo;
        }

        $numero = 10;

        $fibonacci = fibonacci($numero);

        echo "<p>Fibonacci de $numero, Términos: <pre class='list'>";
        echo implode(",\n", $fibonacci);
        echo "</pre></p>";

        /*  */
        ?>

    </main>
    <!-- Fin del contenido principal -->
</body>
<!-- Fin del cuerpo del documento -->

</html>