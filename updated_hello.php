
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
    window.location.href="http://localhost/de_project/add_image.php"
   }

</script>

</head>

<body>
  
</body>

</html>

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



$user="SELECT * FROM customer_details WHERE customer_id='$_POST[id]'";


$scan=mysql_query($user,$conn);

if($scan)
{
  //echo "queeyr succes";
}else{
  echo "query failed".mysql_error();
 // echo mysql_error();
}



$data=mysql_fetch_array($scan);

if($data)   // if password is correct we will display images of houses and give option to add new houses
{
//printf("%d (%s)\n",$data["customer_id"],$data["password"]);

session_start();

$_SESSION["customer_id"]=$data["customer_id"];

printf(" CUSTOMER ID %d\n",$data["customer_id"]);

echo "<br> <br>";

printf("FIRST NAME %s ",$data["customer_fname"]);


echo "<br> <br>";

echo "LAST NAME".$data["customer_lname"]."<br> <br>";

echo "ADDRESS:".$data["customer_address"]."<br> <br>";

echo "CONTACT".$data["phone_number"]."<br> <br>";

echo "<button onclick=update()> Do you want to update details </button><br> <br>";

//$fname=readline("fname 2");

echo "<center>";
echo "do you want to add images of your house";
echo "<button onclick=addimage()>add images </button> </center>";


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




