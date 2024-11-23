<?php
    include_once('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Course Content</title>
  
</head>
<body>
    <body>
        <form method="POST" action="">
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
        <h2 class="text-center">Add Course Content</h2>
        <form action="/admin/course_content/add" method="POST" enctype="multipart/form-data">
            <!-- Course ID -->
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
            
            <!-- Content Title -->
            <div class="form-group">
                <label for="content_title">Content Title:</label>
                <input type="text" id="content_title" name="content_title" class="form-control" required>
            </div>
            
            <!-- Content Description -->
            <div class="form-group">
                <label for="content_description">Content Description:</label>
                <textarea id="content_description" name="content_description" class="form-control" rows="4" required></textarea>
            </div>
            
            <!-- Content File Upload -->
            <div class="form-group">
                <label for="content_file">Upload Content File:</label>
                <input type="file" id="content_file" name="content_file" class="form-control-file" required>
            </div>
            
            <!-- Submit Button -->
            <button type="submit" name="submit" class="btn btn-primary">Add Content</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</section>
</div>
</form>
</body>
</html>
</section>
</div>
<?php
include_once('footer.php');
?>

