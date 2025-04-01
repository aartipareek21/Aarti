<?php
    include_once('header.php');
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Topic</title>
    
</head>
<body>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Add Course Topic
            <small>Add Course Topic</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Course Topic</a></li>
            <li class="active">Add Course Topic</li>
          </ol>
    <div class="container mt-5">
        <h2 class="text-center">Course Topic</h2>
        <table id="mytable" class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Topic ID</th>
                    <th scope="col">Course ID</th>
                    <th scope="col">Content Title</th>
                    <th scope="col">Content </th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example row 1 -->
                <?php
                                foreach($lessons_Arr as $data)
                                {
                    ?>
                <tr>
                    <td><?php echo $data->topic_id ?></td>
                    <td><?php echo $data->course_id ?></td>
                    <td><?php echo $data->topic_title ?></td>
                    <td><?php echo $data->topic_content ?></td>
               
                    <td>
					<a href="edit_content?editbtn=<?php echo $data->content_id?>" class="btn btn-primary">Edit</a>
                        <a href="delete?del_content=<?php echo $data->content_id ?>" class="btn btn-warning btn-sm">delete</a>
                     
                    </td>
                </tr>
                
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
        </div>
<?php
include_once('footer.php');
?>
