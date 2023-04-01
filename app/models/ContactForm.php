<?php 

require_once '../app/models/Database.php';

class ContactForm{
    private $name;
    private $email;
    private $message;

    public function __construct($name, $email, $message){
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
    }

    public function processData(){
        $db = new Database;
        $db->insertData($this->name, $this->email, $this->message);
    }
};