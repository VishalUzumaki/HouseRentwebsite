<html>

<head>


</head>

<body>
  
</body>

</html>

<?php


$house_id=$_GET["house_id"];
 
$address_line="vishal";

$city="vishal";

$price=0;

$square_feet=0;

$no_of_bedrooms=0;

$house_type="flat";

$roommates_type="all";

$image_link="all";



$address_line=$_GET["address_line"];

$city=$_GET["city"];

$price=$_GET["price"];

$square_feet=$_GET["square_feet"];

$no_of_bedrooms=$_GET["no_of_bedrooms"];

$house_type=$_GET["house_type"];

$roommates_type=$_GET["roommates_type"];

$image_link=$_GET["image_link"];


$customer_id=1;

session_start();


$customer_id=$_SESSION['customer_id'];

$conn=mysql_connect("localhost","root","");

if($conn)
{
//  echo "successful connection";;
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


   $sql="INSERT INTO house_info VALUES('$customer_id','$house_id','$address_line','$city','$price','$square_feet','$no_of_bedrooms','$house_type','$roommates_type','$image_link')";

   

   $retval = mysql_query( $sql, $conn );



    if($retval)
    {
    echo "<script type='text/javascript'>

    alert('DATA ADDDED SUCCESSFULLY')</script>";

  echo "<script>setTimeout(\"location.href='http://localhost/de_project/owner_info.php';\",500);</script>";
    
    }
    else{
    	echo  "error".mysql_error();
    }



?>

   






