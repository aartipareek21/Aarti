<?php
include_once('header.php');
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>User Authentication Form</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Product</a></li>
            <li class="active">User List</li>
        </ol>
    </section>

    <section class="content">
        <div class="container">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">User List</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Example Row (Dynamically generated from the database) -->
                                     <?php
                    foreach($user_arr as $data)
                    {
                    ?>
                            <tr>
                                <td><?php echo $data->id ?></td>
                                <td><?php echo $data->username ?></td>
                                <td><?php echo $data->email ?></td>
                                <td><?php echo $data->role ?></td>
                                <td>
                                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
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
        </div><!-- /.container -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<?php
include_once('footer.php');
?>
