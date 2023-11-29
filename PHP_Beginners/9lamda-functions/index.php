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

        // This is a function for filter
        function filter ($items, $fn){
            $filtereditems = [];

            foreach($items as $item){
                if ($fn($item)){
                    // this is will add a book in $filtereditems
                    $filtereditems[] = $item;
                }
            }

            return $filtereditems;
        }

        //This is a lamda function
        // $filterBook = filter($books){

        // }

        //This is call filter with variable or Extract function
        $filteredBooks = filter($books, function($book){//with function in here is anonymous function
            return $book['author'] == 'Andy Weir';
        });
        
        //This is filter with php function
        // $filteredBooks = array_filter($books, function($book){
        //     return $book['author'] == 'Andy Weir';
        // });

    ?>

    <!-- THis is print $books filtered -->
    <ul>
        <?php foreach ($filteredBooks as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl']; ?>">
                    <?= $book['name']; ?> (<?= $book['releaseYear']; ?>) by <?= $book['author']; ?>
                </a>
            </li>
        <?php endforeach; ?>    
    </ul>
</body>
</html>