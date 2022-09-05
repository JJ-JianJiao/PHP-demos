<?php

/*
【总结】

a===b，是先判断a和b的类型是否相同，如果不用则False；如果相同，再判断值是否相同。
所以：’2’===2->False
a==b，是判断a（支持自动类型转换）的值和b的值是否相同->所以’2’和2，在值上是一样的。
所以：’2’==2->True
*/

$age = false;
$salary = 300000;

// // Sample if
// if($age === 20){
//     echo "1";
// }
// // Without circle braces
// if($age === 20)    echo "1";
// // Sample if-else
// if($age === 20){
//     echo "1";
// }
// else{
//     echo "2";
// }
// Difference between == and ===

if($age == 20){
    echo "1".'<br>';
}

if($age === '20'){
    echo "2".'<br>';
}

// if AND

if($age > 20 || $salary ===300000){
    echo "Do something";
}

// if OR

// Ternary if
echo $age < 22 ? 'Young' : 'Old';


// Short ternary
var_dump($age);
$myAge = $age ?:18;
echo '<pre>';
echo $myAge;
var_dump($myAge);
echo '</pre>';

// Null coalescing operator

$nyName = isset($name) ? $name : 'Jian';
$name ?? 'John';
// switch
$userRole = 'admin';
switch($userRole){
    case 'admin';
    break;
    case 'editor';
    echo 'Invalid role';
    break;
    case 'admin';
    echo 'Invalid role';
    break;
    case 'user';
    echo 'Invalid role';
    break;
    case 'admin';
    echo 'Invalid role';
    break;
    default:
        echo 'Invalid role';
}
