<?php

	// Include ezSQL core
	include_once "shared/ez_sql_core.php";

	// Include ezSQL database specific component
	include_once "ez_sql_mysqli.php";

	// Initialise database object and establish a connection
	// at the same time - db_user / db_password / db_name / db_host
	// db_host can "host:port" notation if you need to specify a custom port
	$db = new ezSQL_mysqli('root','','exodesign','localhost');
?>