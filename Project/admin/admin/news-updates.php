<?php
include_once('header.php');
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>News Updates Module</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Product</a></li>
            <li class="active">Add News</li>
        </ol>
    </section>
    
    <section class="content">
        <div class="container">
            <h2 id="news-updates" class="mb-4">Add News Update</h2>
            <form action="add-news.php" method="post">
                <div class="form-group">
                    <label for="news-title">News Title:</label>
                    <input type="text" id="news-title" name="news-title" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label for="news-content">Content:</label>
                    <textarea id="news-content" name="news-content" class="form-control" rows="5" required></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary">Add News</button>
            </form>
        </div>
    </section>
</div>

<?php
include_once('footer.php');
?>
