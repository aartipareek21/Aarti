<?php
include_once('header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Details</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        .course-container {
            width: 80%;
            max-width: 1000px;
            margin: 50px auto;
            background: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            animation: fadeIn 1s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .course-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .course-header img {
            max-width: 100%;
            border-radius: 10px;
        }
        .course-title {
            font-size: 32px;
            font-weight: 700;
            color: #222;
        }
        .course-description {
            font-size: 18px;
            line-height: 1.8;
            text-align: justify;
            margin-bottom: 30px;
        }
        .section-title {
            font-size: 24px;
            font-weight: 600;
            color: #444;
            margin-top: 40px;
            padding-bottom: 10px;
            border-bottom: 3px solid #6c63ff;
        }
        .course-content, .market-info p {
            font-size: 17px;
            line-height: 1.7;
            color: #555;
        }
        pre {
            background: #282c34;
            color: #fff;
            padding: 15px;
            border-radius: 8px;
            overflow-x: auto;
            font-size: 16px;
        }
        .market-info {
            background: #f9f9f9;
            padding: 20px;
            border-left: 5px solid #6c63ff;
            border-radius: 8px;
            margin-top: 20px;
        }
        .enroll-btn, .view-course-btn {
            display: inline-block;
            background: #6c63ff;
            color: #fff;
            padding: 14px 25px;
            border-radius: 30px;
            text-decoration: none;
            font-size: 18px;
            font-weight: 600;
            transition: 0.3s;
        }
        .enroll-btn:hover, .view-course-btn:hover {
            background: #5848c2;
        }
        .btn-container {
            text-align: center;
            margin-top: 30px;
        }
    </style>
</head>
<body>

<div class="course-container">
    <?php foreach($arr_content as $data) { ?>
        <div class="course-header">
            <img src="../Admin/upload/categories/<?php echo $data->img; ?>" alt="Course Image">
            <h1 class="course-title"> <?php echo $data->content_title; ?> </h1>
        </div>

        <p class="course-description"> <?php echo htmlspecialchars_decode($data->content_description); ?> </p>

        <h2 class="section-title">Course Syllabus</h2>
        <p class="course-content"> <?php echo htmlspecialchars_decode($data->detailed_info); ?> </p>

        <h2 class="section-title">Syntax</h2>
        <pre><?php echo htmlspecialchars($data->syntax); ?></pre>

        <h2 class="section-title">Example Code</h2>
        <pre><?php echo htmlspecialchars($data->example_code); ?></pre>

        <h2 class="section-title">Market Demand & Career Opportunities</h2>
        <div class="market-info">
            <p><strong>Market Demand:</strong> <?php echo htmlspecialchars_decode($data->Market_Demand); ?></p>
            <p><strong>Career Opportunities:</strong> <?php echo htmlspecialchars_decode($data->Career_Opportunities); ?></p>
        </div>

        <div class="btn-container">
            <a href="topic_view?btn_course_topics=<?php echo $data->course_id; ?>" class="view-course-btn">Learn More</a>
        </div>
    <?php } ?>
</div>

<?php include_once('footer.php'); ?>

</body>
</html>
