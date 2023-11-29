<?php 

// 1. make this array in array
$items = ['A', 'B', 'C', 'D', 'E', 'F'];

// solution one with built in function
$solutionOne = array_chunk($items, 2);

print_r($solutionOne);

echo"<br>";

// solution second
function chunk($array, $chunkCount){
    $results = [];
    
    foreach($array as $index => $item){
        //this will make limit in array child
        $chunkIndex = floor($index/$chunkCount);
        
        // this is will add element in results array
        $results[$chunkIndex][] = $item;
    }
    
    return $results;
    
}

$solutionSecond = chunk($items, 2);
print_r($solutionSecond);

echo"<br>";

//solution third
function chunkReduce($array, $count){
    $index = 0;

    // this & is reference for make $index increament
    return array_reduce($array, function($array, $val) use (&$index, $count){
        // var_dump($index);
        $array[floor($index/$count)][] = $val;

        $index++;

        return $array;
    }, []);
}

$solutionThird = chunkReduce($items, 2);
print_r($solutionThird);