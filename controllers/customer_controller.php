<?php
//connect to the user account class
include("../classes/customer_class.php");

//sanitize data

function getnewcustomer($fullname,$email,$contact,$country,$city,$password,$user_role)
{
    $newcustomer= new Customer();
    $newcus = $newcustomer->getcustomersdata($fullname,$email,$contact,$country,$city,$password,$user_role);
    return $newcus;

}
    
function verifyemail($fullname,$email,$contact,$country,$city,$password)
{
    $verify = new Customer();
    $verifymail= $verify->Uniquemail($fullname,$email,$contact,$country,$city,$password);
    return $verifymail;
}
//function for login
function newlogin($email,$password)
{
    $newlog =new Customer();
    $login = $newlog->logcustomer($email,$password);
    return($login);
}
?>