<?php 

namespace Core;

// mysqli OOP
class Db 
{
    private static $instance = null;

    private $conn;
    private $table;
    private $query;

    private function __construct()
    {
        echo "an object created";

        // Create connection
        $this->conn = new \mysqli("localhost", "root", "", "oop_classes");

        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public static function getInstance()
    {
        if(! Db::$instance) {
            Db::$instance = new Db;
        } 

        return Db::$instance;
    }

    public function table(string $table)
    {
        $this->table = $table;
        $this->query = '';
        return $this;
    }

    public function select(string $fields = "*")
    {
        $this->query = "SELECT $fields FROM $this->table";
        return $this;
    }

    public function where(string $field, string $op, $value)
    {
        $this->query .= " WHERE $field $op '$value'";
        return $this;
    }

    public function andWhere(string $field, string $op, $value)
    {
        $this->query .= " AND $field $op '$value'";
        return $this;
    }

    public function orWhere(string $field, string $op, $value)
    {
        $this->query .= " OR $field $op '$value'";
        return $this;
    }

    public function orderBy(string $field, string $dir = "ASC")
    {
        $this->query .= " ORDER BY $field $dir";
        return $this;
    }

    public function limit(int $num)
    {
        $this->query .= " LIMIT $num"; 
        return $this;
    }


    public function get()
    {
        $result = $this->conn->query($this->query);

        if ($result->num_rows > 0) {
          return $result->fetch_all(MYSQLI_ASSOC);
        } else {
          return [];
        }
    }

    public function getOne()
    {
        $this->query .= " LIMIT 1";
        $result = $this->conn->query($this->query);

        if ($result->num_rows > 0) {
          return $result->fetch_assoc();
        } else {
          return [];
        }
    }

    // TODOS (insert, update, delete)
}