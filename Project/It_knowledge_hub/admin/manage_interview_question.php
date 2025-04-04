<?php
    include_once('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interview Questions</title>
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
        <h2 class="text-center">Interview Questions</h2>
        <table id="mytable" class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Question ID</th>
                    <th scope="col">Course ID</th>
                    <th scope="col">Question PDF</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example row 1 -->
                <?php
                foreach($Question_arr as $data)
                {
                    ?>
                
                <tr>
                    <td><?php echo $data->question_id ?></td>
                    <td><?php echo $data->course_id ?></td>
                    <td><a href="uploads/questions/" target="_blank"><?php echo $data->question_pdf ?></a></td>
                    <td>
                        <a href="edit_questions?editbtn=<?php echo $data->question_id?>" class="btn btn-primary">Edit</a>    
                       <a href="delete?del_interview=<?php echo $data->question_id ?>" class="btn btn-danger">Delete</a>
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
</section>
</div>
<?php
include_once('footer.php');
?>

