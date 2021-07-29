<?php
$insert=false;
if(isset($_POST['name'])){
if(isset($_POST['age'])){
$server="localhost";
$username="root";
$password="";
$dbname="trip";
$con=mysqli_connect($server,$username,$password,$dbname);

if(!$con){
    die("Connection failed due to this error".mysqli_connect_error());
}
// echo "Success! connecting to database ";

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];

$sql="INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";


if($con->query($sql)==true){
    $insert=true;
}
else{
echo "Error: $sql <br> $con->error";
}
mysqli_close($con);}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg1" src="bg1.jpg" alt="NED">
    <div class="container">
        <h1>Welcome to NED University US Trip form</h3>
        <p>Enter your details and submit this form to confirm your participation in the trip </p>
        <?php
            if($insert == true){
            echo "<p class='submitMsg'>Your form is submitted</p>";
            }
            ?>
        <form action="index1.php" onsubmit="alert('Your form is submitted')" method="post">
            
            <input type="text" name="name"  id="name" placeholder="Enter your name" >
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn">Submit</button> 
        </form>
    </div>
    <script src="index.js"></script>
    
</body>
</html>