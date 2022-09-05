<?php
require_once 'Person.php';

class Student extends Person{
    public string $studentID;

    public function __construct($name, $suerName, $studentID)
    {
        parent::__construct($name, $suerName);
        $this->studentID = $studentID;
        $this->age = 18;
    }
}

?>