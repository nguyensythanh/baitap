<?php
	class DB
	{
		public static $con = NULL;
		public static function getConnection()
		{
			if(self::$con==NULL){
				require_once('config.php');
				try{
				self::$con = new PDO("mysql:host=$url;port=$port;dbname=$dname",$uname,$upass);
				self::$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
				}
				catch(PDOException $e){
					die("Khong ket noi duoc ".$e->getMessage());
				}

			}
			return self::$con;
		}
	}