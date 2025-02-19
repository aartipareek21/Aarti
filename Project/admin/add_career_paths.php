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
                    
                    <!-- Select Course (Foreign Key) -->
                    <div class="form-group">
                        <label>Select Course</label>
                        <select name="course_id" class="form-control" required>
                            <option value="">Select Course</option>
                            <?php 
                            foreach($courses_arr as $data) {
                                echo "<option value='{$data->course_id}'>{$data->course_name}</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <!-- Career Path Title -->
                    <div class="form-group">
                        <label for="title">Career Path Title:</label>
                        <input type="text" id="title" name="title" class="form-control" required>
                    </div>

                    <!-- Description -->
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea id="description" name="description" class="form-control" required></textarea>
                    </div>

                    <!-- Required Skills -->
                    <div class="form-group">
                        <label for="skills">Required Skills (Comma-separated):</label>
                        <input type="text" id="skills" name="skills" class="form-control" required>
                    </div>

                    <!-- Job Roles -->
                    <div class="form-group">
                        <label for="job_roles">Job Roles (Comma-separated):</label>
                        <input type="text" id="job_roles" name="job_roles" class="form-control" required>
                    </div>

                    <!-- Salary Range -->
                    <div class="form-group">
                        <label for="salary_range">Salary Range:</label>
                        <input type="text" id="salary_range" name="salary_range" class="form-control">
                    </div>

                    <!-- Market Demand -->
                    <div class="form-group">
                        <label for="market_demand">Market Demand:</label>
                        <textarea id="market_demand" name="market_demand" class="form-control"></textarea>
                    </div>

                    <!-- Learning Resources -->
                    <div class="form-group">
                        <label for="learning_resources">Learning Resources (Comma-separated URLs):</label>
                        <input type="text" id="learning_resources" name="learning_resources" class="form-control">
                    </div>

                    <!-- Upload Career Path PDF -->
                    <div class="form-group">
                        <label for="career_pdf">Upload Career Path PDF:</label>
                        <input type="file" id="career_pdf" name="career_pdf" class="form-control-file" accept=".pdf">
                    </div>

                    <!-- Mock Test Available -->
                    <div class="form-group">
                        <label for="mock_test_available">Mock Test Available:</label>
                        <select id="mock_test_available" name="mock_test_available" class="form-control" required>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" name="submit" class="btn btn-primary">Add Career Path</button>

                </form>
            </div>
        </section>
    </div>
</body>
</html>

<?php
include_once('footer.php');
?>
