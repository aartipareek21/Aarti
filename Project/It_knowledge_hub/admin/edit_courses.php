<?php
include_once('header.php');
?>
<html>
  <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Add Courses
            <small>Add Courses</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Courses</a></li>
            <li class="active">Add Courses</li>
          </ol>
<div class="container mt-5">
    <h2>Add Course</h2>
    <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="course_name">Course Name:</label>
            <input type="text" id="course_name" value="<?php echo $fetch->course_name?>" name="course_name" class="form-control" required>
        </div>
        
        <div class="form-group">
    <label for="category_id">Select Categories</label>
    <select id="category_id" name="category_id" class="form-control" required>
        <option value="">Select Categories</option>
        <?php 
        if (!empty($cate_arr)) {
            foreach ($cate_arr as $data) {
                ?>
                <option value="<?php echo $data->category_id; ?>" 
                        <?php echo (isset($fetch->category_id) && $fetch->category_id == $data->category_id) ? "selected" : ""; ?>>
                    <?php echo htmlspecialchars($data->category_name, ENT_QUOTES, 'UTF-8'); ?>
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
            <label for="description">Description:</label>
            <textarea id="description"  name="description" class="form-control" rows="3" required><?php echo isset($fetch->description) ? htmlspecialchars($fetch->description, ENT_QUOTES, 'UTF-8') : ''; ?></textarea>
        </div>
        
          <div class="form-group">
            <label for="img">Image:</label>
            <input type="file" name="img" class="form-control" required>
			<img src="upload/categories/<?php echo $fetch->img?>" width="50px"/>
          </div>
         <button type="submit" name="save" class="btn btn-primary">Save</button>
    </form>
</div>
</section>
</div>
</html>

<?php
include_once('footer.php');
?>
