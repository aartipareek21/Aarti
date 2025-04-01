<?php
include_once('header.php');

// Prevent "Undefined variable" error
$arr_topic = $arr_topic ?? [];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Topics View - Professional UI</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7f6;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        
        header {
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            background: #fff;
            z-index: 1000;
            padding: 15px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            font-size: 20px;
            font-weight: bold;
            text-align: center;
        }
        
        .main-container {
            display: flex;
            flex-grow: 1;
            margin-top: 70px;
            animation: fadeIn 0.5s ease-in-out;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .sidebar {
            width: 25%;
            background: #ffffff;
            padding: 20px;
            height: calc(100vh - 70px);
            overflow-y: auto;
            border-right: 2px solid #ddd;
            box-shadow: 2px 0px 10px rgba(0, 0, 0, 0.05);
            animation: slideIn 0.5s ease-in-out;
        }

        @keyframes slideIn {
            from { transform: translateX(-100px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
        
        .sidebar h3 {
            font-size: 22px;
            color: #333;
            margin-bottom: 15px;
            font-weight: 600;
        }
        
        .sidebar a {
            display: block;
            padding: 12px 15px;
            margin: 8px 0;
            background: #f8f9fa;
            border-radius: 6px;
            text-decoration: none;
            color: #333;
            font-size: 16px;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .sidebar a:hover, .sidebar a.active {
            background: #6c63ff;
            color: #fff;
            font-weight: 600;
            transform: scale(1.05);
        }
        
        .content {
            flex-grow: 1;
            padding: 40px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.05);
            margin: 20px;
            animation: fadeIn 0.5s ease-in-out;
        }
        
        .content h2 {
            font-size: 28px;
            font-weight: 700;
            color: #333;
            margin-bottom: 15px;
        }
        
        .content p {
            font-size: 18px;
            line-height: 1.6;
            color: #555;
            text-align: justify;
        }
        
        footer {
            background: #fff;
            padding: 15px;
            text-align: center;
            box-shadow: 0px -2px 5px rgba(0, 0, 0, 0.1);
            margin-top: auto;
        }
    </style>
</head>
<body>


<div class="main-container">
    <!-- Sidebar -->
    <div class="sidebar">
        <h3>Topics</h3>
        <?php 
        if (!empty($arr_topic)) { 
            foreach ($arr_topic as $topic) { ?>
                <a href="?topic_id=<?php echo urlencode($topic->topic_id); ?>" 
                   class="<?php echo (isset($_GET['topic_id']) && $_GET['topic_id'] == $topic->topic_id) ? 'active' : ''; ?>">
                    <?php echo htmlspecialchars($topic->topic_title); ?>
                </a>
        <?php 
            }
        } 
        ?>
    </div>
 
  

    <!-- Main Content -->
    <div class="content">
        <?php
        $selected_topic = null;

        if (isset($_GET['topic_id'])) {
            $topic_id = $_GET['topic_id'];
            $where = array("topic_id" => $topic_id);
            $res_topic = $this->select_where('course_topics', $where);
            $selected_topic = $res_topic->fetch_object();
        }

        if ($selected_topic) { ?>
            <h2><?php echo htmlspecialchars($selected_topic->topic_title); ?></h2>
            <p><?php echo nl2br(htmlspecialchars($selected_topic->topic_content)); ?></p>
        <?php } else { ?>
            <p>Please select a topic from the sidebar.</p>
        <?php } ?>
    </div>
</div>

</body>
</html>

<?php
include_once('footer.php');
?>
