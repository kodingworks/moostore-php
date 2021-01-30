<?php

namespace BI\Entities;

class Shop extends AbstractEntities
{
    public $id;
    public $link;
    public $name;
    public $description;
    public $address;
    public $picture = [];
    public $rate;
}