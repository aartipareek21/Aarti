<?php

include_once('model.php');   // step 1 load model 

class control extends model // step 2 extends model class
{
	
	function __construct(){ // magic function call automatic when we declare class object
				
                model::__construct(); // step 3 call model __construct

		$url=$_SERVER['PATH_INFO'];
		
		 switch($url) {
			case '/admin-login':
                include_once('index.php');
            break;
            case '/dashboard':
                include_once('dashboard.php');
            break;
            case '/language-management':
                include_once('programming-language.php');
            break;
            case '/user-authentication':
                include_once('user-authentication.php');
            break;
            
            case '/language-management':
                include_once('programming-languages.php');
            break;
            
            case '/market-demand-salaries':
                include_once('market-demand-salaries.php');
            break;
            
            case '/career-paths':
                include_once('career-paths.php');
            break;
            
            case '/benefits-of-learning':
                include_once('benefits-of-learning.php');
            break;
            
            case '/resources':
                include_once('resources.php');
            break;
            
            case '/forum':
                include_once('forum.php');
            break;
            
            case '/profile':
                include_once('profile.php');
            break;
            
            case '/news-updates':
                include_once('news-updates.php');
            break;
            
            case '/feedback':
                include_once('feedback.php');
            break;
			case '/user_authentication_table':
            $user_arr=$this->select('users');
                include_once('user_authentication_table.php');
            break;
            
            case '/programming-language-table':
            $language_arr=$this->select('programming_languages');
                include_once('programming-language-table.php');
            break;
            
            case '/market-demand-table':
            $salary_arr=$this->select('market_demand_salary');
                include_once('market-demand-table.php');
            break;
            
            case '/career-paths-table':
            $career_arr=$this->select('career_paths');
                include_once('career-paths-table.php');
            break;
            
            case '/benefits-of-learning-table':
            $benefits_arr=$this->select('benefits_of_learning');
                include_once('benefits-of-learning-table.php');
            break;
            
            case '/resources-table':
            $resou_arr=$this->select('resources');
                include_once('resources-table.php');
            break;
            
            case '/forum-table':
            $forum_arr=$this->select('forum_posts');
                include_once('forum-table.php');
            break;
            
            case '/profile-table':
            $profile_arr=$this->select('profiles');
                include_once('profile-table.php');
            break;
            
            case '/news-updates-table':
            $news_arr=$this->select('news_updates');
                include_once('news-updates-table.php');
            break;
            
            case '/feedback-table':
            $feedback_arr=$this->select('feedback');
                include_once('feedback-table.php');
            break;

             incdefault:
                // If the URL doesn't match any of the above, load a 'Page Not Found' file
               echo "page not found";
            break;
        }
    }
}

$obj=new control;




?>