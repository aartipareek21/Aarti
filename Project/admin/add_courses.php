<?php
include_once('header.php');
?>
<html>
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
    <h2>Add Course</h2>
    <form action="" method="POST">
        <div class="form-group">
            <label for="course_name">Course Name:</label>
            <input type="text" id="course_name" name="course_name" class="form-control" required>
        </div>
        
        <div class="form-group">
                      <label>Select Categories</label>
                      <select name="category_id" class="form-control">
                        <option value="">Select Categories</option>
                        <?php 
                        foreach($cate_arr as $data)
                        {
                            ?>
                            <option value="<?php echo $data->category_id?>"><?php echo $data->category_name?></option>
                            <?php
                        }
                        ?>
                      </select>
                    </div>
        
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea id="description" name="description" class="form-control" rows="3" required></textarea>
        </div>
        
        <button type="submit" name="submit" class="btn btn-primary">Add Course</button>
    </form>
</div>
</section>
</div>
</html>

<?php
include_once('footer.php');
?>
