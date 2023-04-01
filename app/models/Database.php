<?php

require_once './config/DatabaseConfig.php'; //connect config file 

class Database{
    //make variables private, so it can be used only in class
    private $host = DB_HOST; 
    private $username = DB_USERNAME;
    private $password = DB_PASSWORD;
    private $database = DB_NAME;

    private $conn;  //make private variable that is used to establish a connection to the database

    public function __construct(){
        
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database); //connect to a database
        
        if($this->conn->connect_error){ //if connection failed throw error
            die("DB connection failed: ".$this->conn->connect_error);
        } 
    }

    public function insertData($name, $email, $message){  //function that get (name, email, message) and insert into database
        $stmt = $this->conn->prepare("INSERT INTO `email` (`name`, `email`, `message`) VALUES(?, ?, ?)"); //prepare data for insert
        $stmt->bind_param("sss", $name, $email, $message); 
        $stmt->execute();
        $stmt->close();
    }
};