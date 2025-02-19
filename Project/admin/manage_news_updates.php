<?php
    include_once('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage News Updates</title>
</head>
<body>
    <!-- Right side column. Contains the navbar and content of the page -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Manage News Updates
            <small>View and Manage News Updates</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">News Updates</a></li>
            <li class="active">Manage News Updates</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container mt-5">
                <h2 class="text-center">Manage News Updates</h2>
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">News ID</th>
                            <th scope="col">Headline</th>
                            <th scope="col">Summary</th>
                            <th scope="col">Category</th>
                            <th scope="col">Course</th>
                            <th scope="col">Published Date</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Loop through news update records -->
                        <?php
                        foreach($news_updates_array as $data)
                        {
                            ?>
                        
                        <tr>
                            <td><?php echo $data->news_id ?></td>
                            <td><?php echo $data->headline ?></td>
                            <td><?php echo $data->summary ?></td>
                            <td><?php echo $data->category_name ?></td>
                            <td><?php echo $data->course_name ?></td>
                            <td><?php echo $data->published_date ?></td>
                            <td>
                                <!-- Edit and delete buttons -->
                                <a href="edit_news_update.php?news_id=<?php echo $data->news_id ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="delete_news_update.php?del_news_update=<?php echo $data->news_id ?>" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                      
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
    include_once('footer.php');
?>
