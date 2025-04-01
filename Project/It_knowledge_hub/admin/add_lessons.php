<?php
    include_once('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Courses Topic</title>
</head>
<body>
    <div class="content-wrapper">
        <!-- Page Header -->
        <section class="content-header">
            <h1>Add Courses Topic</h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Courses Topic</a></li>
                <li class="active">Add Courses Topic</li>
            </ol>
        </section>

        <!-- Add Course Content Form -->
        <div class="form-group">
        <h2 class="text-center">Add Courses Topic</h2>
        <form method="POST" enctype="multipart/form-data">
    <label>Select Categories</label>
    <select name="course_id" class="form-control" required>
        <option value="">Select Categories</option>
        <?php 
        if (!empty($courses_arr)) {
            foreach($courses_arr as $data) {
                echo "<option value='{$data->course_id}'>{$data->course_name}</option>";
            }
        } else {
            echo "<option value=''>No Courses Available</option>"; // ✅ Agar data na ho toh message
        }
        ?>
    </select>
</div>

                <!-- Content Title -->
                <label for="topic_title">Topic Title:</label>
    <input type="text" name="topic_title" required>

    <label for="topic_content">Topic Content:</label>
    <textarea name="topic_content" rows="5" required></textarea>

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
