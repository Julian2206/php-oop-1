<?php

require_once __DIR__ . "/Movie.php";

$movies =
    [

        new Movie("The Naked Gun: From the Files of Police Squad!", "Comedy", "David Zucker", "USA", 1988),
        new Movie("Monty Python's Life of Brian", "Comedy", "Terry Jones", "UK", 1979),
        new Movie("Reservoir Dogs", "noir", "Quentin Tarantino", "USA", 1992),
        new Movie("The Lovely Bones", "thriller", "	Peter Jackson", "NZ", 2009),
        new Movie("Secret Window", "thriller", "David Koepp", "USA", 2004),
        new Movie("Hot Shots! Part Deux", "Comedy", "Jim Abrahams", "USA",     1993),
        new Movie("Ace Ventura: Pet Detective", "Comedy", "Tom Shadyac", "USA", 1994),

    ];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php_oop</title>
</head>

<body>

    <?php foreach ($movies as $movie) { ?>

        <h3>
            <?php echo $movie->title ?>
        </h3>

        <p>
            <?php echo $movie->movieInfo(); ?>
        </p>
    <?php } ?>

</body>

</html>