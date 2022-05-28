<?php
	// current environment
	define('PRODUCTION_ENV', false);

	// database connectivity
	if (PRODUCTION_ENV) {
		define ('DB_HOST', '');
		define ('DB_USER', '');
		define ('DB_PASS', '');
		define ('DB_NAME', '');
		define ('DB_PORT', '');
	}else {
		define ('DB_HOST','localhost');
		define ('DB_USER','root');
		define ('DB_PASS','');
		define ('DB_NAME','skooli');
		define ('DB_PORT','');
	}

	// set default timezone
	date_default_timezone_set('Asia/Kathmandu');
	
	// current year
	define ('YEAR', date('Y'));
	
	// current date
	define ('DATE', date ('Y-m-d'));
	
	// current time
	define ('TIME', date ('h:i:s'));

	// current date/time
	define ('DATETIME', date ('Y-m-d h:i:s'));
	
	// include the related files to run the applicaftion
	include 'class/DBConnection.class.php';
    include 'class/Skooli.class.php';
    
?>