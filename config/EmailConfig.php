<?php

define('EMAIL_HOST', 'smtp.gmail.com');
define('EMAIL_PORT', $_ENV['EMAIL_PORT']);
// define('EMAIL_SECURE', 'tls');
define('EMAIL_USERNAME', $_ENV['EMAIL_USERNAME']);
define('EMAIL_PASSWORD',  $_ENV['EMAIL_PASSWORD']); //create and past here
define('EMAIL_FROM_NAME', 'HotelPontusAuto');
define('EMAIL_FROM_ADDRESS', $_ENV['EMAIL_FROM_ADDRESS']);
define('EMAIL_TO_ADDRESS', $_ENV['EMAIL_TO_ADDRESS']);
define('EMAIL_SUBJECT', 'Auto reply from Hotel');
