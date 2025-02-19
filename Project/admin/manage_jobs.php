</<?php 
include_once('header.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Listings</title>
    
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
        <h2 class="text-center">Job Listings</h2>
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Job ID</th>
                    <th scope="col">Course ID</th>
                    <th scope="col">Company Name</th>
                    <th scope="col">Job Title</th>
                    <th scope="col">Job Description</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example row 1 -->
                <?php
                foreach($jobs_arr as $data)
                {
                    ?>
                <tr>
                    <td><?php echo $data->job_id ?></td>
                    <td><?php echo $data->course_id ?></td>
                    <td><?php echo $data->company_name ?></td>
                    <td><?php echo $data->job_title ?></td>
                    <td><?php echo $data->job_description ?></td>
                    <td>
                      <a href="edit_jobs?editbtn=<?php echo $data->job_id?>" class="btn btn-primary">Edit</a>                        
						 <a href="delete?del_jobs=<?php echo $data->job_id ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <!-- Example row 2 -->
                <?php
            }
            ?>
              
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
