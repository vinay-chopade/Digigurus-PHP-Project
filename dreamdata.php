<?php

$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "digigurus";
$conn = new mysqli($servername, $username, $password, $dbname);

$Firstname = $_POST["fname"];
$Lastname = $_POST["lname"];
$Email = $_POST["email"];
$Comment = $_POST["comment"];

$Insert = $_POST["insert"];
if ($Insert == TRUE) {
    $sqlinsert = "insert into comment_data values('$Firstname','$Lastname','$Email','$Comment')";
    if ($conn->query($sqlinsert) == TRUE) {
        echo '<script>alert("Record Inserted!!!");</script>';
        header('Location: http://localhost/Digigurus/logged.php');
        exit;
    } else {
        echo "Error in inserting record!!!";
    }
}

?>