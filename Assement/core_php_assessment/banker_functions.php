<?php
function addCustomer() {
    $data = readData();
    
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        echo "<form method='POST'>";
        echo "Enter Customer ID: <input type='text' name='id'><br>";
        echo "Enter Customer Name: <input type='text' name='name'><br>";
        echo "Enter Initial Balance: <input type='text' name='balance'><br>";
        echo "<input type='hidden' name='action' value='addCustomer'>";
        echo "<input type='submit' value='Add Customer'>";
        echo "</form>";
    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['action'] === 'addCustomer') {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $balance = $_POST['balance'];
        
        if (!empty($id) && !empty($name) && is_numeric($balance)) {
            $data['customers'][$id] = ['name' => $name, 'balance' => $balance];
            writeData($data);
            echo "Customer added successfully.";
        } else {
            echo "Please provide valid inputs.";
        }
    }
}

function viewCustomer() {
    $data = readData();
    
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        echo "<form method='POST'>";
        echo "Enter Customer ID: <input type='text' name='id'><br>";
        echo "<input type='hidden' name='action' value='viewCustomer'>";
        echo "<input type='submit' value='View Customer'>";
        echo "</form>";
    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['action'] === 'viewCustomer') {
        $id = $_POST['id'];
        
        if (isset($data['customers'][$id])) {
            echo "ID: $id<br>";
            echo "Name: " . $data['customers'][$id]['name'] . "<br>";
            echo "Balance: " . $data['customers'][$id]['balance'] . "<br>";
        } else {
            echo "Customer not found.";
        }
    }
}

function searchCustomer() {
    $data = readData();
    
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        echo "<form method='POST'>";
        echo "Enter Customer Name: <input type='text' name='name'><br>";
        echo "<input type='hidden' name='action' value='searchCustomer'>";
        echo "<input type='submit' value='Search Customer'>";
        echo "</form>";
    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['action'] === 'searchCustomer') {
        $name = $_POST['name'];
        $found = false;
        
        foreach ($data['customers'] as $id => $customer) {
            if (strtolower($customer['name']) === strtolower($name)) {
                echo "ID: $id<br>";
                echo "Name: " . $customer['name'] . "<br>";
                echo "Balance: " . $customer['balance'] . "<br>";
                $found = true;
                break;
            }
        }
        
        if (!$found) {
            echo "Customer not found.";
        }
    }
}

function viewAllCustomers() {
    $data = readData();
    
    echo "<h3>All Customers:</h3>";
    foreach ($data['customers'] as $id => $customer) {
        echo "ID: $id<br>";
        echo "Name: " . $customer['name'] . "<br>";
        echo "Balance: " . $customer['balance'] . "<br><br>";
    }
}

function viewTotalAmounts() {
    $data = readData();
    $total = 0;
    
    foreach ($data['customers'] as $customer) {
        $total += $customer['balance'];
    }
    
    echo "Total Amount in Bank: $total";
}
?>
