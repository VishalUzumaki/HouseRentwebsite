<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V03</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Table_Highlight_Vertical_Horizontal\Table_Highlight_Vertical_Horizontal/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Table_Highlight_Vertical_Horizontal\Table_Highlight_Vertical_Horizontal/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Table_Highlight_Vertical_Horizontal\Table_Highlight_Vertical_Horizontal/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Table_Highlight_Vertical_Horizontal\Table_Highlight_Vertical_Horizontal/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Table_Highlight_Vertical_Horizontal\Table_Highlight_Vertical_Horizontal/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Table_Highlight_Vertical_Horizontal\Table_Highlight_Vertical_Horizontal/css/util.css">
	<link rel="stylesheet" type="text/css" href="Table_Highlight_Vertical_Horizontal\Table_Highlight_Vertical_Horizontal/css/main.css">
<!--===============================================================================================-->


<script type="text/javascript">
	function rent_houses()
	{
		   window.open("http://localhost/de_project/house_info.php",self);
	}

	
</script>


</head>

<body>
	

<?php

session_start();

$lname="vishal";

$address="pop";

$phone="909";

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


$id=$_SESSION['customer_id'];

$user="SELECT * FROM customer_details WHERE customer_id='$id' ";

$house="SELECT * FROM customer_details natural join house_info WHERE customer_id='$id' ";

$scan=mysql_query($user,$conn);

$house_scan=mysql_query($house,$conn);

if($scan)
{
  //echo "queeyr succes";
}else{
  echo "query failed".mysql_error();
 // echo mysql_error();
}


if($house_scan)
{
  //echo "queeyr succes";
}else{
  echo "query failed".mysql_error();
 // echo mysql_error();
}


$data=mysql_fetch_array($scan);

//$house_data=mysql_fetch_array($house_scan);

?>






				
				<div class="limiter">
		             <div class="container-table100">
			          <div class="wrap-table100">

							<div class="table100 ver3 m-b-110">
					<table data-vertable="ver3">


			              <tr class=row100 head>
								<th class=column100 column1 data-column=column1>YOUR </th>
								<th class=column100 column2 data-column=column2>INFO</th>
							</tr>
						</thead>
						<tbody>
						

						     <tr class="row100">
								<td class="column100 column1" data-column="column1">ID</td>
								<td class="column100 column2" data-column="column2"><?php printf("   %d ",$data["customer_id"]); ?></td>
								
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">FIRST NAME</td>
								<td class="column100 column2" data-column="column2"><?php printf("    %s ",$data["customer_fname"]);?></td>
								
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">LAST NAME</td>
								<td class="column100 column2" data-column="column2"><?php printf("    %s ",$data["customer_lname"]);?></td>
								
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">ADDRESS</td>
								<td class="column100 column2" data-column="column2"><?php printf("    %s ",$data["customer_address"]);?></td>
								
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">PHONE NO</td>
								<td class="column100 column2" data-column="column2"><?php printf("    %s ",$data["phone_number"]);?></td>
								
							</tr>

						

							

						
							
						</tbody>
					</table>
				</div>

				
		

		





	<center>	<button onclick="rent_houses()" >RENT HOUSES</button>       </center>
	  
	
       


















     <?php while($house_data=mysql_fetch_assoc($house_scan)) {
          ?>
       <div class="limiter">
		             <div class="container-table100">
			          <div class="wrap-table100">

							<div class="table100 ver3 m-b-110">
					<table data-vertable="ver3">


			              <tr class=row100 head>
								<th class=column100 column1 data-column=column1>YOUR </th>
								<th class=column100 column2 data-column=column2>HOUSES</th>
							</tr>
						</thead>
						<tbody>
						

						     <tr class="row100">
								<td class="column100 column1" data-column="column1">HOUSE ID</td>
								<td class="column100 column2" data-column="column2"><?php printf("   %d ",$house_data["house_id"]); ?></td>
								
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">ADDRESS</td>
								<td class="column100 column2" data-column="column2"><?php printf("    %s ",$house_data["address_line"]);?></td>
								
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">CITY</td>
								<td class="column100 column2" data-column="column2"><?php printf("    %s ",$house_data["city"]);?></td>
								
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">PRICE</td>
								<td class="column100 column2" data-column="column2"><?php printf("    %d ",$house_data["price"]);?></td>
								
							</tr>


							<tr class="row100">
								<td class="column100 column1" data-column="column1">SQUARE FEET</td>
								<td class="column100 column2" data-column="column2"><?php printf("    %d ",$house_data["square_feet"]);?></td>
								
							</tr>


							<tr class="row100">
								<td class="column100 column1" data-column="column1">BEDROOMS</td>
								<td class="column100 column2" data-column="column2"><?php printf("    %d ",$house_data["no_of_bedrooms"]);?></td>
								
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">HOUSE TYPE</td>
								<td class="column100 column2" data-column="column2"><?php printf("    %s ",$house_data["house_type"]);?></td>
								
							</tr>


							<tr class="row100">
								<td class="column100 column1" data-column="column1">ROOMATES TYPE</td>
								<td class="column100 column2" data-column="column2"><?php printf("    %s ",$house_data["roommates_type"]);?></td>
								
							</tr>


							<tr class="row100">
								<td class="column100 column1" data-column="column1">IMAGE LINK</td>
								<td class="column100 column2" data-column="column2"><?php printf("    %s ",$house_data["image_link"]);?></td>
								
							</tr>


													
						</tbody>
					</table>
				</div>

   <?php }

/*
        $result2 ="SELECT image FROM customer_details natural join house_info natural join images where customer_id='$id' ";
    
       $result=mysql_query($result2,$conn);

       if($result){
        $imgData = mysql_fetch_array($result);
        
        //Render image
        header("Content-type: image/jpg"); 
       
        echo "<div height=500 width=300>".$imgData['image']."</div>"; 
    }else{
        echo 'Image not found...';
    }
*/

   ?>


<!--===============================================================================================-->	
	<script src="Table_Highlight_Vertical_Horizontal\Table_Highlight_Vertical_Horizontal/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="Table_Highlight_Vertical_Horizontal\Table_Highlight_Vertical_Horizontal/vendor/bootstrap/js/popper.js"></script>
	<script src="Table_Highlight_Vertical_Horizontal\Table_Highlight_Vertical_Horizontal/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="Table_Highlight_Vertical_Horizontal\Table_Highlight_Vertical_Horizontal/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="Table_Highlight_Vertical_Horizontal\Table_Highlight_Vertical_Horizontal/js/main.js"></script>

</body>
</html>