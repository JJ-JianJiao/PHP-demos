<?php

// while
// while(){

// }
// Loop with $counter
$counter = 0;
// while($counter < 10){
//     echo $counter.'<br>';
//     if($counter ===5) break;
//     $counter++;
// }
// do - while
// do{
//     $counter++;
//     echo $counter.'<br>';
// }while($counter < 10);
// for

// for($i = 0; $i < 10; $i++){
//     echo $i .'<br>';
// }

// foreach
$fruits = ["banana", "Apple", "Orange"];
foreach($fruits as $i => $f){
    echo $i. $f . '<br>';
}
// Iterate Over associative array.

$person = [
    'name' => 'Brad',
    'surname' => 'Traversy',
    'age' => 30,
    'hobbies' => ['Tennis', 'Video Games']
];

foreach($person as $key => $value){
    if( is_array($value))
        echo $key. ": ". implode(", ", $value) .'<br>';
    else
        echo $key. ": ". $value .'<br>';
}