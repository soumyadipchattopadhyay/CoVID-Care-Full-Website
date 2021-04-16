<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "id14456015_schatterjee", "WB-26k5585Kolkata", "id14456015_test");
 
function function_alert($message) { 
      
    // Display the alert box  
    echo "<script>alert('$message');</script>"; 
} 

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_REQUEST['fname']);
$city = mysqli_real_escape_string($link, $_REQUEST['city']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$message = mysqli_real_escape_string($link, $_REQUEST['message']);
 
// Attempt insert query execution
$sql = "INSERT INTO Persons (FirstName, City, Email, Message) VALUES ('$first_name', '$city', '$email', '$message')";
if(mysqli_query($link, $sql)){
    function_alert("Message Sent !"); 
    exit;
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>