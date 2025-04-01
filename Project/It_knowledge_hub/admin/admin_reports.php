<?php

class Model {
    public $conn = "";

    function __construct() {
        $this->conn = new Mysqli('localhost', 'root', '', 'it_knowledge_hub');
        if ($this->conn->connect_error) {
            die("Database Connection Failed: " . $this->conn->connect_error);
        }
    }
}

// Create an instance of the model class
$model = new Model();

// Function to get data from a table with search functionality
function getData($conn, $table, $search = '') {
    $search_query = '';
    $params = [];
    
    if ($search != '') {
        if ($table == 'users') {
            $search_query = "WHERE user_name LIKE ? OR email LIKE ?";
            $params = ["%$search%", "%$search%"];
        } elseif ($table == 'manage_courses') {
            $search_query = "WHERE course_name LIKE ? OR course_description LIKE ?";
            $params = ["%$search%", "%$search%"];
        }
    }

    $query = "SELECT * FROM $table $search_query";
    $stmt = $conn->prepare($query);

    if ($params) {
        $stmt->bind_param(str_repeat('s', count($params)), ...$params);
    }

    $stmt->execute();
    return $stmt->get_result();
}

// Get columns of the selected table
function getColumns($conn, $table) {
    $query = "DESCRIBE $table";
    $result = mysqli_query($conn, $query);
    $columns = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $columns[] = $row['Field'];
    }
    return $columns;
}

// Get the total number of records in a table
function getTotalRecords($conn, $table) {
    $query = "SELECT COUNT(*) as total FROM $table";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    return $row['total'];
}

// Get selected category and search term
$category = isset($_GET['category']) ? $_GET['category'] : '';
$search = isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '';

if ($category) {
    $data = getData($model->conn, $category, $search);
    $columns = getColumns($model->conn, $category);
    $total_records = getTotalRecords($model->conn, $category);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Reports</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid black; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        .search-bar { margin: 20px 0; }
    </style>
</head>
<body>
    <h2>Admin Reports</h2>

    <!-- Categories -->
    <div>
        <a href="?category=customers">Users</a> | 
        <a href="?category=it_categories">Categories</a> |
        <a href="?category=courses">Courses</a> | 
        <a href="?category=course_content">course content</a> | 
        <a href="?category=course_topics">course topics</a> | 
        <a href="?category=contact_us">Contact Us</a> |  
        <a href="?category=news_updates">News & Updates</a>
    </div>

    <?php if ($category): ?>
        <!-- Search Bar -->
        <form method="get" class="search-bar">
            <input type="hidden" name="category" value="<?php echo $category; ?>">
            <input type="text" id="search" name="search" placeholder="Search <?php echo ucfirst($category); ?>..." value="<?php echo htmlspecialchars($search); ?>" />
            <button type="submit">Search</button>
        </form>

        <!-- Total Records Count -->
        <p><strong>Total Records:</strong> <?php echo $total_records; ?></p>

        <!-- Results Table -->
        <h3>Results for <?php echo ucfirst($category); ?></h3>
        <table id="data-table">
            <thead>
                <tr>
                    <?php foreach ($columns as $column): ?>
                        <th><?php echo ucfirst($column); ?></th>
                    <?php endforeach; ?>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($data && mysqli_num_rows($data) > 0) {
                    while ($row = mysqli_fetch_assoc($data)) {
                        echo "<tr>";
                        foreach ($columns as $column) {
                            echo "<td>" . htmlspecialchars($row[$column]) . "</td>";
                        }
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='" . count($columns) . "'>No records found.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    <?php endif; ?>

    <script>
        $(document).ready(function() {
            $("#search").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#data-table tbody tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().includes(value));
                });
            });
        });
    </script>
</body>
</html>
