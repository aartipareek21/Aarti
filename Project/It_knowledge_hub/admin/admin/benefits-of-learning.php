<?php
include_once('header.php');
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Benefits of Learning Module</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Product</a></li>
            <li class="active">Add Product</li>
        </ol>
    </section>
    
    <section class="content">
        <div class="container">
            <h2 id="benefits-of-learning" class="mb-4">Add Benefits of Learning</h2>
            <form action="add-benefits.php" method="post">
                <div class="form-group">
                    <label for="language-benefits">Programming Language:</label>
                    <input type="text" id="language-benefits" name="language-benefits" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label for="benefits-description">Benefits:</label>
                    <textarea id="benefits-description" name="benefits-description" class="form-control" rows="4"></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary">Add Benefits</button>
            </form>
        </div>
    </section>
</div>

<?php
include_once('footer.php');
?>
