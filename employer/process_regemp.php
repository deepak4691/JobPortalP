<?php

include_once('../config.php');
$email=$_POST['email'];
$password=$_POST['pass1'];
$hash = password_hash($password, PASSWORD_DEFAULT);
$name=$_POST['compname'];
$type=$_POST['comtype'];
//echo $type;
$industry=$_POST['indtype'];
//echo $industry;
$addr=$_POST['addr'];
$pin=$_POST['pin_code'];
$person=$_POST['person'];
$phone=$_POST['phone'];
$city=$_POST['city'];

$location=$city;

$query4="INSERT INTO login (email,password,usertype,status) VALUES ('$email','$hash','employer',0)";
    $result1 = mysqli_query($db1,$query4) or die("Cant Register , The user email may be already existing");
$query5 =  "INSERT INTO employer (log_id,ename,phone,location,etype,address,pincode,executive,industry)
                VALUES ((SELECT log_id FROM login WHERE email='$email'),'$name','$phone','$location','$type','$addr','$pin','$person','$industry')";

 //$result2 = mysqli_query($db1,$query5);
if (!mysqli_query($db1,$query5))
{
    echo("Error description: " . mysqli_error($db1));
}
else{
    header('location:login.php?msg=registered');
}
?>