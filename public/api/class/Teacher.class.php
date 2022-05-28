<?php

    class Teacher extends Skooli {

        protected string $UserID;
        protected string $Email;
        protected string $FirstName;
        protected string $LastName;


        public function __construct (array $Teacher) {
            
            $this->UserID = $Teacher['user'];
            $this->Email = $Teacher['email'];
            $this->FirstName = $Teacher['firstname'];
            $this->LastName = $Teacher['lastname'];
            
        }

        


    }
?>