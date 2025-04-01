<?php
include_once('header.php');

// Fetch interview questions from database
$interview_questions = $this->select('interview_questions');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interview Preparation - Aptitude & Technical</title>
    <link rel="stylesheet" href="styles.css"> <!-- External CSS -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #ecf0f1;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 900px;
            margin: 50px auto;
            padding: 25px;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.15);
        }
        .section-title {
            text-align: center;
            font-size: 2rem;
            color: #34495e;
            font-weight: bold;
            margin-bottom: 25px;
            border-bottom: 3px solid #2980b9;
            display: inline-block;
            padding-bottom: 8px;
        }
        .question-card {
            background: #ffffff;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.12);
            transition: all 0.3s ease;
            border-left: 5px solid #2980b9;
        }
        .question-card:hover {
            transform: translateY(-3px);
            box-shadow: 0px 6px 14px rgba(0, 0, 0, 0.2);
        }
        .question-card h3 {
            color: #2c3e50;
            margin-bottom: 10px;
            font-size: 1.3rem;
        }
        .question-card p {
            margin: 5px 0;
            color: #555;
            font-size: 1rem;
        }
        .download-btn {
            display: inline-block;
            background: #2980b9;
            color: #fff;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s ease;
            font-weight: bold;
        }
        .download-btn:hover {
            background: #1c638f;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="section-title">Interview Preparation</h2>

    <!-- Technical Interview Questions -->
    <h3 class="section-title">Technical Interview Questions</h3>
    <?php
    if (!empty($interview_questions)) {
        foreach ($interview_questions as $question) {
            echo '<div class="question-card">';
            echo '<h3>Course ID: ' . htmlspecialchars($question->course_id) . '</h3>';
           echo '<p><strong>Download:</strong> <a class="download-btn" href="upload/questions/' . htmlspecialchars($question->question_pdf) . '" target="_blank">View PDF</a></p>';

            echo '</div>';
        }
    } else {
        echo '<p style="text-align:center; color:#7f8c8d;">No interview questions available.</p>';
    }
    ?>
</div>

</body>
</html>

<?php
include_once('footer.php');
?>
