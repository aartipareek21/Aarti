<?php
include_once('header.php');
?>
 <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Manage category
            <small>Manage category</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">category</a></li>
            <li class="active">Manage category</li>
          </ol>
        </section>
<html>
<head>
    <title>Categories</title>
  
</head>
<body>
  <div class="container mt-5">
    <h1 class="text-center mb-4">Categories</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="thead-light">
                <tr>
                    <th>category id</th>
                    <th>Category Name</th>
                    <th>Description</th>
					<th>image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Sample Data -->
                <?php
                    foreach($cate_arr as $data)
                    {
                    ?>
                <tr>
                    <td><?php echo $data->category_id?></td>
                    <td><?php echo $data->category_name?></td>
                    <td><?php echo $data->description?></td>
                    <td><img src="upload/categories/<?php echo $data->img?>" width="50px"/></td>
                    <td>
					     <a href="edit_category?editbtn=<?php echo $data->category_id?>" class="btn btn-primary">Edit</a>
                        <a href="delete?del_categories=<?php echo $data->category_id?>" class="btn btn-danger">Delete</a>
                        
                    </td>
                </tr>
               
                <!-- Add more rows as needed -->
                 <?php
                    }
                   ?> 
            </tbody>
        </table>
    </div>
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
