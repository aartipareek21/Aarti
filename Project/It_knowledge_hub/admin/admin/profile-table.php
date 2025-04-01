<?php
include_once('header.php');
?>
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
       
           User Authentication form
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Product</a></li>
            <li class="active">Add Product</li>
          </ol>
<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                </div><!-- /.box-header -->
                <div class="box-body">
 <table id="example2" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Bio</th>
            <th>Profile Picture</th>
            <th>Contact Information</th>
            <th>Created At</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <!-- Example Row (Dynamically generated from the database) -->
        <?php
                    foreach($profile_arr as $data)
                    {
                    ?>
        <tr>
            <td><?php echo $data->id ?></td>
            <td><?php echo $data->full_name ?></td>
            <td><?php echo $data->bio ?></td>
            <td><img src="https://example.com/profile-pic.jpg" alt="John Doe's Profile Picture" width="100"><?php echo $data->profile_pic ?></td>
            <td><?php echo $data->contact_info ?></td>
            <td><?php echo $data->created_at ?></td>
            <td>
               <a href="" class="btn btn-danger">Delete</a>
							<a href="" class="btn btn-primary">Edit</a>
            </td>
        </tr>
        <!-- Additional rows would be generated here -->
    </tbody>
<?php 
}
?>
</table>
</div><!-- /.box-body -->
              </div><!-- /.box -->

         
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
<?php
	  include_once('footer.php');
	  ?>