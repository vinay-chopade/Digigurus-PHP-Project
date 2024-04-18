<?php
session_start();
include("function.php");
$message = "";
if (count($_POST) > 0) {

    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "digigurus";

    $uname = $_POST['uname'];
    $upass = $_POST['password'];

    $conn = new mysqli($servername, $username, $password, $databasename);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM reg_data where uname='$uname' AND password='$upass'";
    $result = mysqli_query($conn, $sql);
    $check = mysqli_fetch_array($result);
    if (isset($check)) {
        // echo 'success';
        $_SESSION["user_id"] = 1001;
        $_SESSION["uname"] = $_POST["uname"];
        $_SESSION['loggedin_time'] = time();
    } else {
        // echo 'failure';
        $message = "Invalid Username or Password!";
    }
    $result->close();
    $conn->close();
}

if (isset($_SESSION["user_id"])) {
    if (!isLoginSessionExpired()) {
        header("Location:logged.php");
    } else {
        header("Location:logout.php?session_expired=1");
    }
}

if (isset($_GET["session_expired"])) {
    $message = "Login Session is Expired. Please Login Again";
}
?>

<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/login.css">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-primary">
        <a class="navbar-brand logo-text ml-5 font-weight-bold" href="index.php">DigiGurus</a>
    </nav>

    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="img/login.svg" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <form method="post" action="">

                        <?php if ($message != "") { ?>
                            <div class="message">
                                <?php echo $message; ?>
                            </div>
                        <?php } ?>

                        <div class="text-center">
                            <h2>LOGIN</h2>
                        </div>
                        <!-- username input -->
                        <div class="form-outline mb-4">
                            <input type="text" id="form1Example13" class="form-control form-control-lg"
                                placeholder="Enter Username" name="uname" />
                            <label class="form-label" for="form1Example13">Username</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" id="form1Example23" class="form-control form-control-lg"
                                placeholder="Enter Password" name="password" />
                            <label class="form-label" for="form1Example23">Password</label>
                        </div>

                        <div class="d-flex justify-content-around align-items-center mb-4">
                            <!-- Checkbox -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                                <label class="form-check-label" for="form1Example3"> Remember me </label>
                            </div>
                            <a href="#!">Forgot password?</a>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                        <div class="border-top card-body text-center">Don't have an account? <a
                                href="../Digigurus/regis.html">Register</a></div>
                        <div class="">
                            <p class=" text-center fw-bold my-3 mb-0 text-muted">OR</p>
                        </div>

                        <a class="btn btn-primary btn-lg btn-block" style="background-color: #3b5998"
                            href="https://www.facebook.com/" target="_blank" role="button">
                            <i class="fab fa-facebook-f me-2"></i>Continue with Facebook
                        </a>
                        <a class="btn btn-primary btn-lg btn-block" style="background-color: #55acee"
                            href="https://twitter.com/" role="button">
                            <i class="fab fa-twitter me-2"></i>Continue with Twitter</a>

                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>