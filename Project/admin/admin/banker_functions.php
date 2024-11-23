<?php
function addCustomer() {
    $data = readData();
    echo "Enter Customer ID: ";
    $id = trim(fgets(STDIN));
    echo "Enter Customer Name: ";
    $name = trim(fgets(STDIN));
    echo "Enter Initial Balance: ";
    $balance = trim(fgets(STDIN));

    $data['customers'][$id] = ['name' => $name, 'balance' => $balance];
    writeData($data);
    echo "Customer added successfully.\n";
}

function viewCustomer() {
    $data = readData();
    echo "Enter Customer ID: ";
    $id = trim(fgets(STDIN));
    
    if (isset($data['customers'][$id])) {
        echo "ID: $id\n";
        echo "Name: " . $data['customers'][$id]['name'] . "\n";
        echo "Balance: " . $data['customers'][$id]['balance'] . "\n";
    } else {
        echo "Customer not found.\n";
    }
}

function searchCustomer() {
    $data = readData();
    echo "Enter Customer Name: ";
    $name = trim(fgets(STDIN));

    $found = false;
    foreach ($data['customers'] as $id => $customer) {
        if (strtolower($customer['name']) === strtolower($name)) {
            echo "ID: $id\n";
            echo "Name: " . $customer['name'] . "\n";
            echo "Balance: " . $customer['balance'] . "\n";
            $found = true;
            break;
        }
    }
    
    if (!$found) {
        echo "Customer not found.\n";
    }
}

function viewAllCustomers() {
    $data = readData();
    foreach ($data['customers'] as $id => $customer) {
        echo "ID: $id\n";
        echo "Name: " . $customer['name'] . "\n";
        echo "Balance: " . $customer['balance'] . "\n";
    }
}

function viewTotalAmounts() {
    $data = readData();
    $total = 0;
    foreach ($data['customers'] as $customer) {
        $total += $customer['balance'];
    }
    echo "Total Amount in Bank: $total\n";
}
?>
