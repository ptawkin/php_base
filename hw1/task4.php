<?php

$title = "Lesson 1";
$header = 'Lesson 1';
$paragraph = 'Hello world';
$year = date('Y');

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?></title>
</head>
<body>

    <h1>
        <?php
            echo $header;
        ?>
    </h1>

    <p>
        <?php
            echo $paragraph;
        ?>
    </p>

    <?php
        echo $year;
    ?>

</body>
</html>
