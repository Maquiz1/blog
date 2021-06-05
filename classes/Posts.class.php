<?php 
    class Posts extends Dbh {

        public function getPost() {
            
            try {  
                $stmt = $this->connect()->prepare("SELECT * FROM posts");
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


        public function InputData($title,$body,$author){
            try {
                $stmt = $this->connect()->prepare("INSERT INTO posts (title, body, author) VALUES (?,?,?)");
                $stmt->execute([$title,$body,$author]);

              } catch(PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
              }
              
              $conn = null;

        }


        public function editPost($id){
            
            try {  
                $stmt = $this->connect()->prepare("SELECT * FROM posts WHERE id = ?");
                // $stmt->bindParam(':id', $id);
                $stmt->execute([$id]);
           
                // set the resulting array to associative
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                return $result;
  
              } catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
              }
              $conn = null; 

        }


        public function updatePost($title,$content,$author,$id){

            try {
                $stmt = $this->connect()->prepare("UPDATE posts SET title = ?, body = ?, author = ? WHERE id = ?");
                // $stmt->bindParam(':id', $id);
                $stmt->execute([$title,$content,$author,$id]);
           
                // set the resulting array to associative
                $result = $stmt->fetch(PDO::FETCH_ASSOC);


            } catch(PDOException $e) {
              echo "Error: " . $e->getMessage();
            }
            $conn = null;
            
            }


            public function delPost($id){

                try {
                    $stmt = $this->connect()->prepare("DELETE FROM posts WHERE id = ?");
                    // $stmt->bindParam(':id', $id);
                    $stmt->execute([$id]);
               
                    // set the resulting array to associative
                    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
    
                } catch(PDOException $e) {
                  echo "Error: " . $e->getMessage();
                }
                $conn = null;
                
                }


        public function createTable(){

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              
                // sql to create table
                $sql = "CREATE TABLE MyGuests (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                firstname VARCHAR(30) NOT NULL,
                lastname VARCHAR(30) NOT NULL,
                email VARCHAR(50),
                reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
                )";
              
                // use exec() because no results are returned
                $conn->exec($sql);
                echo "Table MyGuests created successfully";
              } catch(PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
              }
              
              $conn = null;

        }

        
    }
?>