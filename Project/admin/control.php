<?php

include_once('model.php');   // step 1 load model 


class control extends model  // step 2 extends model class
{
	
	function __construct(){ // magic function call automatic when we declare class object
				
		model::__construct(); // step 3 call model __construct
				
		$url=$_SERVER['PATH_INFO'];
		
		switch($url)
		{
			case '/admin-login':
				
				if(isset($_REQUEST['login']))
				{
					$email=$_REQUEST['email'];
					$password=$_REQUEST['password'];
					
					$where=array("email"=>$email,"password"=>$password);
					
					$res=$this->select_dynamicwhere('admin',$where);
					$chk=$res->num_rows; //check row wise condition
					if($chk==1) // 1 true 0 false
					{
						echo "<script>
							alert('Login suuccessfully');
							window.location='dashboard';
						</script>";
					}
					else
					{
						echo "not success";

					}
				}
				include_once('index.php');
			break;
			
			case '/dashboard':
				include_once('dashboard.php');
			break;
			
			case '/add_IT_category':
				if(isset($_REQUEST['submit']))
				{
					$category_name=$_REQUEST['category_name'];
					
                    $description=$_REQUEST['description'];				
					
					$arr=array("category_name"=>$category_name,"description"=>$description);
					
					$res=$this->insert('it_categories',$arr);
					if($res)
					{
						echo "<script>
							alert('Categories add suuccessfully');
							window.location='add_IT_category';
						</script>";
					}
					else
					{
						echo "Not success";
					}
				}
				include_once('add_IT_category.php');
			break;
			
			case '/manage_category':
				$cate_arr=$this->select('it_categories');
				include_once('manage_category.php');
			break;
			
			case '/add_courses':
			$cate_arr=$this->select('it_categories');
				if(isset($_REQUEST['submit']))
				{
					$course_name=$_REQUEST['course_name'];
					$category_id=$_REQUEST['category_id'];
					$description=$_REQUEST['description'];
					
					
					
					
					$arr=array("course_name"=>$course_name,"category_id"=>$category_id,"description"=>$description);
					
					$res=$this->insert('courses',$arr);
					if($res)
					{
						echo "<script>
							alert('Course add suuccessfully');
							window.location='manage_courses';
						</script>";
					}
					else
					{
						echo "Not success";
					}
				}
				include_once('add_courses.php');
			break;
			
			case '/manage_courses':
				$course_array=$this->select('courses');
				include_once('manage_courses.php');
			break;

			case '/add_content':
			$courses_arr=$this->select('courses');
				if(isset($_REQUEST['submit']))
				{
					
					$course_id=$_REQUEST['course_id'];
					$content_title=$_REQUEST['content_title'];
					$content_description=$_REQUEST['content_description'];
					$content_file=$_REQUEST['content_file'];
					
					
					
					
					$arr=array("course_id"=>$course_id,"content_title"=>$content_title,"content_description"=>$content_description,"content_file"=>$content_file);
					
					$res=$this->insert('course_content',$arr);
					if($res)
					{
						echo "<script>
							alert('Course add suuccessfully');
							window.location='manage_courses';
						</script>";
					}
					else
					{
						echo "Not success";
					}
				}
			$course_arr=$this->select('courses');
				
				include_once('add_content.php');
			break;
			
			case '/manage_content':
				$content_arr=$this->select('course_content');
				include_once('manage_content.php');
			break;

			case '/add_vedio':
			$courses_arr=$this->select('courses');
				if(isset($_REQUEST['submit']))
				{
					
					$course_id=$_REQUEST['course_id'];
					$video_title=$_REQUEST['video_title'];
					$video_url=$_REQUEST['video_url'];
					
					
					
					
					
					$arr=array("course_id"=>$course_id,"video_title"=>$video_title,"video_url"=>$video_url);
					
					$res=$this->insert('course_videos',$arr);
					if($res)
					{
						echo "<script>
							alert('Course add suuccessfully');
							window.location='add_vedio';
						</script>";
					}
					else
					{
						echo "Not success";
					}
				}
			$course_arr=$this->select('courses');
			
				include_once('add_vedio.php');
			break;
			
			case '/manage_vedio':
				$vedio_arr=$this->select('course_videos');
				include_once('manage_vedio.php');
			break;

			case '/add_jobs':
			$courses_arr=$this->select('courses');
				if(isset($_REQUEST['submit']))
				{
					
					$course_id=$_REQUEST['course_id'];
					$company_name=$_REQUEST['company_name'];
					$job_title=$_REQUEST['job_title'];
					$job_description=$_REQUEST['job_description'];
					
					
					
					
					
					$arr=array("course_id"=>$course_id,"company_name"=>$company_name,"job_title"=>$job_title,"job_description"=>$job_description);
					
					$res=$this->insert('jobs_companies',$arr);
					if($res)
					{
						echo "<script>
							alert('Course add suuccessfully');
							window.location='manage_jobs';
						</script>";
					}
					else
					{
						echo "Not success";
					}
				}
			$course_arr=$this->select('courses');
				include_once('add_jobs.php');
			break;
			
			case '/manage_jobs':
				$jobs_arr=$this->select('jobs_companies');
				include_once('manage_jobs.php');
			break;

			case '/add_interview_question':
			$courses_arr=$this->select('courses');
				if(isset($_REQUEST['submit']))
				{
					
					$course_id=$_REQUEST['course_id'];
					$question_pdf=$_REQUEST['question_pdf'];
					
					
					
					
					
					
					$arr=array("course_id"=>$course_id,"question_pdf"=>$question_pdf);
					
					$res=$this->insert('interview_questions',$arr);
					if($res)
					{
						echo "<script>
							alert('Course add suuccessfully');
							window.location='add_interview_question';
						</script>";
					}
					else
					{
						echo "Not success";
					}
				}
			$course_arr=$this->select('courses');
				include_once('add_interview_question.php');
			break;
			
			case '/manage_interview_question':
				$Question_arr=$this->select('interview_questions');
				include_once('manage_interview_question.php');
			break;
			case '/manage_inquiry':
				$inquiry_array=$this->select('inquiries');
				include_once('manage_inquiry.php');
			break;
			
			case '/manage_customer':
				$cust_arr=$this->select('customer');
				include_once('manage_customer.php');
			break;
			
			
			default:
				include_once('404.html');
			break;
		}
		
	}
	
}
$obj=new control;




?>