<?php


session_start();

 $customer_id="0";
 


$fname="vishal";

$lname="vishal";

$address="pop";

$phone="909";


$id=$_SESSION["customer_id"];

$fname=$_POST['fname'];

$lname=$_POST['lname'];

$address=$_POST['address'];


$phone=$_POST['phone'];


$conn=mysql_connect("localhost","root","");

if($conn)
{
 // echo "successful connection";;
}

else{
	echo "connection error";
}

$f1=mysql_select_db("design",$conn);

if($f1)
{
//echo "success";  
}
else{
  echo " not selected";
}

  
   $sql="UPDATE customer_details SET customer_fname='$fname',customer_lname='$lname',customer_address='$address',phone_number='$phone' where customer_id='$id'";
   

   $retval = mysql_query( $sql, $conn );



    if($retval)
    {
   
      echo "<script type='text/javascript'>

   alert('YOUR DETAILS HAVE BEEN SUCCESSFULLY UPDATED')</script>";

  echo "<script>setTimeout(\"location.href='http://localhost/de_project/new_hello.php';\",500);</script>";
 

    }else{
    	echo  "error".mysql_error();
    }

   
?>
