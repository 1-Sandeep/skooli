<?php
	
	/**
	 * 
	 * This file Connectivity.class.php is the main database connection file
	 * (c) Skooli <support@skooli.com>
	 * 
	*/

    class DBConnection {

		// connection
        public $conn;

		// class initilization i.e. constructor
        public function __construct () {
			
        }

		/**
		 * @param {String}	$sql	SQL for query
		 * @return {Object}	$result		return false on error or Object returned from database query
		 * This method is used to query two or more arrays of data from database
		*/

        public static function queryAll ($sql) {
			$conn = self::connectivity();
			
			$stmt = $conn->prepare($sql);
			$stmt->execute();
			$stmt->setFetchMode(PDO::FETCH_OBJ);
			$result = $stmt->fetchAll();
			
			return $result;					
		}

		/**
		 * @param {String}	$sql	SQL for query
		 * @return {Object}	$result		return false on error or Object returned from database query
		 * This method is used to query single column from the table
		*/

		public static function query ($sql) {
			$conn = self::connectivity();
			
			$stmt = $conn->prepare($sql);
			$stmt->execute();
			$result = $stmt->fetch(PDO::FETCH_OBJ);
			
			return $result;	
		}

		/**
		 * @param {String}	$sql	SQL for query
		 * @return {Object}	$count		return total column count on the query
		 * This method is used to query total count on the request 
		*/
		
		public static function countQuery ($sql) {
			$conn = self::connectivity();

			$stmt = $conn->prepare($sql);
			$stmt->execute();
			$count = $stmt->rowCount();

			return $count;
		}

		/**
		 * @param {String}	$sql	SQL for query
		 * @return {Boolen}		return true on success false on error
		 * This method is used to upadte data to table 
		*/
		
		public static function updateQuery ($sql) {
			$conn = self::connectivity();
			return $conn->exec($sql);
		}

		/**
		 * This method is used to connect the database
		 * Hostname, Database Name, Port, Username and Password are the custom super global variables
		 * It will connect and return true on success
		*/
		
		public static function connectivity () {
			
			$host = DB_HOST;
			$dbname = DB_NAME;
            $user = DB_USER;
            $password = DB_PASS;

			try {
				$conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}catch (PDOException $e) {
				echo "Connection Failed: ". $e -> getMessage();	
				return false;
			}
			
			return $conn;
        }
        
    }

?>