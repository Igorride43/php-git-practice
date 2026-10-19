<?php

require_once 'Order.php';

$order = new Order();
$order->addItem("Книга", 300, 2);
$order->addItem("Тетрадь", 50, 3);

echo "Общая стоимость: " . $order->totalCost() . PHP_EOL;