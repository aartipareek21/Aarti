    <?php
include 'banker_functions.php';
include 'customer_functions.php';
include 'data.php';

function displayMenu() {
    echo "<h1>Bank Management System</h1>";
    echo "<form method='GET'>";
    echo "1. <input type='submit' name='option' value='Banker Menu'><br>";
    echo "2. <input type='submit' name='option' value='Customer Menu'><br>";
    echo "3. <input type='submit' name='option' value='Exit'><br>";
    echo "</form>";

    if (isset($_GET['option'])) {
        handleOption($_GET['option']);
    }
}

function handleOption($option) {
    switch ($option) {
        case 'Banker Menu':
            displayBankerMenu();
            break;
        case 'Customer Menu':
            displayCustomerMenu();
            break;
        case 'Exit':
            echo "Exiting...";
            exit;
        default:
            echo "Invalid option.";
    }
}

function displayBankerMenu() {
    echo "<h2>Banker Menu</h2>";
    echo "<form method='GET'>";
    echo "1. <input type='submit' name='banker_option' value='Add Customer'><br>";
    echo "2. <input type='submit' name='banker_option' value='View Customer'><br>";
    echo "3. <input type='submit' name='banker_option' value='Search Customer'><br>";
    echo "4. <input type='submit' name='banker_option' value='View All Customers'><br>";
    echo "5. <input type='submit' name='banker_option' value='View Total Amounts'><br>";
    echo "6. <input type='submit' name='banker_option' value='Back to Main Menu'><br>";
    echo "<input type='hidden' name='option' value='Banker Menu'>";
    echo "</form>";

    if (isset($_GET['banker_option'])) {
        handleBankerOption($_GET['banker_option']);
    }
}

function handleBankerOption($option) {
    switch ($option) {
        case 'Add Customer':
            addCustomer();
            break;
        case 'View Customer':
            viewCustomer();
            break;
        case 'Search Customer':
            searchCustomer();
            break;
        case 'View All Customers':
            viewAllCustomers();
            break;
        case 'View Total Amounts':
            viewTotalAmounts();
            break;
        case 'Back to Main Menu':
            displayMenu();
            break;
        default:
            echo "Invalid option.";
    }
}

function displayCustomerMenu() {
    echo "<h2>Customer Menu</h2>";
    echo "<form method='GET'>";
    echo "1. <input type='submit' name='customer_option' value='View Account'><br>";
    echo "2. <input type='submit' name='customer_option' value='Deposit'><br>";
    echo "3. <input type='submit' name='customer_option' value='Withdraw'><br>";
    echo "4. <input type='submit' name='customer_option' value='Back to Main Menu'><br>";
    echo "<input type='hidden' name='option' value='Customer Menu'>";
    echo "</form>";

    if (isset($_GET['customer_option'])) {
        handleCustomerOption($_GET['customer_option']);
    }
}

function handleCustomerOption($option) {
    switch ($option) {
        case 'View Account':
            viewAccount();
            break;
        case 'Deposit':
            deposit();
            break;
        case 'Withdraw':
            withdraw();
            break;
        case 'Back to Main Menu':
            displayMenu();
            break;
        default:
            echo "Invalid option.";
    }
}

displayMenu();
?>
