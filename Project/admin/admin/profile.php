<?php
include_once('header.php');
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Profile Module</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Product</a></li>
            <li class="active">Add Profile</li>
        </ol>
    </section>
    
    <section class="content">
        <div class="container">
            <h2 id="profile" class="mb-4">Add Profile</h2>
            <form action="add-profile.php" method="post">
                <div class="form-group">
                    <label for="full-name">Full Name:</label>
                    <input type="text" id="full-name" name="full-name" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label for="bio">Bio:</label>
                    <textarea id="bio" name="bio" class="form-control" rows="4"></textarea>
                </div>
                
                <div class="form-group">
                    <label for="profile-pic">Profile Picture URL:</label>
                    <input type="url" id="profile-pic" name="profile-pic" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="contact-info">Contact Information:</label>
                    <textarea id="contact-info" name="contact-info" class="form-control" rows="4"></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary">Add Profile</button>
            </form>
        </div>
    </section>
</div>

<?php
include_once('footer.php');
?>
