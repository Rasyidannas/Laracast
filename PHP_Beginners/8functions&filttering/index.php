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
                "releaseYear" => "1968",
                "purchaseUrl" => "http://example.com"
            ],
            [
                "name" => "Hail Marry",
                "author" => "Andy Weir",
                "releaseYear" => "2021",
                "purchaseUrl" => "http://example.com"
            ],
            [
                "name" => "The Martin",
                "author" => "Andy Weir",
                "releaseYear" => "2011",
                "purchaseUrl" => "http://example.com"
            ],
        ];

        // This is a function for filter author
        function filterByAuthor($books, $author){
            $filteredBooks = [];

            foreach($books as $book){
                if ($book['author'] === $author){
                    // this is will add a book in $filteredBooks
                    $filteredBooks[] = $book;
                }
            }

            return $filteredBooks;
        }

    ?>

    <!-- THis is print $books filtered -->
    <ul>
        <?php foreach (filterByAuthor($books, 'Philip K. Dick') as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl']; ?>">
                    <?= $book['name']; ?> (<?= $book['releaseYear']; ?>) by <?= $book['author']; ?>
                </a>
            </li>
        <?php endforeach; ?>    
    </ul>
</body>
</html>