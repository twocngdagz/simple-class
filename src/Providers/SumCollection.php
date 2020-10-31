<?php

namespace App\Providers;

class SumCollection extends Collection
{
    public function sum()
    {
        return end($this->items) + reset($this->items);
    }
}
