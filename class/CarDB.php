<?php


class CarDB
{
    protected $conn;

    public function __construct()
    {
        $db = new DBConnect();
        $this->conn = $db->connect();
    }

    // lay tat ca du lieu tu  db
    public function getAll()
    {
        // chuan bi cau lenh truy
        $sql = "SELECT * FROM cars;";

        // thu thi truy van
        $stmt = $this->conn->query($sql);

        //lay tat ca kq tra ve
        $result = $stmt->fetchAll();
        // su ly ket qua
        $cars = [];
        foreach ($result as $item) {
            $car = new Car($item['id'],$item['name'],$item['author'], $item['price']);
            array_push($cars, $car);
        }

        return $cars;
    }
}