<?php


class CarManager
{
    protected $carDB;

    public function __construct()
    {
        $this->carDB = new CarDB();
    }

    public function index() {
        return $this->carDB->getAll();
    }
}