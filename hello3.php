<html>

<head>

<script type="text/javascript">

function add_img()
{
  window.open('form4.php');
}

</script>

</head>

<body>
  
</body>
</html>
<?php


//session_start();

 $customer_id=0;
 

$house_name="vishal";

$house_no="vishal";

$society_name="vishal";

$city_name="vishal";

$state="vishal";

$pincode=10;

$latitude=10;

$longitude=10;

$number_of_rooms=10;

$price_month=10;


$preference="vishal";

$image_id=10;


$house_type="vishal";

$house_id=1;

 

$customer_id=$_POST['customer_id'];

$house_name=$_POST['house_name'];

$house_no=$_POST['house_no'];

$society_name=$_POST['society_name'];

$city_name=$_POST['city_name'];

$state=$_POST['state'];

$pincode=$_POST['pincode'];

$latitude=$_POST['latitude'];

$longitude=$_POST['longitude'];

$number_of_rooms=$_POST['number_of_rooms'];

$price_month=$_POST['price_month'];


$preference=$_POST['preference'];

$image_id=$_POST['image_id'];


$house_type=$_POST['house_type'];



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


   $sql="INSERT INTO house_details VALUES('$customer_id','$house_name','$house_no','$society_name','$city_name','$state','$pincode','$latitude','$longitude','$number_of_rooms','$price_month','$preference','$image_id','$house_type','$house_id')";

   

   $retval = mysql_query( $sql, $conn );



    if($retval)
    {
    	echo "added successfully";
    }else{
    	echo  "error".mysql_error();
    }


echo "<center> do you want to add images </center>";

echo "<button onclick=add_img()> add images </button>"; 
?>

   






