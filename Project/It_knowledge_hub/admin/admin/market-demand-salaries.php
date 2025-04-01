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
            <!-- Market Demand & Salaries Module -->
            <h2 id="market-demand-salaries" class="mb-4">Market Demand & Salaries Module</h2>
            <form action="add-market-data.php" method="post">
                <div class="form-group">
                    <label for="job-title">Job Title:</label>
                    <input type="text" id="job-title" name="job-title" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label for="market-demand">Market Demand:</label>
                    <input type="number" id="market-demand" name="market-demand" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label for="salary-range">Salary Range:</label>
                    <input type="text" id="salary-range" name="salary-range" class="form-control" required>
                </div>
                
                <button type="submit" class="btn btn-primary">Add Market Data</button>
            </form>
        </div>
    </section>
</div>

<?php
include_once('footer.php');
?>
