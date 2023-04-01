<?php

define('EMAIL_HOST', 'smtp.gmail.com');
define('EMAIL_PORT', getenv('EMAIL_PORT'));
// define('EMAIL_SECURE', 'tls');
define('EMAIL_USERNAME', getenv('EMAIL_USERNAME'));
define('EMAIL_PASSWORD', getenv('EMAIL_PASSWORD')); //create and past here
define('EMAIL_FROM_NAME', 'HotelPontusAuto');
define('EMAIL_FROM_ADDRESS', 'meHotelPontus@gmail.com');
define('EMAIL_TO_ADDRESS', 'laurkurt@gmail.com');
define('EMAIL_SUBJECT', 'Auto reply from Hotel');
