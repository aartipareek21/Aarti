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
        <form method="POST" action="" enctype="multipart/form-data">
     <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Add Course Content
            <small>Add Course Content</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Course Content</a></li>
            <li class="active">Add Course Content</li>
          </ol>
    <div class="container mt-5">
        <h2 class="text-center">Add Course Content</h2>
        <form method="POST" enctype="multipart/form-data">
            <!-- Course ID -->
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

                <!-- Content Title -->
                <div class="form-group">
                    <label for="content_title">Content Title</label>
                    <input type="text" value="<?php echo $fetch->content_title ?> id="content_title" name="content_title" class="form-control" required>
                </div>

                <!-- Content Description -->
                <div class="form-group">
                    <label for="content_description">Content Description</label>
                    <textarea id="content_description" name="content_description" class="form-control" rows="4" required><?php echo isset($fetch->content_description) ? htmlspecialchars($fetch->content_description, ENT_QUOTES, 'UTF-8') : ''; ?></textarea>
                </div>

                <!-- Syntax -->
                <div class="form-group">
                    <label for="syntax">Syntax</label>
                    <textarea id="syntax" name="syntax" class="form-control" rows="4"><?php echo isset($fetch->syntax) ? htmlspecialchars($fetch->syntax, ENT_QUOTES, 'UTF-8') : ''; ?></textarea>
                </div>

                <!-- Example Code -->
                <div class="form-group">
                    <label for="example_code">Example Code</label>
                    <textarea id="example_code" name="example_code" class="form-control" rows="6"><?php echo isset($fetch->example_code) ? htmlspecialchars($fetch->example_code, ENT_QUOTES, 'UTF-8') : ''; ?></textarea>
                </div>

                <!-- Detailed Information -->
                <div class="form-group">
                    <label for="detailed_info">Detailed Information</label>
                    <textarea id="detailed_info" name="detailed_info" class="form-control" rows="8"><?php echo isset($fetch->detailed_info) ? htmlspecialchars($fetch->detailed_info, ENT_QUOTES, 'UTF-8') : ''; ?></textarea>
                </div>
				
				 <div class="form-group">
                    <label for="Market_Demand">Market Demand</label>
                    <textarea id="Market_Demand" name="Market_Demand" class="form-control" rows="8"><?php echo isset($fetch->Market_Demand) ? htmlspecialchars($fetch->Market_Demand, ENT_QUOTES, 'UTF-8') : ''; ?></textarea>
                </div>
				
				 <div class="form-group">
                    <label for="Career_Opportunities">Career Opportunities</label>
                    <textarea id="Career_Opportunities" name="Career_Opportunities" class="form-control" rows="8"><?php echo isset($fetch->Career_Opportunities) ? htmlspecialchars($fetch->Career_Opportunities, ENT_QUOTES, 'UTF-8') : ''; ?></textarea>
                </div>

                 <div class="form-group">
            <label for="img">Image:</label>
            <input type="file" name="img" class="form-control" >
          </div>

                <!-- Submit Button -->
                 <button type="submit" name="save" class="btn btn-primary">Save</button>

            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php
include_once('footer.php');
?>
