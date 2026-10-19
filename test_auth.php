<?php

require_once 'Auth.php';

$user = new User("Игорь", "igor@example.com");
$auth = new Auth();

var_dump($auth->validateEmail($user));