<?php
session_start();
require_once 'task_functions.php';  // Include reusable business logic

// Initialize tasks array if not set
if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = [];
}

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add_task'])) {
        addTask($_POST['task_name']);
    } elseif (isset($_POST['delete_task'])) {
        deleteTask($_POST['task_index']);
    } elseif (isset($_POST['clear_all'])) {
        clearAllTasks();
    }
}

// Display the task list
$tasks = $_SESSION['tasks'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task List Manager</title>
</head>
<body>
    <h1>Task List Manager</h1>
    
    <!-- Add Task Form -->
    <form method="POST">
        <input type="text" name="task_name" placeholder="Enter task" required>
        <button type="submit" name="add_task">Add Task</button>
    </form>
    
    <!-- Task List Display -->
    <?php if (!empty($tasks)): ?>
        <ul>
            <?php foreach ($tasks as $index => $task): ?>
                <li>
                    <?php echo htmlspecialchars($task); ?>
                    <form method="POST" style="display:inline;">
                        <input type="hidden" name="task_index" value="<?php echo $index; ?>">
                        <button type="submit" name="delete_task">Delete</button>
                    </form>
                </li>
            <?php endforeach; ?>
        </ul>
        <!-- Clear All Button -->
        <form method="POST">
            <button type="submit" name="clear_all">Clear All Tasks</button>
        </form>
    <?php else: ?>
        <p>No tasks added yet.</p>
    <?php endif; ?>
</body>
</html>
