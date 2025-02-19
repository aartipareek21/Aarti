<?php
include_once('header.php');
?>

<html>
<head><title>Add Categories</title></head>
<body>
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
        <h2>Add Category</h2>
        
        <!-- Form for Adding Category -->
        <form method="POST" enctype="multipart/form-data">
        
          <div class="form-group">
            <label for="category_name">Category Name:</label>
            <input type="text" value="<?php echo $fetch->category_name?>" id="category_name" name="category_name" class="form-control" required>
          </div>
          
          <div class="form-group">
            <label for="description">Description:</label>
            <textarea id="description"  name="description" class="form-control" rows="3"><?php echo isset($fetch->description) ? htmlspecialchars($fetch->description, ENT_QUOTES, 'UTF-8') : ''; ?></textarea>
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
</body>
</html>

<?php
include_once('footer.php');
?>
