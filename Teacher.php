<?php

class Teacher
{
    public string $name;
    public string $subject;
    public int $experience;

    public function __construct(
        string $name,
        string $subject,
        int $experience
    ) {
        $this->name = $name;
        $this->subject = $subject;
        $this->experience = $experience;
    }

    public function showInfo(): string
    {
        return "{$this->name}, дисциплина: {$this->subject}, стаж: {$this->experience} лет";
    }
}