<?php

    class queryData{

        private $servername = "localhost";
        private $username = "root";
        private $password = "Data@2020";
        private $dbname = "blog";



        public function connection(){             
          try {
                $dns = "mysql:host=".$this->servername.";dbname=".$this->dbname;
                $conn = new PDO($dns,$this->username, $this->password);

                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

              echo "Connected successfully";

              } catch(PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
              }     

        }



        public function InputData(){
            try {
                $dns = "mysql:host=".$this->servername.";dbname=".$this->dbname;
                $conn = new PDO($dns,$this->username, $this->password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
                $sql = "INSERT INTMyGuestsO posts (title, body, author, date_created) 
                VALUES ('Post Three','THis is Post Three','Joseph Juma', now())";
                // use exec() because no results are returned
                $conn->exec($sql);
                echo "New record created successfully";
              } catch(PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
              }
              
              $conn = null;

        }

        public function getData(){

            try {
              $dns = "mysql:host=".$this->servername.";dbname=".$this->dbname;
              $conn = new PDO($dns,$this->username, $this->password);
              // set the PDO error mode to exception
              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION,PDO::FETCH_ASSOC);

              $stmt = $conn->prepare("SELECT * FROM posts");
              $stmt->execute();

              // set the resulting array to associative
              $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
              while($result){
                return $result;
              }

            } catch(PDOException $e) {
              echo "Error: " . $e->getMessage();
            }
            $conn = null;
            
            }

        public function getLastID(){
            try {
                $dns = "mysql:host=".$this->servername.";dbname=".$this->dbname;
                $conn = new PDO($dns,$this->username, $this->password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "INSERT INTO posts (title, body, author, date_created) 
                VALUES ('Post Three','THis is Post Three','Joseph Juma', now())";
                // use exec() because no results are returned
                $conn->exec($sql);
                $last_id = $conn->lastInsertId();
                echo "New record created successfully. Last inserted ID is: " . $last_id;
              } catch(PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
              }
              
              $conn = null;
        }


    }



?>