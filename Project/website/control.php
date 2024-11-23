<?php

include_once('../admin/model.php');   // step 1 load model 



class control extends model // step 2 extends model class
{
	
		function __construct(){ // magic function call automatic when we declare class object
		session_start();
		model::__construct();  // step 3 call model __construct
		
		$url=$_SERVER['PATH_INFO'];
		
		switch($url)
		{
			case '/index':
				include_once('index.php');
			break;
			case '/about':
				include_once('about.php');
			break;
			
			case '/course':
				$arr_categories = $this->select('IT_categories'); 
				include_once('course.php');
			break;
			
			case '/teacher':
				include_once('teacher.php');
			break;
			
			case '/blog':
				include_once('blog.php');
			break;
			
			case '/single':
				include_once('single.php');
			break;
			
			case '/contact':
				if(isset($_REQUEST['submit']))
				{
					$name=$_REQUEST['name'];
					$email=$_REQUEST['email'];

					$message=$_REQUEST['message'];
					
					$arr=array("name"=>$name,"email"=>$email,"message"=>$message);
					
					$res=$this->insert('contact_us',$arr);
					if($res)
					{
						echo "<script>
							alert('Contact submited suuccessfully');
							window.location='contact';
						</script>";
					}
					else
					{
						echo "Not success";
					}
				}	
				include_once('contact.php');
			break;
			
			case '/login':
				if(isset($_REQUEST['submit']))
				{
					$email=$_REQUEST['email'];
					$password=md5($_REQUEST['password']);
					
					$where=array("email"=>$email,"password"=>$password);
					
					//login
					$res=$this->select_where('customers',$where);
					$chk=$res->num_rows; //check row wise condition
					
					if($chk==1) // 1 true 0 false
					{
						
						$fetch=$res->fetch_object();
						
						if($fetch->status=="Unblocked")
						{
							$_SESSION['first_name']=$fetch->first_name;
							$_SESSION['customer_id']=$fetch->customer_id;
							
							echo "<script>
								alert('Login suuccessfully');
								window.location='index';
							</script>";
						}
						else
						{
							echo "<script>
							alert('Login failed due to Account Blocked');
							window.location='login';
							</script>";
						}
					}
					else
					{
						echo "<script>
							alert('Login failed due to wrong crendential');
							window.location='login';
						</script>";
					}
				}
				include_once('login.php');
			break;
			
			case '/userlogout':
			
				unset($_SESSION['customer_id']);
				unset($_SESSION['first_name']);
				echo "<script>
							alert('Logout Succesfull');
							window.location='index';
						</script>";
				
			break;
			
			
			
case '/signup':
    if (isset($_REQUEST['submit'])) {
        $first_name = $_REQUEST['first_name'];
        $last_name = $_REQUEST['last_name'];
        $email = $_REQUEST['email'];
        $password = md5($_REQUEST['password']); // Corrected here
        $phone_number = $_REQUEST['phone_number'];

        // Create an associative array with form values
        $arr = array(
            "first_name" => $first_name,
            "last_name" => $last_name,
            "email" => $email,
            "password" => $password,
            "phone_number" => $phone_number
        );

        // Attempt to insert data into the 'customers' table
        $res = $this->insert('customers', $arr);

        if ($res) {
            echo "<script>
                alert('Signup successfully');
                window.location='login'; // Redirect to login after success
            </script>";
        } else {
            echo "<script>
                alert('Signup failed. Please try again.');
            </script>";
        }
    }
    include_once('signup.php');
    break;


			
			default:
				include_once('pnf.php');
			break;
		}
		
	}
	
}
$obj=new control;




?>