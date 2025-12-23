<?php



    if(isset($_REQUEST['submit']) == true){
        session_start();
        $mobileno = $_REQUEST['mobileno'];
        $password = $_REQUEST['password'];
        $email = $_REQUEST["email"];
        $otp = $_REQUEST["otp"];

        if($otp=="" || $mobileno=="" || $password==""|| $email=="") {
            echo "Please fill all the fields.";
        }
        else if(strlen($password)<8){
            echo "Password  must be grater than 8 character";
        }
        else if(strlen($otp)<4){
            echo "Enter your OTP Correctly.It must be 4 character.";
        }
        else{
           $_SESSION["status"]=true;
           $_SESSION["mobileno"]=$mobileno;

           $catagory=$_POST["catagory"];
           if($catagory=="Patient"){
             header("Location:Patient_Dashboard.html");
    
           }

           else if($catagory=="Doctor"){
           header("Location:doctordashboard.html");
           }

           else{
            echo "Catagory is not selected.";
           }
        }
    }
    else{
        echo "type if not submited";
    }




?>