<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<body>
    <h1>Recomended Books</h1>
    
    <?php
    // This is associative array
        $books = [
            [
                "name" => "Do Androids Dream of Electric Sheep",
                "author" => "Philip K. Dick",
                "purchaseUrl" => "http://example.com"
            ],
            [
                "name" => "Hail Marry",
                "author" => "Andy Weir",
                "purchaseUrl" => "http://example.com"
            ]
        ];
    ?>

    <!-- THIS IS PRINT ALL ELEMENT BOOKS -->
    <ul>
        <!-- This is normal away -->
        <!-- <?php foreach( $books as $book)
            echo "<li>$book[name]</li>";
        ?> -->

        <!-- This is shortcut RECOMENDED AWAY -->
        <?php foreach($books as $book): ?>
            <li>
                <a href="<?= $book["purchaseUrl"]; ?>">
                    <?= $book["name"]; ?>
                </a>
            </li>
        <?php endforeach;?>
    </ul>

    <!-- THIS IS PRINT ONLY ONE ELEMENT BOOKS -->
    <h1>My Favorite Book is </h1>
    <p><?php echo $books[1]["name"]; ?></p>
</body>
</html>