<?php
include_once('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Interview Preparation - Aptitude & Technical</title>
    <link rel="stylesheet" href="styles.css"> <!-- Add your CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
        }
        .question-card {
            background: white;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }
        .question-card h3 {
            color: #333;
        }
        .question-card p {
            margin: 5px 0;
            color: #666;
        }
        .code-block {
            background: #2d2d2d;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            font-family: monospace;
            overflow-x: auto;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Interview Preparation - Aptitude & Technical</h2>

    <!-- Aptitude Section -->
    <h3>Aptitude Questions</h3>
    <?php
    if (!empty($arr_aptitude)) {
        foreach ($arr_aptitude as $question) {
            echo '<div class="question-card">';
            echo '<h3>' . htmlspecialchars($question->question) . '</h3>';
            echo '<p><strong>Answer:</strong> ' . htmlspecialchars($question->answer) . '</p>';
            echo '<p><strong>Mode:</strong> ' . htmlspecialchars($question->difficulty) . '</p>';
            echo '</div>';
        }
    } else {
        echo '<p>No aptitude questions available.</p>';
    }
    ?>
    <br><br>
    <!-- Technical Section -->
    <h3>Technical Questions</h3>
    <?php
    if (!empty($arr_technical)) {
        foreach ($arr_technical as $question) {
            echo '<div class="question-card">';
            echo '<h3>' . htmlspecialchars($question->question) . '</h3>';
            echo '<p><strong>Answer:</strong> ' . htmlspecialchars($question->answer) . '</p>';
            echo '<p><strong>Mode:</strong> ' . htmlspecialchars($question->difficulty) . '</p>';
            if (!empty($question->code_snippet)) {
                echo '<div class="code-block">' . nl2br(htmlspecialchars($question->code_snippet)) . '</div>';
            }
            echo '</div>';
        }
    } else {
        echo '<p>No technical questions available.</p>';
    }
    ?>
</div>

</body>
</html>

<?php
include_once('footer.php');
?>
