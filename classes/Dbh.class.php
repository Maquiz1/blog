<?php
    class Dbh {
        private $servername = "localhost";
        private $username = "root";
        private $password = "Data@2020";
        private $dbname = "blog";

        
        public function connect(){   

            try {
                $dns = "mysql:host=".$this->servername.";dbname=".$this->dbname;
                $conn = new PDO($dns,$this->username, $this->password);

                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $conn;

                } catch(PDOException $e) {
                  echo "Connection failed: " . $e->getMessage();
                }
        } 
   }
?>