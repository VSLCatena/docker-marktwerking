<?php

if (!function_exists('getenv_docker')) {
	// https://github.com/docker-library/wordpress/issues/588 (WP-CLI will load this file 2x)
	function getenv_docker($env, $default) {
		if ($fileEnv = getenv($env . '_FILE')) {
			return rtrim(file_get_contents($fileEnv), "\r\n");
		}
		else if (($val = getenv($env)) !== false) {
			return $val;
		}
		else {
			return $default;
		}
	}
}


define( 'DB_DRIVER', getenv_docker('MW_DB_DRIVER', 'mysql') ); 
define( 'DB_HOST', getenv_docker('MW_DB_HOST', 'db') );
define( 'DB_USERNAME', getenv_docker('MW_DB_USERNAME', 'dbuser') );
define( 'DB_PASSWORD', getenv_docker('MW_DB_PASSWORD', 'dbpassword') );
define( 'DB_DATABASE', getenv_docker('MW_DB_NAME', 'marktwerking') );

define( 'BAR_PASSWORD', getenv_docker('MW_BAR_PASSWORD', 'MW2021') );
define( 'TITLE', getenv_docker('MW_TITLE', 'Marktwerking') );


// Database
//define('DB_DRIVER', 'mysql');
//define('DB_HOST', 'db');
//define('DB_USERNAME', 'dbuser');
//define('DB_PASSWORD', 'dbpass');
//define('DB_DATABASE', 'marktwerking');

// Bar password
//define('BAR_PASSWORD', 'INSERT PASSWORD HERE');

// Extras
//define('TITLE', 'Marktwerking');
