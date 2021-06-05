<?php
    
    include('includes/class-autoload.inc.php');
    require_once('templates/header.php');

    $post   = new Posts();  
    $posts  = $post->editPost($_GET['id']);
    $id     = $_GET['id'];  
    $title  = $posts['title'];
    $body   = $posts['body'];
    $author = $posts['author'];

?>


<div class="text-center my-4">
    <h2>Edit Post</h2>
</div>

<div class="row">
    <div class="col-md-7 mx-auto">
        <form action="post.process.php?id=<?= $id; ?>" method="POST">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="postTitle" id="title" value="<?= $title; ?>" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea type="text" name="postContent" id="content" class="form-control" required><?= $body; ?></textarea>
            </div>
            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" name="postAuthor" id="author" value="<?= $author; ?>" class="form-control" required>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="update" class="btn btn-primary">Edit Post</button>
            </div>
        </form>
    </div>
</div>


<?php
    require_once('templates/footer.php');
?>
