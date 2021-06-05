<?php

// connect to db
    $servername = "localhost";
    $username = "root";
    $password = "Data@2020";
        
    try {
        $conn = new PDO("mysql:host=$servername;dbname=blog", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
        } catch(PDOException $e) {
          echo "Connection failed: " . $e->getMessage();
        }





// create db

//     $servername = "localhost";
//     $username = "root";
//     $password = "Data@2020";

// try {
//   $conn = new PDO("mysql:host=$servername", $username, $password);
//   // set the PDO error mode to exception
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   $sql = "CREATE DATABASE myDBPDO";
//   // use exec() because no results are returned
//   $conn->exec($sql);
//   echo "Database created successfully<br>";
// } catch(PDOException $e) {
//   echo $sql . "<br>" . $e->getMessage();
// }

// $conn = null;




// create table

    // $servername = "localhost";
    // $username = "root";
    // $password = "Data@2020";
    // $dbname = "blog";

// try {
//   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//   // set the PDO error mode to exception
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//   // sql to create table
//   $sql = "CREATE TABLE MyGuests (
//   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//   firstname VARCHAR(30) NOT NULL,
//   lastname VARCHAR(30) NOT NULL,
//   email VARCHAR(50),
//   reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//   )";

//   // use exec() because no results are returned
//   $conn->exec($sql);
//   echo "Table MyGuests created successfully";
// } catch(PDOException $e) {
//   echo $sql . "<br>" . $e->getMessage();
// }

// $conn = null;




// insert data

// try {
//     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     $sql = "INSERT INTO MyGuests (firstname, lastname, email)
//     VALUES ('John', 'Doe', 'john@example.com')";
//     // use exec() because no results are returned
//     $conn->exec($sql);
//     echo "New record created successfully";
//   } catch(PDOException $e) {
//     echo $sql . "<br>" . $e->getMessage();
//   }
  
//   $conn = null;


  // try {
  //   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  //   // set the PDO error mode to exception
  //   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //   $sql = "INSERT INTO posts (title, body, author, date_created) 
  //   VALUES ('Post Three','THis is Post Three','Joseph Juma', now())";
  //   // use exec() because no results are returned
  //   $conn->exec($sql);
  //   $last_id = $conn->lastInsertId();
  //   echo "New record created successfully. Last inserted ID is: " . $last_id;
  // } catch(PDOException $e) {
  //   echo $sql . "<br>" . $e->getMessage();
  // }
  
  // $conn = null;


?>
