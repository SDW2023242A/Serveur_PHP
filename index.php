<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Test PHP</h1>
    <p>
        <?php
        $now = new DateTime();
        echo 'On est le ' . $now->format('d/m/Y à H:i:s');
        ?>
    </p>
</body>

</html>