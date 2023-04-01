<?php
//headers than compered with pre flight request
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');


require_once '../app/controllers/ContactController.php';

// if POST request data exist, then create new controller instans 
if($_POST){
    $contactController = new ContactController();
    $contactController->process();
};















































// class Database{
//     private $host = "localhost1";
//     private $username = "root";
//     private $password = "";
//     private $database = "hotelPontus";

//     private $conn;  //make private variable that is used to establish a connection to the database

//     public function __construct(){     
//         $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database); //connect to a database
//       // $this->conn->query("INSERT INTO `email` (`name`, `email`, `message`) VALUES('Max', 'exam@gmail.com', 'Hi, I wanna book your hotel')");    
//         if($this->conn->connect_error){ //if connection failed throw error
//             die("DB connection failed: ".$this->conn->connect_error);
//         } 
//     }

//     public function insertData($name, $email, $message){  //function that get (name, email, message) and insert into database
//         $stmt = $this->conn->prepare("INSERT INTO `email` (`name`, `email`, `message`) VALUES(?, ?, ?)"); //prepare data for insert
//         $stmt->bind_param("sss", $name, $email, $message); 
//         $stmt->execute();
//         $stmt->close();
//     }
// };

// class Email{
//     private $to;
//     private $subject;
//     private $message;
//     private $headers;
//     // this params need for function mail() that is send email 

//     public function __construct($to, $subject, $message, $headers){
//         $this->to = $to;
//         $this->subject = $subject;
//         $this->message = $message;
//         $this->headers = $headers;
//     }

//     public function sendMail(){
//         mail($this->to, $this->subject, $this->message, $this->headers);
//     }
// };

// class ContactForm{
//     private $name;
//     private $email;
//     private $message;

//     public function __construct($name, $email, $message){
//         $this->name = $name;
//         $this->email = $email;
//         $this->message = $message;
//     }

//     public function processData(){
//         $db = new Database;
//         $db->insertData($this->name, $this->email, $this->message);

//         $to = "kiselev1223maksim@gmail.com";
//         $subject = "New mail from site!";
//         $message = "Name: " .$this->name. "\r\Email: " .$this->email. "\r\Message: " .$this->message;
//         $headers = "From: yourwebsite@example.com" . "\r\n" .
//         "Reply-To: " . $this->email . "\r\n" .
//         "X-Mailer: PHP/" . phpversion();

//         $email = new Email($to, $subject, $message, $headers);
//         $email->sendMail();
//     }
// };


// // $json = file_get_contents('php://input'); //if header 
// // $data = json_decode($json, true);
//     // $name = $data['name'];
//     // $email = $data['email'];
//     // $message = $data['message'];

//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $message = $_POST['message'];
//     $contactForm = new ContactForm($name, $email, $message); 
//     $contactForm->processData();

