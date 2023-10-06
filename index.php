<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Valores de distintos tipos de datos</title>
    </head>
    <body>
        <?php
        echo "<h2>Valores literales enteros</h2>";
        echo '0 ';
        var_dump(0);
        echo '<br />';
        echo '235 ';
        var_dump(235);
        echo '<br />';
        echo '-50432 ';
        var_dump(-50432);
        echo '<br />';
        echo '075 ';
        var_dump(075);
        echo '<br />';
        echo '0xFF ';
        var_dump(0xFF);
        echo '<br />';
        echo '0b1010 ';
        var_dump(0b1010);
        echo '<br />';
        echo '1_234_567_890 ';
        var_dump(1_234_567_890);
        echo '<br />';
        echo 'PHP_INT_MAX ';
        var_dump(PHP_INT_MAX);
        echo '<br />';
        echo 'PHP_INT_MIN ';
        var_dump(PHP_INT_MIN);
        echo '<br />';
        echo "<h2>Valores literales flotantes</h2>";
        echo '3.14 ';
        var_dump(3.14);
        echo '<br />';
        echo '-78.345 ';
        var_dump(-78.345);
        echo '<br />';
        echo '1.2e13 ';
        var_dump(1.2e13);
        echo '<br />';
        echo '0.5E-4 ';
        var_dump(0.5E-4);
        echo '<br />';
        echo '1_000.50 ';
        var_dump(1_000.50);
        echo '<br />';
        echo 'PHP_FLOAT_MAX ';
        var_dump(PHP_FLOAT_MAX);
        echo '<br />';
        echo 'PHP_FLOAT_MIN ';
        var_dump(PHP_FLOAT_MIN);
        echo '<br />';
        echo "<h2>Valores literales cadenas</h2>";
        echo 'Esto es una cadena entre comillas simples. ';
        var_dump('Esto es una cadena entre comillas simples. ');
        echo '<br />';
        echo '(float) false ';
        var_dump((float) false);
        echo '<br />';
        $nombre = 'Juan';
        echo '¡Hola, $nombre! ';
        var_dump("¡Hola, $nombre!");
        echo '<br />';
        echo 'Esto es una cadena entre comillas dobles con secuencias de escape: \n\t- Salto de línea \n\t- Tabulación \n\t- Barra invertida (\\)';
        echo '<br />';
        echo '<pre>';
        var_dump("Esto es una cadena entre comillas dobles con secuencias de escape: \n\t- Salto de línea \n\t- Tabulación \n\t- Barra invertida (\\)");
        echo '</pre>';
        echo '<br />';
        echo '<pre>';
        var_dump("Esto es una
                cadena en
                varias líneas.");
        echo '</pre>';
        echo '<br />';
        echo '<pre>';
        var_dump(<<<'EOT'
    Esto es una cadena nowdoc.
    Puede abarcar varias líneas.
    Sin sustitución de variables.
    EOT);
        echo '</pre>';
        $edad = 32;
        echo '<pre>';
        var_dump(<<<EOT
    Esto es una cadena heredoc.
    Puede abarcar varias líneas.
    Con sustitución de variables como por ejemplo \$edad=$edad.
    EOT);
        echo '</pre>';
        echo '<br />';
        echo '<pre>';
        var_dump("Esta cadena contiene caracteres especiales: \$variable, \n, \t, \"comillas dobles\", 'comillas simples'");
        echo '<pre>';
        echo '<br />';
        echo 'Unicode: \u{1F604} ';
        var_dump("Unicode: \u{1F604}");
        echo '<br />';
        echo "<h2>Valores literales booleanos</h2>";
        echo 'true ';
        var_dump(true);
        echo '<br />';
        echo 'false ';
        var_dump(false);
        echo '<br />';
        echo "<h2>Valores literales nulos</h2>";
        echo 'NULL ';
        var_dump(NULL);
        ?>
    </body>
</html>
