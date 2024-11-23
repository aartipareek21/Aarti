<?php
include_once('header.php');
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Career Paths</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Career Paths</a></li>
            <li class="active">View Career Paths</li>
        </ol>
    </section>

    <section class="content">
        <div class="container">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Career Paths List</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <table id="example2" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Career Title</th>
                                <th>Skills Required</th>
                                <th>Typical Job Roles</th>
                                <th>Progression Path</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Example Row (Dynamically generated from the database) -->
                            <?php
                    foreach($career_arr as $data)
                    {
                    ?>
        
                            <tr>
                                <td><?php echo $data->id ?></td>
                                <td><?php echo $data->career_title ?></td>
                                <td><?php echo $data->skills_required ?></td>
                                <td><?php echo $data->job_roles ?></td>
                                <td><?php echo $data->progression ?></td>
                                <td><?php echo $data->created_at ?></td>
                                <td>
                                    <a href="#" class="btn btn-danger btn-sm" title="Delete"><i class="fa fa-trash"></i></a>
                                    <a href="#" class="btn btn-primary btn-sm" title="Edit"><i class="fa fa-edit"></i></a>
                                </td>
                            </tr>
                            <!-- Additional rows would be generated here -->
                        </tbody>
                        <?php 
                    } ?>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.container -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<?php
include_once('footer.php');
?>
