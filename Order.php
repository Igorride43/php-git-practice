<?php

class Order
{
    private array $items = [];

    public function addItem(string $name, float $price, int $quantity): void
    {
        $this->items[] = [
            'name' => $name,
            'price' => $price,
            'quantity' => $quantity,
        ];
    }

    public function totalCost(): float
    {
        $total = 0.0;

        foreach ($this->items as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        return $total;
    }
}