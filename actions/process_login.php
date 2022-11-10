<?php
include("../controllers/general_controller.php");

//for login
if(isset($_POST['submit2']))
{
    $email=$_POST['mail'];
    $password=$_POST['pass'];

    //encrypt password to matchthe one stored in the database
   $hash = base64_decode($password);
   $logresult= newlogin($email, $hash);
   
    if ($logresult==$password){
        //go to manage products if not proceed to homepage
        header("Location: ../view/homepage.php");
       // echo "Logged in  successful!";
    }
    else
    { 
        echo "Failed to Log you in";
    }

}

session_start();
//defining user role upon login to direct which page a user would go to
if ($logresult["user_role"] == 1)
{
    header('Location: ../Admin/add_brand.php');
    $_SESSION["verifyrole"] = 1;
   
} else{

   $_SESSION["verifyrole"] = 0;
    header('Location: ../view/homepage.php');

        }
  
?>