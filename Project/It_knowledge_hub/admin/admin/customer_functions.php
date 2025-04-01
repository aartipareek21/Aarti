<?php
function viewAccount() {
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

function deposit() {
    $data = readData();
    echo "Enter Customer ID: ";
    $id = trim(fgets(STDIN));
    echo "Enter Amount to Deposit: ";
    $amount = trim(fgets(STDIN));

    if (isset($data['customers'][$id])) {
        $data['customers'][$id]['balance'] += $amount;
        writeData($data);
        echo "Deposit successful. New Balance: " . $data['customers'][$id]['balance'] . "\n";
    } else {
        echo "Customer not found.\n";
    }
}

function withdraw() {
    $data = readData();
    echo "Enter Customer ID: ";
    $id = trim(fgets(STDIN));
    echo "Enter Amount to Withdraw: ";
    $amount = trim(fgets(STDIN));

    if (isset($data['customers'][$id])) {
        if ($data['customers'][$id]['balance'] >= $amount) {
            $data['customers'][$id]['balance'] -= $amount;
            writeData($data);
            echo "Withdrawal successful. New Balance: " . $data['customers'][$id]['balance'] . "\n";
        } else {
            echo "Insufficient funds.\n";
        }
    } else {
        echo "Customer not found.\n";
    }
}
?>
