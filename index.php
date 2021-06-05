<?php
    
    include('includes/class-autoload.inc.php');
    require_once('templates/header.php');

?>


<!-- Button trigger modal -->
<div class="text-center">
    <button type="button" class="btn btn-primary mt-5" data-toggle="modal" data-target="#addPostModal">
    Create Post
    </button>
</div>


<!-- Modal -->
<div class="modal fade" id="addPostModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
            <div class="modal-body">
                <form action="post.process.php" method="POST">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="postTitle" id="title" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea type="text" name="postContent" id="content" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="author">Author</label>
                        <input type="text" name="postAuthor" id="author" class="form-control" required>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">Add Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Print post -->

<div class="row">
    <?php $post = new Posts(); ?>
    <?php if($post->getPost()): ?>
        <?php foreach($post->getPost() as $post): ?>
                <div class="col-md-6 mt-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?= $post['title']; ?></h5>
                            <p class="card-text"><?= $post['body']; ?></p>
                            <h6 class="card-subtitle text-muted text-right">Auothor: <?= $post['author']; ?></h6>
                            <a href="editForm.php?id=<?= $post['id']; ?>" class="btn btn-warning">Edit</a>
                            <a href="post.process.php?id=<?= $post['id']; ?>&send=del" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
        <?php endforeach; ?>
    <?php else: ?>
    <p class="mx-auto mt-5">No posts Available</p>
    <?php endif; ?>
</div>


<?php
    require_once('templates/footer.php');
?>
