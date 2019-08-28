
<html>

<head>

<style type="text/css">
   
</style>

<script type="text/javascript">
  
  function update()
  {
       window.location.href="http://localhost/de_project/update_form.php";
  }

  function addimage()
   {
    window.location.href="http://localhost/de_project/images_of_house.php"
   }

</script>

</head>

<body>
  
</body>

</html>

<?php


session_start();

$customer_id="0";
 
$password="pop";

$customer_id=$_SESSION["customer_id"];

//echo $id;




/*
foreach ($variable as $key => $value) {
  # code...
}
*/


$conn=mysql_connect("localhost","root","");

if($conn)
{
  //echo "successful connection";;
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
  echo " not selected".mysql_error();
}


// checking if  passord is correct or not
$user="SELECT * FROM customer_details";

//S WHERE customer_id='$[id]' ";


$scan=mysql_query($user,$conn);

if($scan)
{
  //echo "queeyr succes";
}else{
  echo "query failed".mysql_error();
 // echo mysql_error();
}



$data=mysql_fetch_array($scan);

if(1)   // if password is correct we will display images of houses and give option to add new houses
{
//printf("%d (%s)\n",$data["customer_id"],$data["password"]);


$_SESSION["customer_id"]=$data["customer_id"];

printf(" CUSTOMER ID %d\n",$data["customer_id"]);

echo "<br> <br>";

printf("FIRST NAME %s ",$data["customer_fname"]);


echo "<br> <br>";

echo "LAST NAME".$data["customer_lname"]."<br> <br>";

echo "ADDRESS:".$data["customer_address"]."<br> <br>";

echo "CONTACT".$data["phone_number"]."<br> <br>";

echo "<button onclick=update()> Do you want to update details </button><br> <br>";


echo "<br><br><center>";

$user="SELECT house_name,number_of_rooms,price_month  FROM customer_details natural join house_details natural join photos WHERE customer_id=$customer_id";

$scan=mysql_query($user,$conn);

$data=mysql_fetch_array($scan);

echo "<br><table>";
echo "<tr><td>HOUSE NAME </td> <td>".$data["house_name"]."</tr>";
echo "<tr> <td>NUMBER OF ROOMS </td> <td> ".$data["number_of_rooms"]."</tr>";
echo "<tr> <td>PRICE PER MONTH </td> <td> ".$data["price_month"]."</tr>";


$scan=mysql_query($user,$conn);

if($scan)
{
  //echo "queeyr succes";
}else{
  echo "query failed".mysql_error();
 // echo mysql_error();
}


$user="SELECT pics FROM customer_details natural join house_details natural join photos  WHERE customer_id=$customer_id";

$scan=mysql_query($user,$conn);

if($scan)
{
  //echo "queeyr succes";
}else{
  echo "query failed".mysql_error();
 // echo mysql_error();
}


echo "<br> <br><center>";

echo "<table cellspacing='10'>";

echo "<tr>";
while($data=mysql_fetch_array($scan))
{
  
echo " <td>";
echo "<img src=$data[pics] alt=images_of_div height=300 width=300/>";
echo "</td> ";
}

echo "</tr>";

echo "</table>";
echo "<br> <br>";

echo "<center>";
echo "<b><h2>Do you want to add images of your house</h2></b>";
echo "</center>";

echo "<button onclick=addimage()>add images </button> </center>";



//$fname=readline("fname 2");




}


else{
    echo "<script type='text/javascript'>

   alert('incorrect password')</script>";

  echo "<script>setTimeout(\"location.href='http://localhost/de_project/form.php';\",500);</script>";
   // header("Location:http://localhost/de_project/form.php");
   
}





/*
else{
  echo "<center>";
  echo "invalid id";
  echo "<br>";
   echo "<button onclick=signup()> do you want to sign in </button>";
echo "</center>";
}
*/

?>




