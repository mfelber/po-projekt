<?php

namespace PO\Lib;

class DB
{
    private $host = "localhost";
    private $port = 3306;
    private $username = "root";
    private $password = "";
    private $dbName = "po-projekt";

    private \PDO $connection;


    public function __construct(
        string $host = "",
        int $port = 3306,
        string $username = "",
        string $password = "",
        string $dbName = ""
    )
    {
        if(!empty($host)) {
            $this->host = $host;
        }

        if(!empty($port)) {
            $this->port = $port;
        }

        if(!empty($username)) {
            $this->username = $username;
        }

        if(!empty($password)) {
            $this->password = $password;
        }

        if(!empty($dbName)) {
            $this->dbName = $dbName;
        }

        try {
            $this->connection = new \PDO(
                "mysql:host=$this->host;dbname=$this->dbName;charset=utf8mb4",
                $this->username,
                $this->password
            );
            // set the PDO error mode to exception
            $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch(\PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }


    public function getCountries(): array {
        $sql = "SELECT * FROM home";
        $query = $this->connection->query($sql);
        $data = $query->fetchAll(\PDO::FETCH_ASSOC);

        return $data;
    }

    public function insertCountry(string $countryName, string $imageURL):bool
    {
        $sql = "INSERT INTO home (countryName,imageURL) VALUES ('".$countryName."','".$imageURL."')";
        $stmt = $this->connection->prepare($sql);
        return $stmt->execute();
    }


    public function deleteCountry(int $id): bool
    {
        $sql = "DELETE FROM home WHERE id = " .$id;
        $stmt =$this->connection->prepare($sql);
        return $stmt->execute();

    }

    public function getCountry(int $id):array
    {
        $sql = "SELECT * FROM home WHERE id = ".$id;
        $query = $this->connection->query($sql);
        $data = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $data;

    }

    public function updateCountry(int $id, string $countryName = "", string $imageUrl = ""): bool
    {
        $sql = "UPDATE home SET ";

        if(!empty($countryName)) {
            $sql .= " countryName = '" . $countryName . "'";
        }

        if(!empty($imageUrl)) {
            $sql .= ", imageURL = '" . $imageUrl . "'";
        }

        $sql .= " WHERE id = ". $id;

        $stmt = $this->connection->prepare($sql);
        return $stmt->execute();
    }

    public function getCountriesPage():array {

        $sql = "SELECT countryName,imageURL FROM home";
        $query = $this->connection->query($sql);
        $data = $query->fetchAll(\PDO::FETCH_ASSOC);
        $AllCountries= [];

        foreach ($data as $country){
            $AllCountries[$country['countryName']] = $country['imageURL'];
        }

        return $AllCountries;
    }
}