<?php
include_once('header.php');
?>

<html>
<head>
    <title>Course Details</title>
    <style>
        /* General Page Styling */
        body {
            font-family: 'Helvetica Neue', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fafafa;
            color: #333;
            overflow-x: hidden;
        }
        .course-container {
            width: 90%;
            max-width: 1200px;
            margin: 40px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            opacity: 0;
            animation: fadeIn 1s forwards;
        }
        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        .course-header {
            text-align: center;
            margin-bottom: 30px;
            transform: translateY(20px);
            animation: slideUp 1s forwards;
        }
        @keyframes slideUp {
            0% { transform: translateY(20px); opacity: 0; }
            100% { transform: translateY(0); opacity: 1; }
        }

        

        .course-title {
            font-size: 36px;
            font-weight: 700;
            color: #333;
            transition: color 0.3s ease;
        }
        .course-title:hover {
            color: #6c63ff;
        }

        .course-description {
            font-size: 18px;
            line-height: 1.7;
            color: #555;
            text-align: justify;
            margin-bottom: 25px;
        }

        .section-title {
            font-size: 24px;
            font-weight: 600;
            color: #333;
            margin-top: 30px;
            margin-bottom: 15px;
            position: relative;
            transition: color 0.3s ease;
        }
        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50%;
            height: 3px;
            background-color: #6c63ff;
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }
        .section-title:hover::after {
            transform: scaleX(1);
        }

        .course-content {
            font-size: 16px;
            line-height: 1.7;
            color: #666;
            margin-bottom: 25px;
        }

        pre {
            background-color: #282c34;
            color: #fff;
            padding: 20px;
            border-radius: 8px;
            overflow-x: auto;
            font-size: 16px;
            margin-bottom: 25px;
            transform: translateY(20px);
            opacity: 0;
            animation: fadeIn 1s forwards;
            animation-delay: 0.5s;
        }

        .market-info {
            background-color: #f7f7f7;
            padding: 20px;
            border-radius: 8px;
            margin-top: 20px;
            border-left: 5px solid #6c63ff;
            transform: translateY(20px);
            opacity: 0;
            animation: fadeIn 1s forwards;
            animation-delay: 1s;
        }

        .enroll-btn {
            display: inline-block;
            width: 250px;
            margin: 30px auto;
            text-align: center;
            background-color: #6c63ff;
            color: white;
            padding: 15px;
            border-radius: 25px;
            text-decoration: none;
            font-size: 18px;
            font-weight: 600;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .enroll-btn:hover {
            background-color: #5848c2;
            transform: translateY(-3px);
        }
        .enroll-btn:active {
            transform: translateY(1px);
        }
    </style>
</head>
<body>

<div class="course-container">
    <?php 
    foreach($arr_content as $data) { 
    ?>
        <div class="course-header">
            <img src="../Admin/upload/categories/<?php echo $data->img ?>" alt="Course Image">
            <h1 class="course-title"><?php echo $data->content_title; ?></h1>
        </div>

        <p class="course-description"><?php echo htmlspecialchars_decode($data->content_description); ?></p>

        <h2 class="section-title">Course Syllabus</h2>
        <p class="course-content"><?php echo htmlspecialchars_decode($data->detailed_info); ?></p>

        <h2 class="section-title">Syntax</h2>
        <pre><?php echo htmlspecialchars($data->syntax); ?></pre>

        <h2 class="section-title">Example Code</h2>
        <pre><?php echo htmlspecialchars($data->example_code); ?></pre>

        <h2 class="section-title">Market Demand & Career Opportunities</h2>
        <div class="market-info">
            <p><strong>Market Demand:</strong> <?php echo htmlspecialchars_decode($data->Market_Demand); ?></p>
            <p><strong>Career Opportunities:</strong> <?php echo htmlspecialchars_decode($data->Career_Opportunities); ?></p>
        </div>
        
        <a href="content_view?btn_course_content=<?php echo $data->content_id?>" class="enroll-btn">View Full Course</a>
    <?php 
    } 
    ?>

     <h1>Course Videos</h1>
    
    <?php if (!empty($videos)): ?>
        <?php foreach ($videos as $video): ?>
            <div class="video-container">
                <h3><?php echo htmlspecialchars($video['video_title']); ?></h3>
                <?php echo $video['embed_code']; ?> <!-- Embed the video here -->
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No videos available for this course.</p>
    <?php endif; ?>
</div>



<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>

<?php
include_once('footer.php');
?>
