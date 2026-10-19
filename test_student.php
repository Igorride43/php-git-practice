<?php

require_once 'Student.php';

$student = new Student("Иван Иванов", "ИС-21", 4.5);
echo $student->showInfo() . PHP_EOL;