<?php
include_once('header.php');
?>
<html>
<head>
    <title>Courses</title>
   <style>
    .course-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        margin: 20px 0;
    }

    .course-card {
         background: linear-gradient(135deg, #f1faff, #d0e8f3); /* Very pale, almost white-blue gradient */
        border-radius: 15px;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
        overflow: hidden;
        max-width: 320px;
        text-align: center;
        border: 1px solid #ddd;
        display: flex;
        flex-direction: column;
        color: #fff;
        transition: transform 0.3s, box-shadow 0.3s;
        position: relative;
    }
    .course-card:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.3);
    }
     .back-to-top {
        position: fixed;
        bottom: 30px;
        right: 30px;
        background: #6c63ff;
        color: #fff;
        padding: 15px;
        border-radius: 50%;
        font-size: 20px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s, background 0.3s;
    }

    .course-image img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .course-details {
        padding: 20px;
        flex-grow: 1; /* Ensures content stretches to make the button align consistently */
    }

    .course-details h3 {
        font-size: 20px;
        font-weight: bold;
        color: #333;
        margin-bottom: 15px;
    }

    .course-details p {
        font-size: 14px;
        color: #666;
        margin-bottom: 15px;
    }

    .course-footer {
        padding: 15px;
        background: #f8f9fa;
        border-top: 1px solid #ddd;
    }

    .course-footer .price {
        font-size: 18px;
        font-weight: bold;
        color: #333;
    }

    .course-footer .view-button {
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
.back-to-top:hover {
        background: #8c80ff;
        transform: scale(1.1);
    }
    .course-footer .view-button:hover {
        background: #5848c2;
    }
</style>

<!-- PHP Code remains the same -->
<div class="course-container">
    <?php 
    foreach($arr_categories as $data) {
    ?>
        <div class="course-card">
            <!-- Course Image -->
            <div class="course-image">
                <img src="../Admin/upload/categories/<?php echo $data->img ?>" alt="Course Image">
            </div>

            <!-- Course Details -->
            <div class="course-details">
                <h3><?php echo $data->category_name ?></h3>
                <p><?php echo $data->description ?></p>
            </div>

            <!-- Course Footer -->
            <div class="course-footer">
                <span class="price"></span>
                <a href="course_view?btn_courses=<?php echo $data->category_id ?>" class="view-button">View Course</a>
            </div>
        </div>
    <?php
    }
    ?>
</div>

        </div>
    </div>
    <!-- Courses End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>
<?php
include_once('footer.php');
?>
