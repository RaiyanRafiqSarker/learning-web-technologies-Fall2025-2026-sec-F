<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    session_start();

    $mobileno = $_POST['mobileno'];
    $password = $_POST['password'];
    $email    = $_POST['email'];
    $otp      = $_POST['otp'];



    if ($mobileno == "" || $password == "" || $email == "" || $otp == "") {
        header("Location: Patient Login.html");
        exit();
    }


    else if (strlen($password) < 8) {
        header("Location: Patient Login.html");
        exit();
    }


    else if (strlen($otp) < 4) {
        header("Location: Patient Login.html");
        exit();
    }

    else {
        $_SESSION['status'] = true;
        $_SESSION['mobileno'] = $mobileno;

        header("Location: Patient Dashboard.html");
        exit();
    }

} else {

    header("Location: Patient Login.html");
    exit();
}
?>
