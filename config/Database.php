<?php 

class Database 
{
    //Database credentials
    private $host = "localhost";
    private $db_name = "school";
    private $username = "root";
    private $password ="";
    private $conn =null;

    //Database connection Method
    public function connect(){

       if($this->conn !==null)
        {
            return $this->conn;
        }
        
        try{
            $this->conn = new PDO(
                "mysql:host={$this->host};dbname={$this->db_name}; charset=utf8mb4",
                $this->username, $this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }catch(PDOException $e){
            die("Connection Error: ".$e->getMessage());
        }

        return $this->conn;

    }

}