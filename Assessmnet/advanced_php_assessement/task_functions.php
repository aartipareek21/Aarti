<?php
// Function to add a task
function addTask($task) {
    if (!empty($task)) {
        $_SESSION['tasks'][] = $task;
    }
}

// Function to delete a task by index
function deleteTask($index) {
    if (isset($_SESSION['tasks'][$index])) {
        unset($_SESSION['tasks'][$index]);
        $_SESSION['tasks'] = array_values($_SESSION['tasks']); // Re-index array
    }
}

// Function to clear all tasks
function clearAllTasks() {
    $_SESSION['tasks'] = [];
}
?>
