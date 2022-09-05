<?php

// Function which prints "Hello I am Zura"
// function hello(){
//     echo "Hello I am Jian". '<br>';
// }
// hello();
// hello();
// hello();
// Function with argument
// $name = 'Jian';
// function hello($name){
//     return "hello, I am $name".'<br>';
// }

// echo hello('Jian');
// echo hello('Xue');
// echo hello('qiqi');
// echo hello('Lianye');
// Create sum of two functions

// function sum($a, $b){
//     return $a + $b;
// }
// echo sum(4,5);

// Create function to sum all numbers using ...$nums
// function sum(...$nums){
//     // echo '<pre>';
//     // var_dump($nums);
//     // echo '</pre>';
//     $sum = 0;
//     foreach($nums as $n){
//         $sum += $n;
//     }
//     return $sum;
// }

// sum(1,2,3,4,5,6,7,8,9);
// echo sum(1,2,3,4,5,6,7,8,9).'<br>';
// Arrow functions
function sum(...$nums){
    return array_reduce($nums, fn($carry, $n) =>  $carry + $n);
}

echo sum(1,2,3,4,5,6,7,8,9).'<br>';
