<?php
include_once('header.php');
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Forum Module</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Product</a></li>
            <li class="active">Add Post</li>
        </ol>
    </section>
    
    <section class="content">
        <div class="container">
            <h2 id="forum" class="mb-4">Add Forum Post</h2>
            <form action="add-forum-post.php" method="post">
                <div class="form-group">
                    <label for="post-title">Post Title:</label>
                    <input type="text" id="post-title" name="post-title" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label for="post-content">Content:</label>
                    <textarea id="post-content" name="post-content" class="form-control" rows="5" required></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary">Add Post</button>
            </form>
        </div>
    </section>
</div>

<?php
include_once('footer.php');
?>
