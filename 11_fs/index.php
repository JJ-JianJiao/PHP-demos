<?php
// Magic constants
echo __DIR__.'<br>';
echo __FILE__.'<br>';
echo __LINE__.'<br>';
// Create directory

// mkdir('test');

// Rename directory

// rename('test', 'test2');

// Delete directory
// rmdir('test2');
// Read files and folders inside directory
// echo file_get_contents('lorem.txt');
// $files = scandir('./');
// echo '<pre>';
// var_dump($files);
// echo '</pre>';

// // file_get_contents, file_put_contents
// echo file_get_contents('lorem.txt');
// file_put_contents('sample.txt', 'some content');
// echo '<br>'.file_get_contents('sample');
// file_get_contents from URL

// $userJson = file_get_contents('https://jsonplaceholder.typicode.com/users');

// echo '<br>'. $userJson;

// echo '<pre>';
// echo $userJson;
// echo '</pre>';
// $users = json_decode($userJson, true);
// echo '<pre>';
// var_dump($users);
// echo '</pre>';

// https://www.php.net/manual/en/book.filesystem.php
// file_exists
var_dump(file_exists('sample.txt'));
var_dump(is_dir('test'));
var_dump(is_dir('.'));
// is_dir
// filemtime

echo date('Y-m-d H:i:s', filemtime('lorem.txt'));

// filesize

echo '<br>'. filesize('lorem.txt');

// disk_free_space
echo '<br>'. disk_free_space(__DIR__)/1024/1024/1024;
// file