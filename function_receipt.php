<?php
include "connect.php";

// Function to fetch data from the "voucher" table and display it in a receipt interface
function displayVoucherData($conn) {
    // Fetch data from the "voucher" table
    $query = "SELECT * FROM voucher";
    $result = mysqli_query($conn, $query);
    
    if ($result) {
        // Display the receipt interface
        echo "<h2>Voucher Receipt</h2>";
        
        // Loop through the fetched data and display it
        while ($row = mysqli_fetch_assoc($result)) {
            echo "Voucher ID: " . $row['voucherID'] . "<br>";
            echo "Date: " . $row['weightofpalm'] . "<br>";
            echo "Customer Name: " . $row['customer_name'] . "<br>";
            echo "Total Amount: $" . $row['total_amount'] . "<br>";
            echo "--------------------------<br>";
        }
        
        // Free the result set
        mysqli_free_result($result);
    } else {
        // Handle the error if the query fails
        echo "Error fetching voucher data: " . mysqli_error($conn);
    }
}

// Usage: Call the function passing the database connection object
displayVoucherData($conn);



?>
