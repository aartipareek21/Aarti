<?php
    if(isset($_SESSION['customer_id']))
    {
        echo "<script>
            window.location='index';
        </script>";
    }
    include_once('header.php');
?>
<!DOCTYPE html>
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
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
    }
    .login-section {
        background: url('signup_page.jpeg') no-repeat center center/cover; /* Add your background image */
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        color: white;
        text-align: center;
    }
    .forgot-password-form {
/*      background: linear-gradient(135deg, #6fa3ef, #5c8bc0);*/
      padding: 40px;
/*      border-radius: 15px;*/
      width: 350px;
      margin: auto;
/*      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);*/
      text-align: center;
    }

    
     h2 {
      font-size: 26px;
      color: #17a2b8;
      margin-bottom: 10px;
    }

    p {
      font-size: 16px;
      color:black;
      margin-bottom: 20px;
    }

    .input-container {
      margin-bottom: 20px;
    }

    .input-container input {
      width: 100%;
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #ddd;
      font-size: 16px;
      margin-top: 8px;
      outline: none;
    }

    .input-container input:focus {
      border-color: #4e9fae;
      box-shadow: 0 0 8px rgba(78, 159, 174, 0.6);
    }

    .submit-btn {
      width: 100%;
      padding: 12px;
      background-color: #4e9fae;
      border: none;
      border-radius: 5px;
      color: white;
      font-size: 16px;
      cursor: pointer;
      transition: all 0.3s;
    }

    .submit-btn:hover {
      background-color: #3a7f91;
      transform: scale(1.05);
    }

    .back-to-login a {
      color: ;
      font-size: 14px;
      text-decoration: none;
      margin-top: 10px;
    }

    .back-to-login a:hover {
      text-decoration: underline;
    }

    /* Additional Styles for OTP Form */
    #otp-form {
      margin-top: 20px;
    }

    #otp-form p {
      font-size: 14px;
      color: black;
    }

    #otp-form .input-container {
      margin-bottom: 20px;
    }
</style>

   
</head>

<body>
     <!-- Background Section Start -->
     <div class="login-section">
    <div class="forgot-password-form">
    <h2>Forgot Your Password?</h2>
    <p>Enter your registered email to reset your password.</p>
    
    <form id="email-form">
      <div class="input-container">
        <label for="email"> </label>
        <input type="email" id="email" placeholder="Your email" required />
      </div>
      
      <button type="submit" class="submit-btn">Send Reset Link or OTP</button>
    </form>
    
    <!-- OTP Form -->
    <form id="otp-form" style="display:none;">
      <p>A One-Time Password (OTP) has been sent to your email. Please enter it below.</p>
      <div class="input-container">
        <label for="otp">OTP</label>
        <input type="text" id="otp" placeholder="Enter OTP" required />
      </div>
      
      <button type="submit" class="submit-btn">Verify OTP</button>
    </form>
    
    <p class="back-to-login"><a href="login.php">Back to Login</a></p>
  </div>

  <script>
    document.getElementById('email-form').addEventListener('submit', function(e) {
      e.preventDefault(); // Prevent form submission

      // Hide the email form and show the OTP form
      document.getElementById('email-form').style.display = 'none';
      document.getElementById('otp-form').style.display = 'block';

      // Here, you would typically send the OTP to the email.
      alert('An OTP has been sent to your email!');
    });

    document.getElementById('otp-form').addEventListener('submit', function(e) {
      e.preventDefault(); // Prevent form submission

      // Validate the OTP (here you would typically check the OTP against a backend system)
      const otp = document.getElementById('otp').value;
      if (otp === '123456') { // Example OTP validation
        alert('OTP Verified! Proceed to reset your password.');
      } else {
        alert('Invalid OTP. Please try again.');
      }
    });
  </script>
</div>
</body>

</html>
<?php
    include_once('footer.php');
    ?>