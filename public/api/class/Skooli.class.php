<?php


    class Skooli extends DBConnection {

		// construct method
        public function __construct () {
			
        }

		// create unique ID for differnt users
        public function CreateUniqueID (string $type) {
            
            $init = "PST";
            if ($type == "user") {
                $init = 'USR';
            }else if ($type == "teacher") {
				$init = 'THR';
			}	

            // now create the ID
            $unique = bin2hex(random_bytes(5));

            // return random id
            return strtoupper ($init. (string) $unique);

        }
        
		public function ValidateUserSchema (array $schema, string $method) {	
			
			// pagemethod
			if ($schema['requested_method'] != $method) return false;

			// check if requsted user is loged in
			if (!$schema['token']) return false;

			// now check the token if listed on user database
            return $this->reteriveUserInformation ($schema['token'], $schema['user']);
		}

		// reterive owner id and user id from token
		public function reteriveUserInformation ($token) {
            // query
            $SQL = "SELECT *
                    FROM users
                    WHERE TOKEN = '$token'";
					$user = parent::query($SQL);
					if ($user === false) return false;
					
                    $RETURNDATA = array (
                        'user'		=> $user->USERID,
                        'firstname'	=> $user->FNAME,
						'lastname' => $user->LNAME,
                        'email'		=> $user->EMAIL,
                    );

					return $RETURNDATA;
		}

		// login check
		public function isSkooliUser ($email) {
			$SQL = "SELECT *
					FROM users
					WHERE EMAIL = '$email'";
			return parent::query($SQL);
		}

		// update token
		public function UpdateLoginToken ($userid, $token) {
			$SQL = "UPDATE users
					SET TOKEN = '$token'
					WHERE USERID = '$userid'";
			return parent::updateQuery($SQL);
		}

		// duplicate user check
		public function isDuplicateUser ($email) {
			$SQL = "SELECT *
					FROM users
					WHERE EMAIL = '$email'";
			$user = parent::query($SQL);
			if ($user == true) return true;
			return false;
		}

		// create new user
		public function CreateNewUser ($firstname, $lastname, $email, $mobile, $hashed_password, $token) {
			// user id
			$userid = $this->CreateUniqueID ('user');

			$SQL = "INSERT INTO `users` (`ID`, `USERID`, `FNAME`, `LNAME`, `AVATAR`, `EMAIL`, `MOBILE`, `PASSWORD`, `TOKEN`) VALUES ('', '$userid', '$firstname', '$lastname', '', '$email', '$mobile', '$hashed_password', '$token');";

			parent::updateQuery($SQL);

			// return userid
			return $userid;
		}

		// create teacher
		public function CreateTeacher ($userid, $subjectid) {
			$teacherid = $this->CreateUniqueID ('teacher');

			$SQL = "INSERT INTO `teacher` (`ID`, `USERID`, `TEACHERID`, `SUBJECT`) VALUES ('', '$userid', '$teacherid', '$subjectid');";
			parent::updateQuery($SQL);

			return $teacherid;
		}

		// list users
		public function ListAllUsers () {
			$SQL = "SELECT *
					FROM users
					ORDER BY ID DESC";
			return parent::queryAll($SQL);
		}

		/**
		 * @param {Date} $previousTime previous datestamp to calculate the human time differences
		 * 2019-05-13 4:02:15 and 2019-05-13 4:04:15 => 2 minutes
		 * 
		*/

		public function humanTimeDifference ($previousTime) {
			
			$time = strtotime($previousTime);
			$currentTime = date ('Y-m-d h:i:s');
			$currentTime = strtotime($currentTime);
			
			$time = $currentTime - $time; // to get the time since that moment
			$time = ($time<1)? 1 : $time;
		
			$tokens = array (
				31536000 => 'Year',
				2592000 => 'Month',
				604800 => 'Week',
				86400 => 'Day',
				3600 => 'Hour',
				60 => 'Minute',
				1 => 'Second'
			);

			foreach ($tokens as $unit => $text) {
				if ($time < $unit) continue;
				$numberOfUnits = floor($time / $unit);
				return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'s':'')." ago";
			}
		}


    }

	$Skooli = new Skooli;

?>