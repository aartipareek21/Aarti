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
            Add Categories
            <small>Add Categories</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Categories</a></li>
            <li class="active">Add Categories</li>
          </ol>
    <div class="container mt-5">
        <h2 class="text-center">Interview Questions</h2>
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
               <tr>
                <th scope="col">Contact ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Message</th>
                <th scope="col">Contact Date</th>
            </tr>
            </thead>
            <tbody>
                <!-- Example row 1 -->
                <?php
                foreach($inquiry_array as $data)
                {
                    ?>
                
                <tr>
                    <td><?php echo $data->contact_id ?></td>
                    <td><?php echo $data->name ?></td>
                    <td><?php echo $data->email ?></td>
                    <td><?php echo $data->message ?></td>
                    <td><?php echo $data->contact_date ?></td>
                    
                    <td>
                        <a href="delete?del_contact_us=<?php echo $data->contact_id ?>" class="btn btn-danger btn-sm">Delete</a>
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

