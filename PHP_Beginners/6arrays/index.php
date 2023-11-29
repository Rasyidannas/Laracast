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
    // This is array
        $books = [
            "Do Androids Dream of Electric Sheep",
            "The Langoliers",
            "Hail Marry",
            "UI Principal"
        ];
    ?>

    <!-- THIS IS PRINT ALL ELEMENT BOOKS -->
    <ul>
        <!-- This is normal away -->
        <!-- <?php foreach( $books as $book)
            echo "<li>$book</li>";
        ?> -->

        <!-- This is shortcut -->
        <?php foreach($books as $book): ?>
            <li><?= $book; ?></li>
        <?php endforeach;?>
    </ul>

    <!-- THIS IS PRINT ONLY ONE ELEMENT BOOKS -->
    <h1>My Favorite Book is </h1>
    <p><?php echo $books[2]; ?></p>
</body>
</html>