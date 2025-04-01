<?php
include_once('header.php');

// Database connection
$servername = "localhost"; // Change if needed
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "it_knowledge_hub";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to get table row count
function getRowCount($conn, $table) {
    $sql = "SELECT COUNT(*) AS count FROM $table";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    return $row['count'];
}

// Fetch counts for tables
$counts = [
    "Contact Inquiries" => getRowCount($conn, "contact_us"),
    "Courses" => getRowCount($conn, "courses"),
    "Course Content" => getRowCount($conn, "course_content"),
    "Course Topics" => getRowCount($conn, "course_topics"),
    "Customers" => getRowCount($conn, "customers"),
    "Interview Questions" => getRowCount($conn, "interview_questions"),
    "IT Categories" => getRowCount($conn, "it_categories"),
    "News & Updates" => getRowCount($conn, "news_updates"),
    
];

?>

<!-- Right side content -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>Dashboard <small>Control Panel</small></h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <?php
            $colors = ["blue", "green", "yellow", "red", "purple", "aqua"];
            $icons = ["ion-person-add", "ion-university", "ion-stats-bars", "ion-chatbubbles", "ion-ios-book", "ion-code-working"];
            $i = 0;

            foreach ($counts as $title => $count) {
                $color = $colors[$i % count($colors)]; // Rotate colors
                $icon = $icons[$i % count($icons)]; // Rotate icons
                echo '
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-' . $color . '">
                        <div class="inner">
                            <h3>' . $count . '</h3>
                            <p>' . $title . '</p>
                        </div>
                        <div class="icon">
                            <i class="ion ' . $icon . '"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>';
                $i++;
            }
            ?>
        </div>
    </section>
</div>

<?php
include_once('footer.php');
$conn->close(); // Close database connection
?>
