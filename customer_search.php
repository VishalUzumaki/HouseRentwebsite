
<html>

<body>

<?php

$conn=mysql_connect("localhost","root","");

if($conn)
{
 // echo "successful connection";;
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


?>



<div >



<form method="post" name="subform" action='customer_search.php'>

<table border="4" cellspacing="5">
<tr>

<td>CITY:</td>

<td><select name="city">
<option value="anand" selected="selected">Anand</option>
<option value="vadodara" >Baroda</option>
</select>
</td>

</tr>


<tr>

<td>HOUSE_TYPE:</td>
<td>
<select name="type">
<option value="flat" selected="selected">FLAT</option>
<option value="bunglow">BUNGLOW</option>
</select>
</td>
</tr>


<tr>
<td>
SORTING:
</td>
<td>
<select name="sort">
<option value="price" selected="selected">PRICE</option>
<option value="square_feet">SQUARE FEET</option>
<option value="number of rooms">NUMBER OF ROOMS</option>
</select>
</td>
</tr> 

<tr>
<td>
<input type="submit" value=">>>>>">
</td>
</tr>
</form>

</div>




<?php 


$city="anand";

$type="bunglow";

$sort="price";




$city=$_POST['city'];	

$type=$_POST['type'];

$sort=$_POST['sort'];	


$user="";




if($sort=="price")
{

$user="SELECT * FROM customer_details natural join house_info  left  JOIN comments_house on house_info.house_id = comments_house.house_id  WHERE  (city='$city') AND (house_type='$type') ORDER BY price";	

}

if($sort=="square_feet")
{

$user="SELECT * FROM customer_details natural join house_info  left JOIN  comments_house  on house_info.house_id = comments_house.house_id WHERE (city='$city') AND (house_type='$type') ORDER BY square_feet";	

}


//$user="SELECT * FROM house_info WHERE (city='$city') AND (house_type='$type') ";

//WHERE city='$_POST['city']";

$scan=mysql_query($user,$conn);


if($scan)
{
  //echo "queeyr succes";
}
else{
     
  echo "query failed".mysql_error();
 // echo mysql_error();
}


echo "<table cellspacing=15 cellpadding=10 border=2>";

while($data=mysql_fetch_assoc($scan))
{

echo "<tr>";

echo "<td>";

echo "House Id </td>  <td> ".$data["house_id"];


echo "</td> <td> ADDRESS:</td> <td>   ".$data["address_line"];

echo "</td> <td> CITY: </td> <td>  ".$data["city"];

echo "</td>";

echo "</tr>";

echo "<tr>";

echo "<td>";

echo "PRICE </td> <td> ".$data["price"];

echo "</td> <td>SQUARE FEET:</td> <td>   ".$data["square_feet"];

echo "</td> <td> ROOMATES TYPE: </td> <td>".$data["roommates_type"];

echo "</td>";

echo "</tr>";

echo "<tr>";

echo "<td> IMAGES </TD> <TD colspan=5> ".$data["image_link"];

echo "</td> </tr>";

echo "<tr>";

echo "<td>COMMENTS</td> <td colspan=5>" .$data["comments"];

echo "</td> </tr>";

echo "<tr>";

echo "<td>OWNER NAME </td> <td colspan=2>".$data["customer_fname"]." ".$data["customer_lname"]; 

echo "</td> <td> PHONE NO:</td> <td>".$data["phone_number"];

echo "</td> </tr>";

echo "<tr> <td bgcolor='red' colspan=6> </td> </tr>";

}

echo "</table>";

?>





</body>

</html>