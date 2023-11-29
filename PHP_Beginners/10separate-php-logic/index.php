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

//This is call filter with variable or Extract function
$filteredBooks = filter($books, function($book){//with function in here is anonymous function
    return $book['author'] == 'Andy Weir';
});

//This is filter with php function
// $filteredBooks = array_filter($books, function($book){
//     return $book['author'] == 'Andy Weir';
// });

// this is will call another file php
require "index.view.php";
