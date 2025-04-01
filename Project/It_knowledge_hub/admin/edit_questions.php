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
            Add Interview Questions
            <small>Add Interview Questions</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Interview Questions</a></li>
            <li class="active">Add Interview Questions</li>
          </ol>
<div class="container mt-5">
    <h2>Upload Interview Questions</h2>
    <form action="" method="POST" enctype="multipart/form-data">
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
            <label for="question_pdf">Upload Question PDF:</label>
            <input type="file" value="<?php echo $fetch->question_pdf?> id="question_pdf" name="question_pdf" class="form-control-file" accept=".pdf" >
        </div>
		<label for="category">Select Category:</label>
<select id="category" name="category">
    <option value="Numerical Aptitude">Numerical Aptitude</option>
    <option value="Logical Reasoning">Logical Reasoning</option>
    <option value="Verbal Reasoning">Verbal Reasoning</option>
    <option value="Data Interpretation">Data Interpretation</option>
    <option value="Technical Preparation">Technical Preparation</option>
    <option value="Coding - C">Coding - C</option>
    <option value="Coding - C++">Coding - C++</option>
    <option value="Coding - Java">Coding - Java</option>
    <option value="Coding - Python">Coding - Python</option>
    <option value="Coding - PHP">Coding - PHP</option>
</select><br><br>
   
    
    <label for="question">Question:</label>
    <textarea id="question" name="question" ></textarea><br><br>
    
    <label for="answer">Answer:</label>
    <textarea id="answer" name="answer" ></textarea><br><br>
    
    <label for="difficulty">Difficulty:</label>
    <select id="difficulty" name="difficulty" >
        <option value="Easy">Easy</option>
        <option value="Medium">Medium</option>
        <option value="Hard">Hard</option>
    </select><br><br>
    
    <label for="company_specific">Company Specific:</label>
    <input type="text" id="company_specific" name="company_specific"><br><br>
    
    <label for="question_pdf">Upload Question PDF:</label>
    <input type="file" id="question_pdf" name="question_pdf" accept=".pdf" ><br><br>
    
    <label for="mock_test_available">Mock Test Available:</label>
    <select id="mock_test_available" name="mock_test_available" >
        <option value="Yes">Yes</option>
        <option value="No">No</option>
    </select><br><br>
        
        <button type="submit" name="save" class="btn btn-primary">Save</button>
    </form>
</div>
</section></div></body></html>
<?php
include_once('footer.php');
?>
