•<!--  Consider the exercise11and add a edit link near delete link e.g. Clicking up on edit
button a particular row should be open in
• editing mode
• e.g. on the Particular row there should be filled text box with data and on the option
column there should be a confirm button clicking upon it arrow should be updated. -->
<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'practicedb');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if update form was submitted
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    
    // Update query
    $stmt = $conn->prepare("UPDATE users SET name = ? WHERE id = ?");
    $stmt->bind_param("si", $name, $id);
    
    if ($stmt->execute()) {
        echo "Record updated successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}

// Fetch rows from database
$result = $conn->query("SELECT id, name FROM users");

echo "<table border='1'>";
echo "<tr><th>ID</th><th>Name</th><th>Action</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>{$row['id']}</td>";
    if (isset($_GET['edit']) && $_GET['edit'] == $row['id']) {
        // Show form fields when in edit mode
        echo "<form method='POST'>";
        echo "<input type='hidden' name='id' value='{$row['id']}'>";
        echo "<td><input type='text' name='name' value='{$row['name']}'></td>";
        echo "<td><button type='submit' name='update'>Confirm</button></td>";
        echo "</form>";
    } else {
        // Display non-editable row data
        echo "<td>{$row['name']}</td>";
        echo "<td>
                <a href='?edit={$row['id']}'>Edit</a> | 
                <a href='delete.php?id={$row['id']}'>Delete</a>
              </td>";
    }
    echo "</tr>";
}
echo "</table>";
$conn->close();
?>
