<?php
	#Author: Saints Webnology
	#Author URL: saintswebnology.com

	try
	{
		//initialize the configuration details
		$configuration = [
			'host' => 'localhost',
			'database' => 'hng',
			'username' => 'intern',
			'password' => '@hng.intern1'
		];

		//set the host and dbname into a variable
		$dsn = 'mysql:host='. $configuration['host'] .';dbname='. $configuration['database'];

		//Create the connection
		$connection = new PDO($dsn, $configuration['username'], $configuration['password']);
		$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//With errors

	}catch(PDOException $e)
	{
		//in case of connection failure
		echo $e->getMessage();
		die();
	}

