<?php
include_once('header.php');
?>
<html>
<head>
    <title></title>
    

</head>
<body>
    <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Add Categories
            <small>Add Categories</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Categories</a></li>
            <li class="active">Add Categories</li>
          </ol>

          <div class="container mt-5">
    <h2>Add New Job Listing</h2>
    <form action="" method="POST">
      <div class="form-group">
                      <label>Select Categories</label>
                      <select name="course_id" class="form-control">
                        <option value="">Select Categories</option>
                        <?php 
                        foreach($courses_arr as $data)
                        {
                            ?>
                            <option value="<?php echo $data->course_id?>"><?php echo $data->course_name?></option>
                            <?php
                        }
                        ?>
                      </select>
                    </div>

        <div class="form-group">
            <label for="company_name">Company Name:</label>
            <input type="text" id="company_name" name="company_name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="job_title">Job Title:</label>
            <input type="text" id="job_title" name="job_title" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="job_description">Job Description:</label>
            <textarea id="job_description" name="job_description" class="form-control" rows="4" required></textarea>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Add Job</button>
    </form>
</div>
</section>
</div>
</body>
</html>
<?php
include_once('footer.php');
?>
