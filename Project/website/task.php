<?php
if(isset($_SESSION['customer_id']))
	{
		echo "<script>
			window.location='index';
		</script>";
	}
	include_once('header.php');
?>
<!DOCTYPE php>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="IT Knowledge Hub - Your Gateway to a Career in IT">
    <title>IT Knowledge Hub</title>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .signup-container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .signup-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-control:focus {
            border-color: #495057;
            box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.25);
        }
        .submit-btn {
            background-color: #495057;
            color: #fff;
        }
        .submit-btn:hover {
            background-color: #343a40;
        }
    </style>

   
</head>

<body>

    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">Signup</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="index.php">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Signup</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h5 class="text-Dark text-uppercase mb-3" style="letter-spacing: 5px;">Signup</h5>
                <h1>Signup For Course Details</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form bg-secondary rounded p-5">
                        <div id="success"></div>
                        <form method="POST">
                            
							<div class="control-group">
                                <input type="text" name="first_name" class="form-control border-0 p-4" id="name" placeholder="Your Firstname" required="required" />
                                <p class="help-block text-danger"></p>
                            </div>
							<div class="control-group">
                                <input type="text" name="last_name" class="form-control border-0 p-4" id="name" placeholder="Your lastname" required="required"  />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" name="email" class="form-control border-0 p-4" id="email" placeholder="Your Email" required="required" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="password" name="password" class="form-control border-0 p-4" id="password" placeholder="Your password" required="required"/>
                                <p class="help-block text-danger"></p>
                            </div>
					
							
                            <div class="control-group">
                                <input type="number" name="phone_number" class="form-control border-0 p-4" placeholder="entre phonw number" required="required"/>
                                <p class="help-block text-danger"></p>
                            </div>
							

							<br>
							 
							
                            <div class="text-center">
                                <button class="btn btn-Dark py-3 px-5" name="submit" type="submit">Signup</button>
                            </div>
							<br>
							<a href="login.php">If you already registered then Click Here</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


   
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php
	include_once('footer.php');
	?>