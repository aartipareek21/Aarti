<?php
include_once('header.php')
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
            Add News Updates
            <small>Add News Updates</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">News Updates</a></li>
            <li class="active">Add News Updates</li>
          </ol>

	<div class="container mt-5">
    <h2>Add New Video</h2>
    <form action="" method="POST">
   <label for="headline">Headline:</label><br>
        <input type="text" id="headline" name="headline" required><br><br>

        <label for="summary">Summary:</label><br>
        <textarea id="summary" name="summary" rows="4" cols="50" required></textarea><br><br>

        <label for="source_url">Source URL:</label><br>
        <input type="url" id="source_url" name="source_url" required><br><br>

        <label for="published_date">Published Date:</label><br>
        <input type="date" id="published_date" name="published_date" required><br><br>

        <label for="category_id">Category:</label><br>
         <select name="category_id" class="form-control">
                        <option value="">Select Categories</option>
                        <?php 
                        foreach($categories_arr as $data)
                        {
                            ?>
                            <option value="<?php echo $data->category_id?>"><?php echo $data->category_name?></option>
                            <?php
                        }
                        ?>
                      </select><br><br>

        <div class="form-group">
                    <label>Select courses</label>
                    <select name="course_id" class="form-control" required>
                        <option value="">Select courses</option>
                        <?php 
                        foreach($courses_arr as $data) {
                            echo "<option value='{$data->course_id}'>{$data->course_name}</option>";
                        }
                        ?>
                    </select>
                </div><br><br>

	</body>
	<html>
    </html>
</section>
</div>

    <?php
include_once('footer.php');
?>
