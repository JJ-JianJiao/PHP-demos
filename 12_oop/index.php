<?php
require_once "Person.php";
require_once "Student.php";
// What is class and instance



// $p = new Person("Jian", "Jiao");
// $p->setAge(12);

// $p2 = new Person("Xue Yan", "Cai");
// $p2->setAge(10);

// $s = new Person("Xue Yan", "Cai");
// $p2->setAge(10);

$student = new Student("Jian", "Jiao", 12);

echo '<pre>';
var_dump($student);
echo '</pre>';


// echo '<br>' . $p->getAge();

// echo '<br>'.Person::getCounter();

// Create Person class in Person.php

// Create instance of Person

// Using setter and getter