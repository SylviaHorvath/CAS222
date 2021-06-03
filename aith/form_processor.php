<?php
$servername = "localhost";
$database = "";
$username = "";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);


// Check connection
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

// Taking all values from the form data(input)
$registrant_full_name =  $_REQUEST['registrant_full_name'];
$registrant_number = $_REQUEST['registrant_number'];
$registrant_email_address = $_REQUEST['registrant_email_address'];
$registrant_age = $_REQUEST['registrant_age'];
$registrant_role = $_REQUEST['registrant_role'];
$registrant_gender =  $_REQUEST['registrant_gender'];
$t_shirt_size = $_REQUEST['t_shirt_size'];
$emergency_contact_full_name = $_REQUEST['emergency_contact_full_name'];
$emergency_contact_number = $_REQUEST['emergency_contact_number'];
$saturday_event_selection = $_REQUEST['saturday_event_selection'];
$sunday_event_selection = $_REQUEST['sunday_event_selection'];
$accommodation_request = $_REQUEST['accommodation_request'];

// Performing insert query execution

$sql = "INSERT INTO registrants  VALUES ('$registrant_full_name', '$registrant_number','$registrant_email_address','$registrant_age','$registrant_role','$registrant_gender','$t_shirt_size', '$emergency_contact_full_name', '$emergency_contact_number', '$saturday_event_selection', '$sunday_event_selection', '$accommodation_request')";

if(mysqli_query($conn, $sql)){
    echo "<h3>data stored in a database successfully."
        . " Please browse your localhost php my admin"
        . " to view the updated data</h3>";

} else {
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Form Processed Response</title>
</head>

<body>
<h1>Form Processed Response</h1>

<p>Hello!</p>

<p>You wonderful person, you!</p>

</body>
</html>