<?php 
class User {
    private $conn;
    private $table = 'students';

    public $id;
    public $name;
    public $email;
    public $password;
    public $course;
    public $profile_image;

    public function __construct($db) {
        $this->conn = $db;
    }


    public function create() {
        $this->password = password_hash($this->password, PASSWORD_BCRYPT);

        $query ="INSERT INTO {$this->table} SET name=:name, email=:email, password=:password, course=:course, profile_image=:profile_image";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":password",$this->password);
        $stmt->bindParam(":course", $this->course);
        $stmt->bindParam(":profile_image", $this->profile_image);
        
        return $stmt->execute();

    }


}

?>