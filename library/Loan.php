<?php

require_once __DIR__ . '/Book.php';
require_once __DIR__ . '/User.php';

class Loan
{
    public Book $book;
    public User $user;
    public bool $returned = false;

    public function __construct(Book $book, User $user)
    {
        $this->book = $book;
        $this->user = $user;
    }

    public function issue(): bool
    {
        if (!$this->book->borrow()) {
            return false;
        }

        $this->returned = false;
        return true;
    }

    public function returnLoan(): void
    {
        $this->book->returnBook();
        $this->returned = true;
    }

    public function showInfo(): string
    {
        $status = $this->returned ? 'Возвращена' : 'На руках';

        return "{$this->book->title}; читатель: {$this->user->name}; {$status}";
    }
}