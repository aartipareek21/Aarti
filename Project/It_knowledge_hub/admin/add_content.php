

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
    <div class="content-wrapper">
        <!-- Page Header -->
        <section class="content-header">
            <h1>Add Course Content</h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#"></a>Course Content</li>
                <li class="active">Add Course Content</li>
            </ol>
        </section>

        <!-- Add Course Content Form -->
        <div class="container mt-5">
            <h2 class="text-center">Add Course Content</h2>
            <form method="POST" enctype="multipart/form-data">
                <!-- Select Categories -->
                <div class="form-group">
                    <label>Select Courses</label>
                    <select name="course_id" class="form-control" required>
                        <option value="">Select Courses</option>
                        <?php 
                        foreach($courses_arr as $data) {
                            echo "<option value='{$data->course_id}'>{$data->course_name}</option>";
                        }
                        ?>
                    </select>
                </div>

                <!-- Content Title -->
                <div class="form-group">
                    <label for="content_title">Content Title</label>
                    <input type="text" id="content_title" name="content_title" class="form-control" required>
                </div>

                <!-- Content Description -->
                <div class="form-group">
                    <label for="content_description">Content Description</label>
                    <textarea id="content_description" name="content_description" class="form-control" rows="4" required></textarea>
                </div>

                <!-- Syntax -->
                <div class="form-group">
                    <label for="syntax">Syntax</label>
                    <textarea id="syntax" name="syntax" class="form-control" rows="4"></textarea>
                </div>

                <!-- Example Code -->
                <div class="form-group">
                    <label for="example_code">Example Code</label>
                    <textarea id="example_code" name="example_code" class="form-control" rows="6"></textarea>
                </div>

                <!-- Detailed Information -->
                <div class="form-group">
                    <label for="detailed_info">Detailed Information</label>
                    <textarea id="detailed_info" name="detailed_info" class="form-control" rows="8"></textarea>
                </div>

                <!-- Market Demand -->
                <div class="form-group">
                    <label for="Market_Demand">Market Demand</label>
                    <textarea id="Market_Demand" name="Market_Demand" class="form-control" rows="8"></textarea>
                </div>

                <!-- Career Opportunities -->
                <div class="form-group">
                    <label for="Career_Opportunities">Career Opportunities</label>
                    <textarea id="Career_Opportunities" name="Career_Opportunities" class="form-control" rows="8"></textarea>
                </div>

                <!-- Image Upload -->
                <div class="form-group">
                    <label for="img">Image:</label>
                    <input type="file" name="img" class="form-control" required>
                </div>

                <!-- Submit Button -->
                <button type="submit" name="submit" class="btn btn-primary">Add Content</button>
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
