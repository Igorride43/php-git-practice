<?php

require_once __DIR__ . '/Book.php';

class Library
{
    private array $books = [];

    public function addBook(Book $book): void
    {
        $this->books[] = $book;
    }

    public function removeBook(string $title): bool
    {
        foreach ($this->books as $index => $book) {
            if ($book->title === $title) {
                unset($this->books[$index]);
                $this->books = array_values($this->books);
                return true;
            }
        }

        return false;
    }

    public function showBooks(): void
    {
        foreach ($this->books as $book) {
            echo $book->showInfo() . PHP_EOL;
        }
    }

    public function getBooks(): array
    {
        return $this->books;
    }

    public function searchByTitle(string $query): array
    {
    $results = [];

    foreach ($this->books as $book) {
        if (stripos($book->title, $query) !== false) {
            $results[] = $book;
        }
    }

    return $results;
    }
}