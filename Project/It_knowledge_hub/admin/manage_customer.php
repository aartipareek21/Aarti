<?php
    include_once('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
</head>
<body>
     <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Add Customer
            <small>Add Customer</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Customer</a></li>
            <li class="active">Add Customer</li>
          </ol>
    <div class="container mt-5">
        <h2 class="text-center">Customer Data</h2>
        <table id="mytable" class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">customer id </th>
                    <th scope="col">Fisrt name</th>
                    <th scope="col">last name </th>
                    <th scope="col">email </th>
                    <th scope="col">Password </th>
                    <th scope="col">phone_number </th>
                    <th scope="col">signup date </th>

                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example row 1 -->
                <?php
                foreach($cust_arr as $data)
                {
                    ?>
                
                <tr>
                    <td><?php echo $data->customer_id ?></td>
                    <td><?php echo $data->first_name ?></td>
                    <td><?php echo $data->last_name ?></td>
                    <td><?php echo $data->email ?></td>
                    <td><?php echo $data->password ?></td>
                    <td><?php echo $data->phone_number ?></td>
                     <td><?php echo $data->signup_date ?></td>
                    
                    <td>
                        <a href="/admin/questions/edit/1" class="btn btn-warning btn-sm">Edit</a>
                        <a href="delete?del_customer=<?php echo $data->customer_id?>" class="btn btn-danger">Delete</a>
						<a href="status?status_customer=<?php echo $data->customer_id?>" class="btn btn-success"><?php echo $data->status?></a>
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
