<?php 

/**
 * 
 */
class Database
{
	
	public function db_connect()
	{
		try {
			
			$string = "mysql:host=localhost;dbname=phpmvc_db;";
			$db     = new PDO($string,'root','');
			show($db);

		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function read($query, $data = [])
	{
		// code...
	}

	public function write($query, $data = [])
	{
		// code...
	}

}