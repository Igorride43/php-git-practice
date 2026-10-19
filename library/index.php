<?php

require_once __DIR__ . '/Book.php';
require_once __DIR__ . '/Library.php';

$library = new Library();

$book1 = new Book("Преступление и наказание", "Фёдор Достоевский");
$book2 = new Book("Мастер и Маргарита", "Михаил Булгаков");

$library->addBook($book1);
$library->addBook($book2);

echo "Список книг:" . PHP_EOL;
$library->showBooks();

echo PHP_EOL . "Выдача книги:" . PHP_EOL;
$book1->borrow();

$library->showBooks();

echo PHP_EOL . "Удаление книги:" . PHP_EOL;
$library->removeBook("Мастер и Маргарита");

$library->showBooks();

echo PHP_EOL . "Результаты поиска:" . PHP_EOL;

foreach ($library->searchByTitle("Преступление") as $book) {
    echo $book->showInfo() . PHP_EOL;
}