<?php


//session_start();

 $house_id=0;
 $image=000;





 

$house_id=$_POST['house_id'];

$image=$_POST['image'];





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




   $sql="INSERT INTO phtotos VALUES('$house_id','$image')";
   

   $retval = mysql_query( $sql, $conn );



    if($retval)
    {
    	echo "added successfully";
    }else{
    	echo  "error".mysql_error();
    }


    

     
   
?>
