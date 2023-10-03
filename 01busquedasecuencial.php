<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda Secuencial</title>
</head>

<body>

    <?php
    /* Buqueda secuencial */
    function busquedaSecuencial($lista, $elemento)
    {
        $logitud = count($lista);

        for ($i = 0; $i < $logitud; $i++) {

            if ($lista[$i] === $elemento) {

                return $i;
            }
        }

        return -1;
    }

    $miLista = [1, 3, 5, 7, 9, 2, 4, 6, 8, 10];

    $elementoBuscar = 5;

    $resultado = busquedaSecuencial($miLista, $elementoBuscar);

    echo ("En la Lista: <pre>");
    print_r($miLista);
    echo ("</pre>");

    if ($resultado != -1) {

        echo "El elemento " . $elementoBuscar . " se encontro en la posición: " . $resultado;
    } else {
        echo "El elemento " . $elementoBuscar . " no se encontro en la lista";
    }

    ?>

</body>

</html>