<?php
    
    include('includes/class-autoload.inc.php');

    $post = new Posts();

    if(isset($_POST['submit'])){
        $title      = $_POST['postTitle'];
        $content    = $_POST['postContent'];
        $author     = $_POST['postAuthor'];

        $post->InputData($title,$content,$author);

        header("Location: {$_SERVER['HTTP_REFERER']}");

    }elseif(isset($_POST['update'])){
            $id         = $_GET['id'];  
            $title      = $_POST['postTitle'];
            $content    = $_POST['postContent'];
            $author     = $_POST['postAuthor'];

            $post->updatePost($title,$content,$author,$id);

            header("Location: {$_SERVER['HTTP_ORIGIN']}/OOP_PDO");
    
        }elseif($_GET['send']==='del'){
            $id = $_GET['id'];

            $post->delPost($id);

            header("Location: {$_SERVER['HTTP_ORIGIN']}/OOP_PDO");
    

    }

?>
