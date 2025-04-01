<?php
include_once('header.php');
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Product</a></li>
            <li class="active">Add Product</li>
        </ol>
    </section>
    
    <section class="content">
        <div class="container">
            <h2 id="programming-language" class="mb-4">Add Programming Language</h2>
            <form action="add-language.php" method="post">
                <div class="form-group">
                    <label for="language">Programming Language:</label>
                    <input type="text" id="language" name="language" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea id="description" name="description" class="form-control" rows="3" required></textarea>
                </div>
                
                <div class="form-group">
                    <label for="pros">Pros:</label>
                    <textarea id="pros" name="pros" class="form-control" rows="3"></textarea>
                </div>
                
                <div class="form-group">
                    <label for="cons">Cons:</label>
                    <textarea id="cons" name="cons" class="form-control" rows="3"></textarea>
                </div>
                
                <div class="form-group">
                    <label for="resources">Learning Resources (comma separated):</label>
                    <textarea id="resources" name="resources" class="form-control" rows="3"></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary">Add Language</button>
            </form>
        </div>
    </section>
</div>

<?php
include_once('footer.php');
?>
