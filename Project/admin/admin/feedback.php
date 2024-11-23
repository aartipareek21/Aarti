<?php
include_once('header.php');
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Feedback Module</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Product</a></li>
            <li class="active">Submit Feedback</li>
        </ol>
    </section>
    
    <section class="content">
        <div class="container">
            <h2 id="feedback" class="mb-4">Submit Your Feedback</h2>
            <form action="add-feedback.php" method="post">
                <div class="form-group">
                    <label for="user-feedback">Feedback:</label>
                    <textarea id="user-feedback" name="user-feedback" class="form-control" rows="5" required></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary">Submit Feedback</button>
            </form>
        </div>
    </section>
</div>

<?php
include_once('footer.php');
?>
