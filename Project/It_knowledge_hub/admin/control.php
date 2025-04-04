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
                if (isset($_REQUEST['login'])) {
                    $email = $_REQUEST['email'];
                    $password = $_REQUEST['password']; // User entered password
            
                    $where = array("email" => $email);
                    $res = $this->select_where('admin', $where);
                    $chk = $res->num_rows;
            
                    if ($chk == 1) {
                        $fetch = $res->fetch_object();
                        $db_password = $fetch->password; // Plain text password from DB
            
                        if ($password == $db_password) { // Direct comparison
                            $_SESSION['adminname'] = $fetch->email;
                            $_SESSION['adminid'] = $fetch->admin_id;
            
                            echo "<script>
                                alert('Login successfully');
                                window.location='dashboard.php'; // Ensure dashboard.php is correct
                            </script>";
                        } else {
                            echo "<script>
                                alert('Login failed due to wrong credential');
                                window.location='admin-login'; // Redirect back to login page
                            </script>";
                        }
                    } else {
                        echo "<script>
                            alert('User not found');
                            window.location='admin-login'; // Redirect back to login page
                        </script>";
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
             echo $img=$_FILES['img']['name'];	
                   
				   $path='upload/categories/'.$img;     // path
					$dupcate_img=$_FILES['img']['tmp_name'];  // duplicate imag get
					move_uploaded_file($dupcate_img,$path);  // move duplicate img in path
								 
					
					$arr=array("category_name"=>$category_name,"description"=>$description,"img"=>$img);
					
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
			
			case '/edit_category':
				if(isset($_REQUEST['editbtn']))
				{
					$category_id=$_REQUEST['editbtn'];
					
					$where=array("category_id"=>$category_id);
					$res=$this->select_where('it_categories',$where);
					$fetch=$res->fetch_object();
					
					$old_cate_img=$fetch->img;
					
					include_once('edit_category.php');
					
					if(isset($_REQUEST['save']))
					{
						$category_name=$_REQUEST['category_name'];
						$description=$_REQUEST['description'];
						
						if($_FILES['img']['size']>0)
						{
							echo $img=$_FILES['img']['name'];
							// upload img in folder
							$path='upload/categories/'.$img;     // path
							$dupcate_img=$_FILES['img']['tmp_name'];  // duplicate imag get
							move_uploaded_file($dupcate_img,$path);  // move duplicate img in path
							
							$arr=array("category_name"=>$category_name,"description"=>$description,"img"=>$img);
							unlink('upload/categories/'.$old_cate_img);
						}
						else
						{
							$arr=array("category_name"=>$category_name,"description"=>$description);
						}
						
						$res=$this->update('it_categories',$arr,$where);
						if($res)
						{
							echo "<script>
								alert('Categories Update suuccessfully');
								window.location='manage_category';
							</script>";
						}
						else
						{
							echo "Not success";
						}
					}
					
				}
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
					echo $img=$_FILES['img']['name'];	
                   
				   $path='upload/categories/'.$img;     // path
					$dupcate_img=$_FILES['img']['tmp_name'];  // duplicate imag get
					move_uploaded_file($dupcate_img,$path);  // move duplicate img in path
					
					
					
					
					$arr=array("course_name"=>$course_name,"category_id"=>$category_id,"description"=>$description,"img"=>$img);
					
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
			
			case '/edit_courses':
			$cate_arr=$this->select('it_categories');
    if (isset($_REQUEST['editbtn'])) {
        $course_id = $_REQUEST['editbtn'];
        
        // Fetch the existing course data based on the course_id
        $where = array("course_id" => $course_id);
        $res = $this->select_where('courses', $where);
        $fetch = $res->fetch_object();
        
        // Store the old image to handle replacement
        $old_course_img = $fetch->img;
        
        include_once('edit_courses.php');
        
        if (isset($_REQUEST['save'])) {
            $course_name = $_REQUEST['course_name'];
            $category_id = $_REQUEST['category_id'];
            $description = $_REQUEST['description'];
            
            // Handle image update
            if ($_FILES['img']['size'] > 0) {
                $img = $_FILES['img']['name'];
                // Define the upload path
                $path = 'upload/courses/' . $img;
                $tmp_img = $_FILES['img']['tmp_name']; // Get temporary file
                move_uploaded_file($tmp_img, $path);  // Move file to the upload path
                
                // Prepare the update array with the new image
                $arr = array(
                    "course_name" => $course_name,
                    "category_id" => $category_id,
                    "description" => $description,
                    "img" => $img
                );
                // Delete the old image
                unlink('upload/courses/' . $old_course_img);
            } else {
                // Prepare the update array without updating the image
                $arr = array(
                    "course_name" => $course_name,
                    "category_id" => $category_id,
                    "description" => $description
                );
            }
            
            // Perform the update operation
            $res = $this->update('courses', $arr, $where);
            if ($res) {
                echo "<script>
                    alert('Course updated successfully');
                    window.location='manage_courses';
                </script>";
            } else {
                echo "Update failed.";
            }
        }
    }
    break;

			
			
			
			case '/manage_courses':
				$course_array=$this->select('courses');
				include_once('manage_courses.php');
			break;

            case '/add_lessons':
                $courses_arr=$this->select('courses');
                    if(isset($_REQUEST['submit']))
                    {
                        $course_id=$_REQUEST['course_id'];
                        $topic_title=$_REQUEST['topic_title'];
                        $topic_content=$_REQUEST['topic_content'];
                    
                        
                        
                        
                        $arr=array("course_id"=>$course_id,"topic_title"=>$topic_title,"topic_content"=>$topic_content);
                        
                        $res=$this->insert('course_topics',$arr);
                        if($res)
                        {
                            echo "<script>
                                alert('Course add suuccessfully');
                                window.location='manage_lessons';
                            </script>";
                        }
                        else
                        {
                            echo "Not success";
                        }
                    }
                    include_once('add_lessons.php');
                break;

                case '/manage_lessons':
                    $lessons_Arr=$this->select('course_topics');
                    include_once('manage_lessons.php');
                break;

			case '/add_content':
			$courses_arr=$this->select('courses');
				if(isset($_REQUEST['submit']))
				{
					
					$course_id=$_REQUEST['course_id'];
					$content_title=$_REQUEST['content_title'];
					$content_description=$_REQUEST['content_description'];
					$syntax=$_REQUEST['syntax'];
					$example_code=$_REQUEST['example_code'];
					$detailed_info=$_REQUEST['detailed_info'];
					$Market_Demand=$_REQUEST['Market_Demand'];
					$Career_Opportunities=$_REQUEST['Career_Opportunities'];
					
					echo $img=$_FILES['img']['name'];	
                   
				   $path='upload/categories/'.$img;     // path
					$dupcate_img=$_FILES['img']['tmp_name'];  // duplicate imag get
					move_uploaded_file($dupcate_img,$path);  // move duplicate img in path
					
					
					
					
					$arr=array("course_id"=>$course_id,"content_title"=>$content_title,"content_description"=>$content_description,"syntax"=>$syntax,"example_code"=>$example_code,"detailed_info"=>$detailed_info,"Market_Demand"=>$Market_Demand,"Career_Opportunities"=>$Career_Opportunities,"img"=>$img);
					
					$res=$this->insert('course_content',$arr);
					if($res)
					{
						echo "<script>
							alert('Course add suuccessfully');
							window.location='manage_content';
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
			
			case '/edit_content':
    $courses_arr = $this->select('courses');
    
    if (isset($_REQUEST['editbtn'])) {
        $content_id = $_REQUEST['editbtn'];
        
        // Fetch the existing content data based on the content_id
        $where = array("content_id" => $content_id);
        $res = $this->select_where('course_content', $where);
        $fetch = $res->fetch_object();
        
        // Store the old image to handle replacement
        $old_content_img = $fetch->img;
        
        include_once('edit_content.php');
        
        if (isset($_REQUEST['save'])) {
            $course_id = $_REQUEST['course_id'];
            $content_title = $_REQUEST['content_title'];
            $content_description = $_REQUEST['content_description'];
            $syntax = $_REQUEST['syntax'];
            $example_code = $_REQUEST['example_code'];
            $detailed_info = $_REQUEST['detailed_info'];
            $Market_Demand = $_REQUEST['Market_Demand'];
            $Career_Opportunities = $_REQUEST['Career_Opportunities'];
            
            // Handle image update
            if ($_FILES['img']['size'] > 0) {
                $img = $_FILES['img']['name'];
                // Define the upload path
                $path = 'upload/content/' . $img;
                $tmp_img = $_FILES['img']['tmp_name']; // Get temporary file
                move_uploaded_file($tmp_img, $path);  // Move file to the upload path
                
                // Prepare the update array with the new image
                $arr = array(
                    "course_id" => $course_id,
                    "content_title" => $content_title,
                    "content_description" => $content_description,
                    "syntax" => $syntax,
                    "example_code" => $example_code,
                    "detailed_info" => $detailed_info,
                    "Market_Demand" => $Market_Demand,
                    "Career_Opportunities" => $Career_Opportunities,
                    "img" => $img
                );
                // Delete the old image
                unlink('upload/content/' . $old_content_img);
            } else {
                // Prepare the update array without updating the image
                $arr = array(
                    "course_id" => $course_id,
                    "content_title" => $content_title,
                    "content_description" => $content_description,
                    "syntax" => $syntax,
                    "example_code" => $example_code,
                    "detailed_info" => $detailed_info,
                    "Market_Demand" => $Market_Demand,
                    "Career_Opportunities" => $Career_Opportunities
                );
            }
            
            // Perform the update operation
            $res = $this->update('course_content', $arr, $where);
            if ($res) {
                echo "<script>
                    alert('Content updated successfully');
                    window.location='manage_content';
                </script>";
            } else {
                echo "Update failed.";
            }
        }
    }
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
			
			case '/edit_video':
    $courses_arr = $this->select('courses');
    
    if (isset($_REQUEST['editbtn'])) {
        $video_id = $_REQUEST['editbtn'];
        
        // Fetch the existing video data based on the video_id
        $where = array("video_id" => $video_id);
        $res = $this->select_where('course_videos', $where);
        $fetch = $res->fetch_object();
        
        // Store the old video URL to handle replacement
        $old_video_url = $fetch->video_url;
        
        include_once('edit_video.php');
        
        if (isset($_REQUEST['save'])) {
            $course_id = $_REQUEST['course_id'];
            $video_title = $_REQUEST['video_title'];
            
            // Handle video URL update
            if ($_FILES['video_url']['size'] > 0) {
                $video_url = $_FILES['video_url']['name'];
                // Define the upload path
                $path = 'upload/videos/' . $video_url;
                $tmp_video = $_FILES['video_url']['tmp_name']; // Get temporary file
                move_uploaded_file($tmp_video, $path);  // Move file to the upload path
                
                // Prepare the update array with the new video URL
                $arr = array(
                    "course_id" => $course_id,
                    "video_title" => $video_title,
                    "video_url" => $video_url
                );
                // Delete the old video file if necessary
                unlink('upload/videos/' . $old_video_url);
            } else {
                // Prepare the update array without updating the video URL
                $arr = array(
                    "course_id" => $course_id,
                    "video_title" => $video_title
                );
            }
            
            // Perform the update operation
            $res = $this->update('course_videos', $arr, $where);
            if ($res) {
                echo "<script>
                    alert('Video updated successfully');
                    window.location='manage_vedio';
                </script>";
            } else {
                echo "Update failed.";
            }
        }
    }
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
			
			case '/edit_jobs':
    // Fetch the courses to populate the course dropdown
    $courses_arr = $this->select('courses');
    
    if (isset($_REQUEST['editbtn'])) {
        $job_id = $_REQUEST['editbtn'];
        
        // Fetch the existing job data based on the job_id
        $where = array("job_id" => $job_id);
        $res = $this->select_where('jobs_companies', $where);
        $fetch = $res->fetch_object();
        
        include_once('edit_jobs.php');
        
        if (isset($_REQUEST['save'])) {
            $course_id = $_REQUEST['course_id'];
            $company_name = $_REQUEST['company_name'];
            $job_title = $_REQUEST['job_title'];
            $job_description = $_REQUEST['job_description'];
            
            // Prepare the update array with the new job data
            $arr = array(
                "course_id" => $course_id,
                "company_name" => $company_name,
                "job_title" => $job_title,
                "job_description" => $job_description
            );
            
            // Perform the update operation
            $res = $this->update('jobs_companies', $arr, $where);
            if ($res) {
                echo "<script>
                    alert('Job information updated successfully');
                    window.location='manage_jobs';
                </script>";
            } else {
                echo "Update failed.";
            }
        }
    }
    break;

			
			case '/manage_jobs':
				$jobs_arr=$this->select('jobs_companies');
				include_once('manage_jobs.php');
			break;

	case '/add_interview_question':
    $courses_arr = $this->select('courses');

    if (isset($_REQUEST['submit'])) {
        $course_id = $_REQUEST['course_id'];
        $question_pdf = $_FILES['question_pdf'];

        // File upload handling
        $target_dir = "upload/questions/"; // Ensure this directory exists
        $target_file = $target_dir . basename($question_pdf["name"]);
        $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if the file is a valid PDF
        if ($file_type != "pdf") {
            echo "<script>alert('Only PDF files are allowed.');</script>";
        } else {
            // Move the file to the server
            if (move_uploaded_file($question_pdf["tmp_name"], $target_file)) {
                // Prepare data for insertion
                $arr = array("course_id" => $course_id, "question_pdf" => $target_file);

                $res = $this->insert('interview_questions', $arr);
                if ($res) {
                    echo "<script>
                        alert('Interview question added successfully');
                        window.location='add_interview_question';
                    </script>";
                } else {
                    echo "Insertion failed.";
                }
            } else {
                echo "<script>alert('Error uploading the file.');</script>";
            }
        }
    }

    $course_arr = $this->select('courses');
    include_once('add_interview_question.php');
    break;

			
			case '/edit_questions':
    // Fetch courses to populate the course dropdown
    $courses_arr = $this->select('courses');
    
    if (isset($_REQUEST['editbtn'])) {
        $question_id = $_REQUEST['editbtn'];
        
        // Fetch the existing question data based on the question_id
        $where = array("question_id" => $question_id);
        $res = $this->select_where('interview_questions', $where);
        $fetch = $res->fetch_object();
        
        // Store the old PDF file name to handle replacement
        $old_question_pdf = $fetch->question_pdf;
        
        include_once('edit_questions.php');
        
       if (isset($_REQUEST['save'])) {
    $course_id = $_REQUEST['course_id'];


    // Fetch old data first
    $where = array("question_id" => $question_id);
    $res = $this->select_where('interview_questions', $where);
    $fetch = $res->fetch_object();

    // Initialize update array with old values
    $arr = array(
        "course_id" => !empty($course_id) ? $course_id : $fetch->course_id,
    );

    // Handle PDF file update
    if ($_FILES['question_pdf']['size'] > 0) {
        $question_pdf = $_FILES['question_pdf']['name'];
        $path = 'upload/questions/' . $question_pdf;
        $tmp_pdf = $_FILES['question_pdf']['tmp_name'];
        move_uploaded_file($tmp_pdf, $path);

        // Delete old PDF file
        if (!empty($fetch->question_pdf)) {
            unlink('upload/questions/' . $fetch->question_pdf);
        }

        // Add new PDF to update array
        $arr["question_pdf"] = $question_pdf;
    }

    // Perform the update operation
    $res = $this->update('interview_questions', $arr, $where);
    if ($res) {
        echo "<script>
            alert('Question updated successfully');
            window.location='manage_interview_question';
        </script>";
    } else {
        echo "Update failed.";
    }
}
    }
    break;

			
			case '/manage_interview_question':
				$Question_arr=$this->select('interview_questions');
				include_once('manage_interview_question.php');
			break;
			
			case '/add_news_updates':
    // Fetch categories and courses for dropdown options
    $categories_arr = $this->select('it_categories');
    $courses_arr = $this->select('courses');

    if (isset($_REQUEST['submit'])) {
        // Get form data
        $headline = $_REQUEST['headline'];
        $summary = $_REQUEST['summary'];
        $source_url = $_REQUEST['source_url'];
        $published_date = $_REQUEST['published_date'];
        $category_id = $_REQUEST['category_id'];
        $course_id = $_REQUEST['course_id'];

        // Prepare data to be inserted
        $arr = array(
            "headline" => $headline,
            "summary" => $summary,
            "source_url" => $source_url,
            "published_date" => $published_date,
            "category_id" => $category_id,
            "course_id" => $course_id
        );

        // Insert the data into the news_updates table
        $res = $this->insert('news_updates', $arr);

        // Check if insertion was successful
        if ($res) {
            echo "<script>
                alert('News update added successfully');
                window.location='add_news_update';
            </script>";
        } else {
            echo "Failed to add news update";
        }
    }

    // Fetch categories and courses again in case there was an error or reload
    $categories_arr = $this->select('it_categories');
    $courses_arr = $this->select('courses');

    // Include the form page for adding news update
    include_once('add_news_updates.php');
    break;
	
	case '/edit_news_updates':
    // Fetch courses to populate the course dropdown
    $courses_arr = $this->select('courses');
	 $cate_arr = $this->select('it_categories');
    
    if (isset($_REQUEST['editbtn'])) {
        $news_id = $_REQUEST['editbtn'];
        
        // Fetch the existing question data based on the question_id
        $where = array("news_id" => $news_id);
        $res = $this->select_where('news_updates', $where);
        $fetch = $res->fetch_object();
        
        // Store the old PDF file name to handle replacement
        $old_question_pdf = $fetch->question_pdf;
        
        include_once('edit_news_updates.php');
        
       if (isset($_REQUEST['save'])) {
    $course_id = $_REQUEST['course_id'];
    $category_id = $_REQUEST['category_id'];
    $headline = $_REQUEST['headline'];
    $summary = $_REQUEST['summary'];
    $source_url = $_REQUEST['source_url'];
    $published_date = $_REQUEST['published_date'];
    

    // Fetch old data first
    $where = array("news_id" => $news_id);
    $res = $this->select_where('news_updates', $where);
    $fetch = $res->fetch_object();

    // Initialize update array with old values
    $arr = array(
        "course_id" => !empty($course_id) ? $course_id : $fetch->course_id,
        "category_id" => !empty($category_id) ? $category_id : $fetch->category_id,
        "headline" => !empty($headline) ? $headline : $fetch->headline,
        "summary" => !empty($summary) ? $summary : $fetch->summary,
        "source_url" => !empty($source_url) ? $source_url : $fetch->source_url,
        "published_date" => !empty($published_date) ? $published_date : $fetch->published_date,
      
    );

    // Handle PDF file update
  /**  if ($_FILES['question_pdf']['size'] > 0) {
        $question_pdf = $_FILES['question_pdf']['name'];
        $path = 'upload/questions/' . $question_pdf;
        $tmp_pdf = $_FILES['question_pdf']['tmp_name'];
        move_uploaded_file($tmp_pdf, $path);

        // Delete old PDF file
        if (!empty($fetch->question_pdf)) {
            unlink('upload/questions/' . $fetch->question_pdf);
        }

        // Add new PDF to update array
        $arr["question_pdf"] = $question_pdf;
    }**/

    // Perform the update operation
    $res = $this->update('news_updates', $arr, $where);
    if ($res) {
        echo "<script>
            alert('news updated successfully');
            window.location='manage_news_updates';
        </script>";
    } else {
        echo "Update failed.";
    }
}
    }
    break;
	
	
	
	case '/manage_news_updates':
				$news_updates_array=$this->select('news_updates');
				include_once('manage_news_updates.php');
			break;
			
	 


			
			case '/manage_inquiry':
				$inquiry_array=$this->select('contact_us');
				include_once('manage_inquiry.php');
			break;
			
			case '/manage_customer':
				$cust_arr=$this->select('customers');
				include_once('manage_customer.php');
			break;
			case '/delete':
				
	 			
           if (isset($_REQUEST['del_categories'])) {
        $id = $_REQUEST['del_categories'];
        $where = array("category_id" => $id);

        // Retrieve image for deletion
        $sel_sel = $this->select_where('it_categories', $where);
        $fetch = $sel_sel->fetch_object();
        $del_img = $fetch->img;

        // Delete record from the database
        $res = $this->delete_where('it_categories', $where);
        if ($res) {
            // No need to unlink for BLOB images stored in the database
            echo "<script>
                alert('Categories Deleted successfully');
                window.location='manage_category';
            </script>";
        }
      }
	  	
           if (isset($_REQUEST['del_courses'])) {
        $id = $_REQUEST['del_courses'];
        $where = array("course_id " => $id);

        // Retrieve image for deletion
        $sel_sel = $this->select_where('courses', $where);
        $fetch = $sel_sel->fetch_object();
        $del_img = $fetch->img;

        // Delete record from the database
        $res = $this->delete_where('courses', $where);
        if ($res) {
            // No need to unlink for BLOB images stored in the database
            echo "<script>
                alert('Course Deleted successfully');
                window.location='manage_courses';
            </script>";
        }
      }
	  
	  
           if (isset($_REQUEST['del_content'])) {
        $id = $_REQUEST['del_content'];
        $where = array("content_id" => $id);

        // Retrieve image for deletion
        $sel_sel = $this->select_where('course_content', $where);
        $fetch = $sel_sel->fetch_object();
        $del_img = $fetch->img;

        // Delete record from the database
        $res = $this->delete_where('course_content', $where);
        if ($res) {
            // No need to unlink for BLOB images stored in the database
            echo "<script>
                alert('Categories Deleted successfully');
                window.location='manage_content';
            </script>";
        }
		   }   
	  
	   if (isset($_REQUEST['del_vedio'])) {
        $id = $_REQUEST['del_vedio'];
        $where = array("video_id" => $id);

        // Retrieve image for deletion
        $sel_sel = $this->select_where('course_videos', $where);
        $fetch = $sel_sel->fetch_object();
        $del_img = $fetch->img;

        // Delete record from the database
        $res = $this->delete_where('course_videos', $where);
        if ($res) {
            // No need to unlink for BLOB images stored in the database
            echo "<script>
                alert('Categories Deleted successfully');
                window.location='manage_vedio';
            </script>";
        }
      }
	  
	  if (isset($_REQUEST['del_jobs'])) {
        $id = $_REQUEST['del_jobs'];
        $where = array("job_id" => $id);

        // Retrieve image for deletion
        $sel_sel = $this->select_where('jobs_companies', $where);
        $fetch = $sel_sel->fetch_object();
        $del_img = $fetch->img;

        // Delete record from the database
        $res = $this->delete_where('jobs_companies', $where);
        if ($res) {
            // No need to unlink for BLOB images stored in the database
            echo "<script>
                alert('Categories Deleted successfully');
                window.location='manage_jobs';
            </script>";
        }
      }
	  
	   if (isset($_REQUEST['del_interview'])) {
        $id = $_REQUEST['del_interview'];
        $where = array("question_id" => $id);

        // Retrieve image for deletion
        $sel_sel = $this->select_where('interview_questions', $where);
        $fetch = $sel_sel->fetch_object();
        $del_img = $fetch->img;

        // Delete record from the database
        $res = $this->delete_where('interview_questions', $where);
        if ($res) {
            // No need to unlink for BLOB images stored in the database
            echo "<script>
                alert('Categories Deleted successfully');
                window.location='manage_interview_question';
            </script>";
        }
      }
	  
	   if (isset($_REQUEST['del_contact_us'])) {
        $id = $_REQUEST['del_contact_us'];
        $where = array("contact_id" => $id);

        // Retrieve image for deletion
        $sel_sel = $this->select_where('contact_us', $where);
        $fetch = $sel_sel->fetch_object();
        $del_img = $fetch->img;

        // Delete record from the database
        $res = $this->delete_where('contact_us', $where);
        if ($res) {
            // No need to unlink for BLOB images stored in the database
            echo "<script>
                alert('Categories Deleted successfully');
                window.location='manage_inquiry';
            </script>";
        }
      }
	  
	  if(isset($_REQUEST['del_customer']))
				{
					$id=$_REQUEST['del_customer'];
					$where=array("customer_id"=>$id);
					
					// image get for delete
					$sel_sel=$this->select_where('customers',$where);
					$fetch=$sel_sel->fetch_object();
					$del_img=$fetch->img;
					
					$res=$this->delete_where('customers',$where);
					if($res)
					{
						unlink('../website/img/customer/'.$del_img); // del image
						echo "<script>
							alert('Customer Deleted suuccessfully');
							window.location='manage_customer';
						</script>";
					}
				}
				
		break;
		
		case '/status':
				
				if(isset($_REQUEST['status_customer']))
				{
					$id=$_REQUEST['status_customer'];
					$where=array("customer_id"=>$id);
					
					// status get for delete
					$sel_sel=$this->select_where('customers',$where);
					$fetch=$sel_sel->fetch_object();
					$status=$fetch->status;
					
					if($status=="Block")
					{
						$arr=array("status"=>"Unblocked");
						$res=$this->update('customers',$arr,$where);
						if($res)
						{
							
							echo "<script>
								alert('Customer Unblock suuccessfully');
								window.location='manage_customer';
							</script>";
						}
					}
					else
					{
						$arr=array("status"=>"Block");
						$res=$this->update('customers',$arr,$where);
						if($res)
						{
							unset($_SESSION['userid']);
							unset($_SESSION['username']);
							echo "<script>
								alert('Customer Block suuccessfully');
								window.location='manage_customer';
							</script>";
						}
					}
					
				}
			
			
			default:
				include_once('404.html');
			break;
		}
		
	}
	
}
$obj=new control;




?>