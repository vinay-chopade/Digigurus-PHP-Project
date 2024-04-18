<?php

$con = mysqli_connect('localhost', 'root', '', 'digigurus');

// get the post records
$fname = $_POST['fnm'];
$lname = $_POST['lnm'];
$uname = $_POST['uname'];
$email = $_POST['emailreg'];
$gender = $_POST['gender1'];
$city = $_POST['cty'];
$country = $_POST['coty'];
$pass = $_POST['pwd'];

// database insert SQL code
$sql = "INSERT INTO `reg_data` (`fname`,`lname`,`uname`,`email`,`gender`,`city`,`country`, `password`) VALUES ('$fname','$lname','$uname','$email','$gender','$city','$country','$pass')";

// insert in database 
$rs = mysqli_query($con, $sql);

if ($rs) {
    echo '<script>alert("Record Inserted!!!");</script>';
    header('Location: http://localhost/Digigurus/index.php');
    exit;
}

$sql = 'SELECT * FROM reg_data';
$retval = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
    echo "--------------------------------<br>" .
        "First name : {$row['fname']} <br> " .
        " Last name : {$row['lname']} <br> " .
        " Email : {$row['email']} <br> " .
        " Gender : {$row['gender']} <br> " .
        " City : {$row['city']} <br> " .
        " Country : {$row['country']} <br> " .
        "--------------------------------<br>";
}
echo "Fetched data successfully\n";
?>