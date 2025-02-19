<?php
    include_once('header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Videos</title>
    
</head>
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
        <h2 class="text-center">Course Videos</h2>
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Video ID</th>
                    <th scope="col">Course ID</th>
                    <th scope="col">Video Title</th>
                    <th scope="col">Video URL</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example row 1 -->
                <?php
                foreach($vedio_arr as $data)
                {
                    ?>
                <tr>
                    <td><?php echo $data->video_id ?></td>
                    <td><?php echo $data->course_id ?></td>
                    <td><?php echo $data->video_title ?></td>
                    <td><a href="https://www.example.com/html_crash_course" target="_blank"><?php echo $data->video_url ?></a></td>
                    <td>
                        <a href="edit_video?editbtn=<?php echo $data->video_id?>" class="btn btn-primary">Edit</a>
                          <a href="delete?del_vedio=<?php echo $data->video_id ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                
<?php
}?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
</section>
</div>
<?php
include_once('footer.php');
?>

