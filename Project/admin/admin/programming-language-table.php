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
            <li class="active">Programming Languages</li>
        </ol>
    </section>

    <section class="content">
        <div class="container">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Programming Languages List</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <table id="example2" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Language Name</th>
                                <th>Description</th>
                                <th>Pros</th>
                                <th>Cons</th>
                                <th>Resources</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Example Row (Dynamically generated from the database) -->
                             <?php
                    foreach($language_arr as $data)
                    {
                    ?>
                            <tr>
                                <td><?php echo $data->id ?></td>
                                <td><?php echo $data->language?></td>
                                <td><?php echo $data->description ?></td>
                                <td><?php echo $data->pros ?></td>
                                <td><?php echo $data->cons ?></td>
                                <td><?php echo $data->resources ?></td>
                                <td><?php echo $data->created_at ?></td>
                                <td>
                                    <a href="#" class="btn btn-danger btn-sm" title="Delete"><i class="fa fa-trash"></i></a>
                                    <a href="#" class="btn btn-primary btn-sm" title="Edit"><i class="fa fa-edit"></i></a>
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
