<?php
include_once('header.php');
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Career Paths Module</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Product</a></li>
            <li class="active">Add Product</li>
        </ol>
    </section>
    
    <section class="content">
        <div class="container">
            <h2 id="career-paths" class="mb-4">Add Career Path</h2>
            <form action="add-career-path.php" method="post">
                <div class="form-group">
                    <label for="career-title">Career Title:</label>
                    <input type="text" id="career-title" name="career-title" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label for="skills-required">Skills Required:</label>
                    <textarea id="skills-required" name="skills-required" class="form-control" rows="3"></textarea>
                </div>
                
                <div class="form-group">
                    <label for="job-roles">Typical Job Roles:</label>
                    <textarea id="job-roles" name="job-roles" class="form-control" rows="3"></textarea>
                </div>
                
                <div class="form-group">
                    <label for="progression">Progression Path:</label>
                    <textarea id="progression" name="progression" class="form-control" rows="3"></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary">Add Career Path</button>
            </form>
        </div>
    </section>
</div>

<?php
include_once('footer.php');
?>
