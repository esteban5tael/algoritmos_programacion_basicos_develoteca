<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Desarrollado por: Juan Esteban Benjumea Correa -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Algoritmos de Programación Básicos</title>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        nav ul {
            list-style: none;
            padding: 0;
            text-align: center;
        }

        nav ul li {
            /* display: inline; */
            margin-right: 20px;
        }

        /* Estilos para enlaces */
        a {
            text-decoration: none;
            color: gray;
            transition: color 0.3s ease-in-out;
        }

        a:hover {
            color: #fff;
            /* Cambia el color al hacer hover */
        }

        .aSection:hover {
            color: #000;
        }

        /* Estilos para la sección de contenido */
        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            color: #333;
        }

        p {
            color: #555;
            line-height: 1.5;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <ul>
                <?php
                $directorio = './algoritmos/'; // Ruta de la subcarpeta "algoritmos"
                $archivos = scandir($directorio); // Lee los archivos en el directorio

                foreach ($archivos as $archivo) {
                    if (is_file($directorio . $archivo) && pathinfo($archivo, PATHINFO_EXTENSION) === 'php') {
                        // Verifica si es un archivo PHP dentro de la subcarpeta
                        echo "<li><a href=\"$directorio$archivo\" target=\"_blank\">$archivo</a></li>";
                        // Muestra el archivo como enlace para abrir en una nueva página
                    }
                }
                ?>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h1>Prácticas Sobre "Algoritmos de programación básicos" del Canal Develoteca</h1>
            <p>Quiero compartir contigo un canal de YouTube que me ha ayudado mucho en mi aprendizaje de programación. El canal se llama Develoteca y ofrece una amplia variedad de contenido relacionado con desarrollo web y programación.</p>
            <p>Uno de los videos que más me gustó recientemente es el titulado: <a class="aSection" href="https://www.youtube.com/watch?v=MY3q1cHE2D0" target="_blank">"Algoritmos de programación básicos"</a>. Este video me ayudó a fortalecer mis habilidades lógicas y a mejorar en la resolución de problemas de programación.</p>
            <p>Como muestra de agradecimiento, decidí subir el código de los ejercicios que se presentan en el video a mi repositorio en GitHub. Además, utilicé ChatGPT para mejorar el estilo de cada página de esos ejercicios, lo que facilitó su comprensión.</p>
            <p>Realicé todos los ejercicios en Visual Studio Code y utilicé la extensión TabNINE para agilizar mi flujo de trabajo. Esta combinación de herramientas me permitió aprender de manera eficiente y efectiva.</p>
            <p>Estoy emocionado de que Develoteca esté publicando nuevo contenido, ya que su material ha sido invaluable en mi camino de aprendizaje, especialmente cuando se trata de temas como PHP y Laravel.</p>
            <p>Puedes encontrar más contenido interesante en el <a class="aSection" href="https://www.youtube.com/@Develoteca" target="_blank">canal de YouTube Develoteca</a>. ¡No dudes en explorar sus videos y mejorar tus habilidades de programación!</p>
        </section>
    </main>
</body>

</html>