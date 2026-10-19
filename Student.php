<?php

class Student
{
    public string $name;
    public string $group;
    public float $averageGrade;

    public function __construct(
        string $name,
        string $group,
        float $averageGrade
    ) {
        $this->name = $name;
        $this->group = $group;
        $this->averageGrade = $averageGrade;
    }

    public function showInfo(): string
    {
        return "{$this->name}, {$this->group}, средний балл: {$this->averageGrade}";
    }
}