<?php

require_once __DIR__ . '/User.php';

$user = new User("Игорь Чернев", "igor@example.com");
echo $user->showInfo() . PHP_EOL;