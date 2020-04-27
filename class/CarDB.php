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
            $car = new Car($item['id'], $item['name'], $item['author'], $item['price']);
            array_push($cars, $car);
        }
        return $cars;
    }

    public function delete($id)
    {
        //chuan bi cau lenh sql
        $sql = "DELETE FROM cars WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        // gan gia tri vao
        $stmt->bindParam(":id", $id);
        //thuc thi
        $stmt->execute();
    }

    function add($car)
    {
        //chuan bi cau len insert
        $sql = "INSERT INTO cars(id,name,author,price) VALUES (:id, :name,:author,:price)";
        $stmt = $this->conn->prepare($sql);
        // gan gia tri vao
        $stmt->bindParam(":id", $car->getId());
        $stmt->bindParam(":name", $car->getName());
        $stmt->bindParam(":author", $car->getAuthor());
        $stmt->bindParam(":price", $car->getPrice());
        //thuc thi
        $stmt->execute();
    }

    public function search($keyword)
    {
        // chuan bi cau lenh truy
        $sql = "SELECT * FROM cars WHERE name = '$keyword' OR author = '$keyword';";
        $stmt = $this->conn->query($sql);
        $result = $stmt->fetch();
        return new Car($result['id'], $result['name'], $result['author'], $result['price']);
    }

    public function findById($id)
    {
        $sql = "SELECT * FROM cars WHERE id = '$id';";
        $stmt = $this->conn->query($sql);
        $result = $stmt->fetch();
        return new Car($result['id'], $result['name'], $result['author'], $result['price']);
    }
}