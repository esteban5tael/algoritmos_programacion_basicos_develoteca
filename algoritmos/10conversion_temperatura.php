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
    <title>Conversión de Temperatura</title>
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

        /* Estilos para los encabezados secundarios */
        h2 {
            margin-top: 20px;
            transition: color 0.3s;
        }

        /* Efecto de cambio de color al pasar el cursor sobre los encabezados secundarios */
        h2:hover {
            color: #ff6600;
        }

        /* Estilos para las tablas */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        /* Estilos para las celdas de encabezado */
        th {
            background-color: #333;
            color: #fff;
            padding: 10px;
        }

        /* Estilos para las celdas de datos */
        td {
            border: 1px solid #333;
            padding: 10px;
            text-align: center;
            transition: background-color 0.3s;
        }

        /* Efecto de cambio de fondo al pasar el cursor sobre las celdas de datos */
        td:hover {
            background-color: #e5e5e5;
        }
    </style>
    <!-- Fin de la sección de estilos CSS en línea -->
</head>
<!-- Fin de la sección de encabezado del documento -->

<body>
    <!-- Inicio del cuerpo del documento -->
    <header>
        <!-- Encabezado de la página con efecto de cambio de color -->
        <h1>Conversión de Temperatura</h1>
        <!-- Título principal de la página -->
    </header>
    <!-- Fin del encabezado -->

    <main>
        <!-- Contenido principal de la página -->

        <?php
        // Conversión de Temperatura

        function celciusAFahrenheit($cel)
        {
            $far = ($cel * 9 / 5) + 32;
            return $far;
        }

        function fahrenheitACelcius($far)
        {
            $cel = ($far - 32) * 5 / 9;
            return $cel;
        }
        /*  */
        ?>

        <h2>Celcius A Fahrenheit</h2>
        <table border="1">
            <thead>
                <th>°Celcius</th>
                <th>°Fahrenheit</th>
            </thead>
            <tbody>
                <tr>
                    <?php
                    $cel = 25;
                    $far = celciusAFahrenheit($cel);
                    echo "<td>$cel</td>";
                    echo "<td>$far</td>";
                    /*  */
                    ?>
                </tr>
            </tbody>
        </table>

        <hr>

        <h2>Fahrenheit A Celcius</h2>
        <table border="1">
            <thead>
                <th>°Fahrenheit</th>
                <th>°Celcius</th>
            </thead>
            <tbody>
                <tr>
                    <?php
                    $far = 77;
                    $cel = fahrenheitACelcius($far);
                    echo "<td>$far</td>";
                    echo "<td>$cel</td>";
                    /*  */
                    ?>
                </tr>
            </tbody>
        </table>
    </main>
</body>

</html>