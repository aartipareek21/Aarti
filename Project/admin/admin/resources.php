<?php
include_once('header.php');
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Resources Module</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Product</a></li>
            <li class="active">Add Product</li>
        </ol>
    </section>
    
    <section class="content">
        <div class="container">
            <h2 id="resources" class="mb-4">Add Resource</h2>
            <form action="add-resources.php" method="post">
                <div class="form-group">
                    <label for="resource-title">Resource Title:</label>
                    <input type="text" id="resource-title" name="resource-title" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label for="resource-type">Resource Type:</label>
                    <select id="resource-type" name="resource-type" class="form-control">
                        <option value="tutorial">Tutorial</option>
                        <option value="course">Course</option>
                        <option value="book">Book</option>
                        <option value="article">Article</option>
                        <option value="certification">Certification</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="resource-link">Resource Link:</label>
                    <input type="url" id="resource-link" name="resource-link" class="form-control" required>
                </div>
                
                <button type="submit" class="btn btn-primary">Add Resource</button>
            </form>
        </div>
    </section>
</div>

<?php
include_once('footer.php');
?>
