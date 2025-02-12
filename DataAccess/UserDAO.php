<?php

class UserDAO {
    private $conn;


    
    public function __construct($conn) {
        $servername = "localhost";
        $username = "root";  
        $password = "Emaster25(;(:";     
        $dbname = "eposte"; 

// Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }   
    }

    public function getUserByEmail($email) {
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    public function createUser($email, $password) {
        $stmt = $this->conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $email, $password);
        return $stmt->execute();
    }

   
}
?>
