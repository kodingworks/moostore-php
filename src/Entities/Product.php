<?php

namespace BI\Entities;

class Product extends AbstractEntities
{
    public $link;
    public $name;
    public $description;
    public $category;
    public $weight;
    public $condition;
    public $picture = [];
    public $stock;
    public $price;
    public $rate;
}