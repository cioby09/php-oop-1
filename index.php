<?php

require_once __DIR__ . "/Models/movie.php";

$movies = array(
    new Movie("Guardians of the Galaxy 3", ["Action", "Adventure", "Comedy", "Science fiction"], "150 min"),
    new Movie("The Super Mario Bros. Movie", ["Animation", "Adventure", "Comedy"], "92 min"),
    new Movie("The First Slam Dunk", ["Animation", "Adventure", "Anime", "Comedy"], "124 min"),
);

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
        <?php foreach ($movies as $movie) { ?>
            <li>
                <?php echo $movie->printMovie() ?>
            </li>
        <?php } ?>
    </ul>
</body>

</html>