<?php
include_once('header.php');
?>
<html>
<head>
    <title>Career Paths</title>
    <style>
        .career-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin: 20px 0;
        }

        .career-card {
            background: linear-gradient(135deg, #f1faff, #d0e8f3);
            border-radius: 15px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            max-width: 320px;
            text-align: center;
            border: 1px solid #ddd;
            display: flex;
            flex-direction: column;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .career-card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.3);
        }

        .career-image img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .career-details {
            padding: 20px;
            flex-grow: 1;
        }

        .career-details h3 {
            font-size: 20px;
            font-weight: bold;
            color: #333;
            margin-bottom: 15px;
        }

        .career-details p {
            font-size: 14px;
            color: #666;
            margin-bottom: 15px;
        }

        .career-footer {
            padding: 15px;
            background: #f8f9fa;
            border-top: 1px solid #ddd;
        }

        .career-footer .view-button {
            display: inline-block;
            padding: 8px 16px;
            font-size: 14px;
            font-weight: bold;
            color: #fff;
            background: #6c63ff;
            text-decoration: none;
            border-radius: 5px;
            transition: 0.3s;
        }

        .career-footer .view-button:hover {
            background: #5848c2;
        }
    </style>
</head>
<body>
    <div class="career-container">
        <?php 
        foreach($career_paths as $career) {
        ?>
        <div class="career-card">
            <!-- Career Image -->
            

            <!-- Career Details -->
            <div class="career-details">
                <h3><?php echo $career->job_roles; ?></h3>
                <p><?php echo $career->description; ?></p>
            </div>

            <!-- Career Footer -->
            <div class="career-footer">
                <a href="career_details.php?career_id=<?php echo $career->id; ?>" class="view-button">View Details</a>
            </div>
        </div>
        <?php 
        }
        ?>
    </div>
</body>
</html>
<?php
include_once('footer.php');
?>
