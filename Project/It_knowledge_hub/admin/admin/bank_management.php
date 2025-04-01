<?php
include 'banker_functions.php';
include 'customer_functions.php';
include 'data.php';

function displayMenu() {
    echo "Bank Management System\n";
    echo "1. Banker Menu\n";
    echo "2. Customer Menu\n";
    echo "3. Exit\n";
    echo "Select an option: ";
}

function bankerMenu() {
    echo "\nBanker Menu\n";
    echo "1. Add Customer\n";
    echo "2. View Customer\n";
    echo "3. Search Customer\n";
    echo "4. View All Customers\n";
    echo "5. View Total Amounts\n";
    echo "6. Back to Main Menu\n";
    echo "Select an option: ";
}

function customerMenu() {
    echo "\nCustomer Menu\n";
    echo "1. View Account\n";
    echo "2. Deposit\n";
    echo "3. Withdraw\n";
    echo "4. Back to Main Menu\n";
    echo "Select an option: ";
}

while (true) {
    displayMenu();
    $option = trim(fgets(STDIN));

    switch ($option) {
        case 1:
            while (true) {
                bankerMenu();
                $bankerOption = trim(fgets(STDIN));
                switch ($bankerOption) {
                    case 1:
                        addCustomer();
                        break;
                    case 2:
                        viewCustomer();
                        break;
                    case 3:
                        searchCustomer();
                        break;
                    case 4:
                        viewAllCustomers();
                        break;
                    case 5:
                        viewTotalAmounts();
                        break;
                    case 6:
                        break 2; // Exit Banker Menu
                    default:
                        echo "Invalid option. Please try again.\n";
                }
            }
            break;
        case 2:
            while (true) {
                customerMenu();
                $customerOption = trim(fgets(STDIN));
                switch ($customerOption) {
                    case 1:
                        viewAccount();
                        break;
                    case 2:
                        deposit();
                        break;
                    case 3:
                        withdraw();
                        break;
                    case 4:
                        break 2; // Exit Customer Menu
                    default:
                        echo "Invalid option. Please try again.\n";
                }
            }
            break;
        case 3:
            echo "Exiting...\n";
            exit;
        default:
            echo "Invalid option. Please try again.\n";
    }
}
?>
