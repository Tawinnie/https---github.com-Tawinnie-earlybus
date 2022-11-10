<?php 
//when a customer clicks the register button
include("../controllers/general_controller.php");

if (isset ($_POST['submit'])) {
    $fullname = $_POST['customer_name'];
    $email = $_POST['customer_email'];
    $country = $_POST['customer_country'];
    $city = $_POST['customer_city'];
    $contact = $_POST['customer_contact'];
    $password = $_POST['customer_pass'];
    $user_role=0;
   
// hashing the password before it is stored in the database
// $password = crypt($password);

 $hashed_password = base64_encode($password);
 $result = getnewcustomer($fullname,$email,$contact,$country,$city,$hashed_password,$user_role);
 if ($result) {
    //echo "Registration successful!";
    header("Location: ../view/Login.php");
 }
 else 
    echo "Registration Unsuccessful!";
}
//calling the controller

    //$hash = password_hash($password,  PASSWORD_DEFAULT);
    //encrypt password
    //$hashed_password = password_hash($password, PASSWORD_DEFAULT);
    //see the hashed password
   // var_dump($hashed_password);
    // Query the database for username and password
     // ...

     //if(password_verify($password, $hashed_password)) {
    // If the password inputs matched the hashed password in the database
    // insert them int the database
    //} 

     // Else, Redirect them back to the login page.

?>
