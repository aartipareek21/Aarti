<?php
include_once('header.php');
?>

    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-DARK text-uppercase">MyAccount</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase text-dark "><a class="text-dark " href="index.php">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-dark text-uppercase">MyAccount</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- MyAccount Start -->
    <div class="container-fluid py-5">
        <div class="container py-2">
            <!-- <div class="row align-items-center"> -->
                <!-- <div class="col-lg-5">
                    <img class="rounded mb-4 mb-lg-0" src="img/customer/<?php echo $fetch->img?>" height="400px" width="350px" alt="">
                </div> -->
                <div class="col-lg-9">
                    <div class="text-left mb-4">
                        <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">My Profile</h5>
                        <h1>Id : <?php echo $fetch->customer_id?></h1>
						<h1>firstname : <?php echo $fetch->first_name?></h1>
						<h1>lastname : <?php echo $fetch->last_name?></h1>

                    </div>
                    <p>Email : <?php echo $fetch->email?></p>
					<p>Mobile No : <?php echo $fetch->phone_number?></p>
					<p>Status : <?php echo $fetch->status?></p>
                    <a href="edituser?editbtn=<?php echo $fetch->customer_id?>" class="btn btn-info py-md-2 px-md-4 font-weight-semi-bold mt-2">Edit Profile</a>
                </div>
            </div>
        </div>
    </div>
    <!-- MyAccount End -->

<?php
include_once('footer.php');
?>coco