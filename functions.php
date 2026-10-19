<?php

function rectangleArea(float $width, float $height): float
{
    return $width * $height;
}

function searchByName(array $items, string $query): array
{
    return array_values(array_filter(
        $items,
        fn($item) => stripos($item, $query) !== false
    ));
}