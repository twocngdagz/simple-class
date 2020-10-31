<?php

namespace App\Providers;

class Collection
{
    protected $items = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

    public function sum()
    {
        return $this->items[array_rand($this->items)] + $this->items[array_rand($this->items)];
    }

    public function average()
    {
        return array_sum($this->items)/count($this->items);
    }

    public function sort($order)
    {
        if ($order == 'ASC') {
            asort($this->items);
        } else {
            arsort($this->items);
        }

        return $this->items;
    }

    public function get()
    {
        return $this->items;
    }
}
