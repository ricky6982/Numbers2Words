<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Example Numbers2Words</title>
</head>
<body>
    <h1>Example Numbers2Words</h1>

    <?php
        require 'vendor/autoload.php';

        use Rck6982\Numbers2Words\Numbers2Words;

        $obj = new Numbers2Words();

        $numero = 4587;

        echo $numero . ': ' . $obj->toWords($numero, 'en_US');
        echo '<br>';
        echo $numero . ': ' . $obj->toWords($numero);
    ?>

</body>
</html>