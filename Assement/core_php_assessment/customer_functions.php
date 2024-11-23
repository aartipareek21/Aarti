<?php
function viewAccount() {
    $data = readData();
    
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        echo "<form method='POST'>";
        echo "Enter Customer ID: <input type='text' name='id'><br>";
        echo "<input type='hidden' name='action' value='viewAccount'>";
        echo "<input type='submit' value='View Account'>";
        echo "</form>";
    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['action'] === 'viewAccount') {
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

function deposit() {
    $data = readData();
    
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        echo "<form method='POST'>";
        echo "Enter Customer ID: <input type='text' name='id'><br>";
        echo "Enter Amount to Deposit: <input type='text' name='amount'><br>";
        echo "<input type='hidden' name='action' value='deposit'>";
        echo "<input type='submit' value='Deposit'>";
        echo "</form>";
    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['action'] === 'deposit') {
        $id = $_POST['id'];
        $amount = $_POST['amount'];
        
        if (isset($data['customers'][$id]) && is_numeric($amount)) {
            $data['customers'][$id]['balance'] += $amount;
            writeData($data);
            echo "Deposit successful. New Balance: " . $data['customers'][$id]['balance'];
        } else {
            echo "Customer not found or invalid amount.";
        }
    }
}

function withdraw() {
    $data = readData();
    
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        echo "<form method='POST'>";
        echo "Enter Customer ID: <input type='text' name='id'><br>";
        echo "Enter Amount to Withdraw: <input type='text' name='amount'><br>";
        echo "<input type='hidden' name='action' value='withdraw'>";
        echo "<input type='submit' value='Withdraw'>";
        echo "</form>";
    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['action'] === 'withdraw') {
        $id = $_POST['id'];
        $amount = $_POST['amount'];
        
        if (isset($data['customers'][$id]) && is_numeric($amount)) {
            if ($data['customers'][$id]['balance'] >= $amount) {
                $data['customers'][$id]['balance'] -= $amount;
                writeData($data);
                echo "Withdrawal successful. New Balance: " . $data['customers'][$id]['balance'];
            } else {
                echo "Insufficient funds.";
            }
        } else {
            echo "Customer not found or invalid amount.";
        }
    }
}
?>
