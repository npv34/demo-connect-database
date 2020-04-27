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

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }
}