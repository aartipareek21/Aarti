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
            <th>Feedback</th>
            <th>Created At</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <!-- Example Row (Dynamically generated from the database) -->
        <?php
                    foreach($feedback_arr as $data)
                    {
                    ?>
        <tr>
            <td><?php echo $data->id ?></td>
            <td><?php echo $data->user_feedback ?></td>
            <td><?php echo $data->created_at ?></td>
            <td>
                <a href="" class="btn btn-danger">Delete</a>
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