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

    public function destroy($id) {
        $this->carDB->delete($id);
    }

    public function add($car) {
        $this->carDB->add($car);
    }
}