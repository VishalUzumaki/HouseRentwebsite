<?php


//session_start();

$id="0";
 
$password="pop";

$fname="vishal";

$lname="vishal";

$address="pop";

$phone="909";




 

$id=$_POST['id'];

$password=$_POST['password'];

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

  



   $sql="INSERT INTO customer_details VALUES('$id','$password','$fname','$lname','$address','$phone')";
   

   $retval = mysql_query( $sql, $conn );



    if($retval)
    {
    	 
      echo "<script type='text/javascript'>

     alert('added successfully')</script>";

  echo "<script>setTimeout(\"location.href='http://localhost/de_project/login_form.php';\",500);</script>";
    }else{
    	echo  "error".mysql_error();
    }

   
?>
