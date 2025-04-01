<?php
include_once('header.php');

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "it_knowledge_hub";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// Fetching news updates
$stmt = $conn->prepare("SELECT headline, summary, published_date FROM news_updates ORDER BY published_date DESC");
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latest News & Updates</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .news-banner {
            width: 100%;
            height: 300px;
            overflow: hidden;
            margin-bottom: 40px;
        }

        .news-banner img {
            width: 100%;
            object-fit: cover;
            display: block;
            image-rendering: crisp-edges; /* Better image clarity */
        }

        .container {
            max-width: 900px;
            margin: auto;
            background: #fff;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            font-size: 28px;
            color: #222;
            margin-bottom: 25px;
            border-bottom: 3px solid #ddd;
            padding-bottom: 10px;
        }

        .news-item {
            background: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            text-align: center;
            position: relative;
        }

        .news-headline {
            font-size: 20px;
            font-weight: bold;
            color: #0056b3;
            display: block;
            margin-bottom: 5px;
        }

        .news-summary {
            font-size: 16px;
            color: #555;
            line-height: 1.5;
            display: none;
        }

        .news-date {
            font-size: 14px;
            color: #777;
            font-style: italic;
            margin-top: 5px;
        }

        .read-more {
            display: inline-block;
            margin-top: 10px;
            font-size: 14px;
            color: #007BFF;
            cursor: pointer;
            text-decoration: underline;
            transition: color 0.3s ease;
        }

        .read-more:hover {
            color: #0056b3;
        }

        .no-news {
            text-align: center;
            font-size: 18px;
            color: #888;
            padding: 20px;
        }

        @media (max-width: 600px) {
            .container {
                padding: 15px;
            }

            .news-item {
                padding: 15px;
            }

            .news-banner {
                height: 50vh;
            }
        }
    </style>
</head>
<body>

<!-- News Banner -->
<div class="news-banner">
    <img src="new2.jpg" alt="Latest News & Updates">
 
</div>

<div class="container">
    <h2>📰 Latest News & Updates</h2>

    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='news-item'>
                    <span class='news-headline'>" . htmlspecialchars($row['headline']) . "</span>
                    <p class='news-summary'>" . htmlspecialchars($row['summary']) . "</p>
                    <p class='news-date'><strong>Published on:</strong> " . date("F d, Y", strtotime($row['published_date'])) . "</p>
                    <span class='read-more' onclick='toggleNews(this)'>Read More</span>
                  </div>";
        }
    } else {
        echo "<p class='no-news'>No news available at the moment.</p>";
    }

    // Closing database connection
    $stmt->close();
    $conn->close();
    ?>
</div>

<script>
    function toggleNews(element) {
        let summary = element.previousElementSibling.previousElementSibling;
        if (summary.style.display === "none" || summary.style.display === "") {
            summary.style.display = "block";
            element.textContent = "Read Less";
        } else {
            summary.style.display = "none";
            element.textContent = "Read More";
        }
    }
</script>

</body>
</html>

<?php include_once('footer.php'); ?>
