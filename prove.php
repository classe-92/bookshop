<?php

include __DIR__ . '/Models/Book.php';


$libri = [
    new Book('La ragazza della neve', 'bla bla bla', 'https://m.media-amazon.com/images/I/81fGBBNMcdL._AC_UL480_FMwebp_QL65_.jpg', 'en'),
    new Book('Pippo', 'bla bla bla', 'https://m.media-amazon.com/images/I/81fGBBNMcdL._AC_UL480_FMwebp_QL65_.jpg', 'en'),
    new Book('Pluto', 'bla bla bla', 'https://m.media-amazon.com/images/I/81fGBBNMcdL._AC_UL480_FMwebp_QL65_.jpg', 'en')
];

var_dump($libri);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php foreach ($libri as $libro) { ?>

            <li>
                <?php echo "$libro->title" ?>
            </li>
        <?php } ?>
    </ul>
</body>

</html>