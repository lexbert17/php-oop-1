<?php

require_once __DIR__ . '/Models/Movie.php';

$Movies = [
    new Movie( 'il signore degli anelli' , 'avventura' , 'J. R. R. Tolkien' , [4,8,9]),
    new Movie( 'harry potter' , 'sopprannaturale' ,' J. K. Rowling' , [5,7,9]),
];

var_dump($Movies);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach($Movies as $Movie){ ?>

        <li>
            <?php echo $Movie-> title . ' ' . $Movie-> genre . ' ' . $Movie-> author . ' ' . $Movie-> mediaVoti()?>
        </li>

        <?php } ?> 
    </ul>
</body>
</html>
