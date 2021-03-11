<?php
include 'DB.php';
$company_name=$con->real_escape_string($_POST['company']);
$fname=$con->real_escape_string($_POST['fname']);
$mobile_no=$con->real_escape_string($_POST['mobile']);
$email=$con->real_escape_string($_POST['email']);
$location=$con->real_escape_string($_POST['location']);
$service=$_POST['services'];
$quantity=$con->real_escape_string($_POST['quantity']);
$suggestion=$con->real_escape_string($_POST['suggestion']);
$query = "INSERT INTO enquiry (comp_name,person_name,mobile_no,email,location,product,quantity,suggestion) VALUES ('$company_name','$fname','$mobile_no','$email','$location','$service','$quantity','$suggestion')";
$result=$con->query($query);
if($result){
    echo "<script>";
    echo "alert('Data submitted. Thank you. we will contact you soon');";
    echo "window.location.href = '../enquiry.html';";
    echo "</script>";
}
else{
    echo "<script>";
    echo "alert('Data not inserted. TRY AGAIN');";
    echo "window.location.href = '../enquiry.html';";
    echo "</script>";
}
$con->close();
?>