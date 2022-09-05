<?php

// Create simple string
$name = 'Jian';
$string = 'Hello. I am ' . $name . '. I am 32.';
$string2 = "Hello. I am $name. I am 32";
echo $string.'<br>';
echo $string2.'<br>';



// String concatenation


echo 'Hello' . ' World' . ' and PHP' . '<br>';

// String functions

$string = "     Hello World     ";

echo "1 - " . strlen($string) . '<br>';
echo var_dump(strlen($string)).'<br>';
echo "2 - " . trim($string) . '<br>'; //去除空格
echo "3 - " . ltrim($string) . '<br>'; //去除左空格， html在显示时，去除空格
echo var_dump(ltrim($string)).'<br>';
echo "4 - " . rtrim($string) . '<br>'; //去除右空格， html在显示时，去除空格
echo var_dump(rtrim($string)).'<br>';
echo "5 - " . str_word_count($string) . '<br>'; //去除空格
echo "6 - " . strrev($string) . '<br>'; //去除空格
echo "7 - " . strtoupper($string) . '<br>'; //去除空格
echo "8 - " . strtolower($string) . '<br>'; //去除空格
echo "9 - " . ucfirst("hello") . '<br>'; //去除空格
echo "10 - " . lcfirst("HELLO") . '<br>'; //去除空格
echo "11 - " . ucwords("hello world") . '<br>'; //去除空格
echo "12 - " . strpos($string, 'World') . '<br>'; //去除空格
echo "13 - " . stripos($string, 'world') . '<br>'; //去除空格
echo "14 - " . substr($string, 10, 8) . '<br>'; //去除空格
echo "15 - " . str_replace('World', 'PHP',$string) . '<br>'; //去除空格
echo "16 - " . str_ireplace('world', 'PHP2',$string) . '<br>'; //去除空格




// Multiline text and line breaks - Multiline text and reserve html tags
$longText = "
    Hello, 
    My name is <b>Jian</b>. 
    I am <b>32</b>. 
    I love my son.
";



echo '1 - ' .  $longText.'<br>';
echo '2 - ' . nl2br($longText).'<br>';
echo '3 - ' . htmlentities($longText).'<br>';
echo '3 - ' . nl2br(htmlentities($longText)).'<br>';
echo '5 - ' . html_entity_decode('&lt;b&gt;Jian&lt;/b&gt').'<br>';



// https://www.php.net/manual/en/ref.strings.php