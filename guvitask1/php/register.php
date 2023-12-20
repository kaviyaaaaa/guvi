<?php
// Register backend logic
$fullname = $_POST['fname'];
$email = $_POST['email'];
$password = $_POST['pass'];
$gender = $_POST['gender'];
$my_date_picker = $_POST['dob'];

$conn = new mysqli('localhost','root','form');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);

}else{
    $stmt = $conn->prepare("insert into registration(fullname,email,password,gender,dob)
    values(?,?,?,?,?)");
    $stmt->bind_param("ssssi",$fname,$email,$pass,$gender,$dob);
    $stmt->execute();
    echo "Registration Successful.....";
    $stmt->close();
    $conn->close();
}
?>