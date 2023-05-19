<?php

require_once __DIR__ - "/Models/movie.php";

$movies_array = [
    $guardians = new Movie("Guardians of the Galaxy 3"),
    $mario = new Movie("The Super Mario Bros. Movie"),
]

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
</head>

<body>
    <h2>Film al cinema</h2>
    <ul>
        <?php foreach ($movies_array as $movie) { ?>
            <li>
                <?php echo $movie->printMovie() ?>
            </li>
        <?php } ?>
    </ul>
</body>

</html>