<?php


class Car
{
    protected $id;
    protected $name;
    protected $author;
    protected $price;

    public function __construct($id, $name, $author, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->author = $author;
        $this->price = $price;
    }
}