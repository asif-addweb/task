<?php
// // 1)Find the smallest and largest number in an array without using any function.
// $arr = [5, 2, 9, 1, 7, 3];
// $smallest = $arr[3];
// $largest = $arr[3];

// foreach ($arr as $num) {
//     // Find the smallest number
//     if ($num < $smallest) {
//         $smallest = $num;
//     }

//     // Find the largest number
//     if ($num > $largest) {
//         $largest = $num;
//     }
// }

// echo "Smallest: $smallest\n";
// echo "<br>";
// echo "Largest: $largest\n";

// echo "<br>";
// echo "<br>";


// // 2)Remove duplicates from an array without using any inbuilt functions?

// // Input array with duplicates
// $arr = [1, 2, 2, 3, 4, 4, 5];

// // Create an empty array to store unique values
// $uniqueArr = [];

// // Iterate through the input array
// foreach ($arr as $num) {
//     $isDuplicate = false;
    
//     // Check if the value is already in the unique array
//     foreach ($uniqueArr as $uniqueNum) {
//         if ($num === $uniqueNum) {
//             $isDuplicate = true;
//             break;
//         }
//     }

//     // If it's not a duplicate, add it to the unique array
//     if (!$isDuplicate) {
//         $uniqueArr[] = $num;
//     }
// }

// // Output the array without duplicates
// echo "Array without duplicates: ";
// foreach ($uniqueArr as $num) {
//     echo "$num ";
// }

// echo "<br>";
// echo "<br>";


// // 3)Create html table box based on given input.
// // Example:2
// // Input: Number of rows and columns
// $rows = 2;
// $columns = 2;

// // Start the HTML table
// echo "<table border='1'>\n";

// // Outer loop for rows
// for ($i = 1; $i <= $rows; $i++) {
//     echo "<tr>\n";

//     // Inner loop for columns
//     for ($j = 1; $j <= $columns; $j++) {
//         echo "<td>$j</td>";
//     }

//     echo "</tr>\n";
// }

// // Close the HTML table
// echo "</table>\n";

// echo "<br>";
// echo "<br>";


// //  Create html table box based on given input.
// // Example:3
// // Input: Number of rows and columns
// $rows = 3;
// $columns = 3;

// // Start the HTML table
// echo "<table border='1'>\n";

// // Outer loop for rows
// for ($i = 1; $i <= $rows; $i++) {
//     echo "<tr>\n";

//     // Inner loop for columns
//     for ($j = 1; $j <= $columns; $j++) {
//         echo "<td>$j</td>";
//     }

//     echo "</tr>\n";
// }

// // Close the HTML table
// echo "</table>\n";

class BankAccount {
    public $accountNumber;
    public $balance;


    // Constructor to initialize the account
    public function __construct($accountNumber, $initialBalance) {        
        $this->accountNumber = $accountNumber;
        $this->balance = $initialBalance;
    }
    // Method to deposit money into the account
    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            echo "Deposited $amount into account $this->accountNumber. New balance: $this->balance\n";
        } else {
            echo "Invalid deposit amount. Please enter a positive amount.\n";
        }
    }

    // Method to withdraw money from the account
    public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
            echo "Withdrawn $amount from account $this->accountNumber. New balance: $this->balance\n";
        } elseif ($amount <= 0) {
            echo "Invalid withdrawal amount. Please enter a positive amount.\n";
        } else {
            echo "Insufficient funds. Cannot withdraw $amount from account $this->accountNumber. Current balance: $this->balance\n";
        }
    }

    // Method to get the current balance
    public function getBalance() {
        return $this->balance;
    }
}

// Create a new BankAccount instance
$account1 = new BankAccount("123456789", 1000);

// Deposit and withdraw money
$account1->deposit(500);
$account1->withdraw(200);
$account1->withdraw(800); // This will result in insufficient funds

// Get the current balance
$balance = $account1->getBalance();
echo "Current balance for account $account1->accountNumber: $balance\n";
