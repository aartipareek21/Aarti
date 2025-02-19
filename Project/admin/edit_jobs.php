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
                         <?php 
        if (!empty($courses_arr)) {
            foreach ($courses_arr as $data) {
                ?>
                <option value="<?php echo $data->course_id; ?>" 
                        <?php echo (isset($fetch->course_id) && $fetch->course_id == $data->course_id) ? "selected" : ""; ?>>
                    <?php echo htmlspecialchars($data->course_name, ENT_QUOTES, 'UTF-8'); ?>
                </option>
                <?php
            }
        } else {
            echo "<option value=''>No Categories Available</option>";
        }
        ?>
                      </select>
                    </div>

        <div class="form-group">
            <label for="company_name">Company Name:</label>
            <input type="text" value="<?php echo $fetch->company_name?> id="company_name" name="company_name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="job_title">Job Title:</label>
            <input type="text" value="<?php echo $fetch->job_title?> id="job_title" name="job_title" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="job_description">Job Description:</label>
            <textarea id="job_description" name="job_description" class="form-control" rows="4" required><?php echo isset($fetch->job_description) ? htmlspecialchars($fetch->job_description, ENT_QUOTES, 'UTF-8') : ''; ?></textarea>
        </div>

      <button type="submit" name="save" class="btn btn-primary">Save</button>
    </form>
</div>
</section>
</div>
</body>
</html>
<?php
include_once('footer.php');
?>
