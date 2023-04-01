<?php

require_once '../app/models/ContactForm.php'; //connect ContactForm

class ContactController{ //this class check if there is a POST request and DATA with it, 
                        //and create new instans of ContactForm class that save data to the data base
    public function process(){
        if (isset($_POST)) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];
        
            $contactForm = new ContactForm($name, $email, $message);
            $contactForm->processData();
            echo "Data is save";

        }
    }
    
}

