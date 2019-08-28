
<html>

<body>
  
<?php

 $customer_id="0";
 
 $password="pop";

$customer_id=$_POST['id'];

$password=$_POST['password'];


$conn=mysql_connect("localhost","root","");

if($conn)
{
  //echo "successful connection";;
}

else{
	echo "connection error".mysql_error();
}

$f1=mysql_select_db("design",$conn);

if($f1) 
{
//echo "success";  
}
else{
  echo " not selected".mysql_error();
}


// checking if  passord is correct or not

$user="SELECT * FROM customer_details WHERE customer_id='$_POST[id]' AND  password='$_POST[password]'";


$scan=mysql_query($user,$conn);

if($scan)
{
  //echo "queeyr succes";
}else{  echo "query failed".mysql_error();
 // echo mysql_error();
}



$data=mysql_fetch_array($scan);

if($data)   
{

  
  echo "<script>setTimeout(\"location.href='http://localhost/de_project/owner_info.php';\",500);</script>";

   session_start();
   $_SESSION['customer_id']=$customer_id;
    
   $id=$_SESSION['customer_id'];
    
}
else{
  echo "<script type='text/javascript'>

  alert('incorrect password')</script>";

  echo "<script>setTimeout(\"location.href='http://localhost/de_project/login_form.php';\",500);</script>";
   // header("Location:http://localhost/de_project/form.php");
   
}

?>




