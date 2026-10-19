<?php

require_once 'Teacher.php';

$teacher = new Teacher("Пётр Петров", "PHP", 8);
echo $teacher->showInfo() . PHP_EOL;