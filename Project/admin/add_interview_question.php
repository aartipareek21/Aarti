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
    <h2>Upload Interview Questions</h2>
    <form action="" method="POST" enctype="multipart/form-data">
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
            <label for="question_pdf">Upload Question PDF:</label>
            <input type="file" id="question_pdf" name="question_pdf" class="form-control-file" accept=".pdf" required>
        </div>
		

   
    <label for="category">category:</label>
    <textarea id="category" name="category" required></textarea><br><br>
	
    <label for="question">Question:</label>
    <textarea id="question" name="question" required></textarea><br><br>
    
    <label for="answer">Answer:</label>
    <textarea id="answer" name="answer" required></textarea><br><br>
    
    <label for="difficulty">Difficulty:</label>
    <select id="difficulty" name="difficulty" required>
        <option value="Easy">Easy</option>
        <option value="Medium">Medium</option>
        <option value="Hard">Hard</option>
    </select><br><br>
    
    <label for="company_specific">Company Specific:</label>
    <input type="text" id="company_specific" name="company_specific"><br><br>
    
    <label for="question_pdf">Upload Question PDF:</label>
    <input type="file" id="question_pdf" name="question_pdf" accept=".pdf" required><br><br>
    
    <label for="mock_test_available">Mock Test Available:</label>
    <select id="mock_test_available" name="mock_test_available" required>
        <option value="Yes">Yes</option>
        <option value="No">No</option>
    </select><br><br>

        
        <button type="submit" name="submit" class="btn btn-primary">Upload Questions</button>
    </form>
</div>
</section></div></body></html>
<?php
include_once('footer.php');
?>
