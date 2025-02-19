<<?php
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
                    <th>Career Path ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Course</th>
                    <th>Required Skills</th>
                    <th>Job Roles</th>
                    <th>Salary Range</th>
                    <th>Market Demand</th>
                    <th>Learning Resources</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!empty($career_arr)) {
                    foreach ($career_arr as $data) {
                ?>
                <tr>
                    <td><?php echo htmlspecialchars($data->id); ?></td>  <!-- Correct ID column -->
<td><?php echo htmlspecialchars($data->title); ?></td>
<td><?php echo htmlspecialchars($data->description); ?></td>
<td><?php echo htmlspecialchars($data->skills); ?></td>  <!-- Changed required_skills → skills -->
<td><?php echo htmlspecialchars($data->job_roles); ?></td>
<td><?php echo htmlspecialchars($data->salary_range); ?></td>
<td><?php echo htmlspecialchars($data->market_demand); ?></td>
<td><?php echo htmlspecialchars($data->learning_resources); ?></td>  <!-- Added missing column -->
<td><?php echo htmlspecialchars($data->created_at); ?></td>  <!-- Added timestamp column -->

                    <td>
                        <?php 
                        $resources = explode(',', $data->learning_resources);
                        foreach ($resources as $resource) {
                            echo '<a href="' . htmlspecialchars(trim($resource)) . '" target="_blank">🔗 Resource</a><br>';
                        }
                        ?>
                    </td>
                    <td>
                        <a href="edit_career_path.php?career_path_id=<?php echo $data->career_path_id ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="delete_career_path.php?del_career_path=<?php echo $data->career_path_id ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?');">Delete</a>
                    </td>
                </tr>
                <?php
                    }
                } else {
                    echo '<tr><td colspan="10" class="text-center">No career paths available.</td></tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

<?php include_once('footer.php'); ?>
