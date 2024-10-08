<?php
$servername = "localhost";
$username = "root";
$password = ""; // XAMPP မှာ default password ကို ဖန်တီးထားလျှင် ထည့်ပါ။
$dbname = "finaldb"; // သင့် database name အရင်ဖန်တီးထားဖို့လိုပါတယ်

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>
