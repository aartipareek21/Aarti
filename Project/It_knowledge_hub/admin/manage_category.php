<?php
include_once('header.php');
?>

<!-- jQuery (Full Version) -->


<!-- Right side column -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>Manage category<small>Manage category</small></h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Category</a></li>
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
                <table id="mytable" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Category ID</th>
                            <th>Category Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach($cate_arr as $data) {
                        ?>
                        <tr>
                            <td><?php echo $data->category_id; ?></td>
                            <td><?php echo $data->category_name; ?></td>
                            <td><?php echo $data->description; ?></td>
                            <td><img src="upload/categories/<?php echo $data->img; ?>" width="50px"/></td>
                            <td>
                                <a href="edit_category?editbtn=<?php echo $data->category_id; ?>" class="btn btn-primary">Edit</a>
                                <a href="delete?del_categories=<?php echo $data->category_id; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
    </html>
</div>

<?php
include_once('footer.php');
?>
