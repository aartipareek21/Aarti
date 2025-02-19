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
			$arr_categories = $this->select('it_categories'); 
				include_once('index.php');
			break;
			case '/about':
				include_once('about.php');
			break;
			
			case '/course':
				$arr_categories = $this->select('IT_categories'); 
				include_once('course.php');
			break;

			 case '/featured_courses':
                // Fetch three featured courses from the database, ordered as needed
                // Modify the query to fit your requirements for displaying only three courses
                $sql = "SELECT * FROM courses ORDER BY course_id LIMIT 3"; // Modify the ORDER BY if needed
                $arr_featured_courses = $this->custom_query($sql);  // custom_query function can be added in the model
                
                // Check if data is retuned
                if ($arr_featured_courses) {
                    include_once('featured_courses.php');  // Include view for displaying featured courses
                } else {
                    echo "No featured courses found!";
                }
                break;
			 			
			case '/course_view':	
			
				if(isset($_REQUEST['btn_courses']))
				{
					$category_id=$_REQUEST['btn_courses'];
					$where=array("category_id"=>$category_id);
					$res=$this->select_where('courses',$where);
					
					while($fetch=$res->fetch_object()) // fetch all data
					{
						$arr_course[]=$fetch;
					}
				}
			
				include_once('course_view.php');
			break;
			case '/content_view':
			
				if(isset($_REQUEST['btn_course_content']))
				{
					$course_id=$_REQUEST['btn_course_content'];
					$where=array("course_id"=>$course_id);
					$res=$this->select_where('course_content',$where);
					
					while($fetch=$res->fetch_object()) // fetch all data
					{
						$arr_content[]=$fetch;
					}
				}
			
				include_once('content_view.php');
			break;

			
			case '/video_courses':
			$arr_video_courses = $this->custom_query($sql);
			 if ($arr_video_courses) {
              include_once('video_courses.php');  // Include view for displaying video courses
             } else {
             echo "No video courses found!";
              }
             break;



          case '/Interview_preparation':
    $where = [];

    if (isset($_REQUEST['course_id'])) {
        $where["course_id"] = $_REQUEST['course_id'];
    }

    // Fetching all interview questions
    $arr_interview = $this->select_where('interview_questions', $where);

    // Separate aptitude and technical questions
    $arr_aptitude = [];
    $arr_technical = [];

    if ($arr_interview) {
        while ($fetch = $arr_interview->fetch_object()) {
            if ($fetch->category == 'Aptitude') {
                $arr_aptitude[] = $fetch;
            } elseif ($fetch->category == 'Technical') {
                $arr_technical[] = $fetch;
            }
        }
    }

    include_once('Interview_preparation.php'); // Load the view
    break;

      case '/career_path':
    $career_paths = $this->select('career_paths'); // Ensure it matches the PHP file
    include_once('career_path.php');
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
				if(isset($_REQUEST['login']))
				{
					$email=$_REQUEST['email'];
					$password=md5($_REQUEST['password']);
					
					$where=array("email"=>$email,"password"=>$password,"status"=>"unblocked");
					
					//login
					$res=$this->select_where('customers',$where);
					$chk=$res->num_rows; //check row wise condition
					
					if($chk==1) // 1 true 0 false
					{
						
						$fetch=$res->fetch_object();
						
						
							$_SESSION['username']=$fetch->first_name;
							$_SESSION['userid']=$fetch->customer_id;
							
							echo "<script>
								alert('Login suuccessfully');
								window.location='index';
							</script>";
						}
						// else
						// {
						// 	echo "<script>
						// 	alert('Login failed due to Account Blocked');
						// 	window.location='login';
						// 	</script>";
						// }
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

			case '/profile':
			
				$where=array("customer_id"=>$_SESSION['userid']);
				$res=$this->select_where('customers',$where);
				$fetch=$res->fetch_object();
				include_once('profile.php');
			
			break;
			
			case '/userlogout':
			
				unset($_SESSION['userid']);
				unset($_SESSION['username']);
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
					echo $image=$_FILES['image']['name'];
	
					// upload img in folder
					$path='img/customer/'.$image;     // path
					$dupimg=$_FILES['image']['tmp_name'];  // duplicate imag get
					move_uploaded_file($dupimg,$path);  // move duplicate img in path
        // Create an associative array with form values
        $arr = array(
            "first_name" => $first_name,
            "last_name" => $last_name,
            "email" => $email,
            "password" => $password,
            "phone_number" => $phone_number,
            "image" => $image
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