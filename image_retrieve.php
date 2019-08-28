<?php 


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


    //Get image data from database
    $result2 ="SELECT image FROM images";
    
    $result=mysql_query($result2,$conn);

       if($result){
        $imgData = mysql_fetch_array($result);
        
        //Render image
        header("Content-type: image/jpg"); 
       
        echo "<div height=500 width=300>".$imgData['image']."</div>"; 
    }else{
        echo 'Image not found...';
    }

?>