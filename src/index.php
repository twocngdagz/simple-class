<?php

use App\Providers\Collection;
use App\Providers\SumCollection;

require_once '../vendor/autoload.php';

$collection = new Collection();

var_dump('Current Items...');

var_dump(print_r($collection->get(), true));

var_dump("Sum Random: " . $collection->sum());

var_dump('Average: ' . $collection->average());

var_dump(print_r($collection->sort('ASC')));

var_dump(print_r($collection->sort('DESC'), true));

var_dump('Initializing SumCollection Class...');

$sumCollection  = new SumCollection();

var_dump('Sum (First & Last): '. $sumCollection->sum());
