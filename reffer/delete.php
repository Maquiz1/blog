<?php

    
    require 'db.php';

    $id = $_GET['id'];
    $sql = 'DELETE FROM people WHERE id=:id';
    $statement = $connection->prepare($sql);
    $results = $statement->execute([':id'=> $id]);
    $message;         
    if($results){          
            header("Location: index.php");
            $message = 'data Updated successfully';
    }
        
?>
