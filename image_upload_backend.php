

<?php

 $house_id=0;
 
$house_id=$_POST['house_id'];


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


    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

      
        $sql="INSERT into images VALUES ('$house_id', '$imgContent')";
        
        $scan=mysql_query($sql,$conn);


        if($scan){
           echo "<script type='text/javascript'>

           alert('FILE uploaded successfully')</script>";

          echo "<script>setTimeout(\"location.href='http://localhost/de_project/owner_info.php';\",500);</script>";
        }else{
            echo "File upload failed, please try again.";
              }

         }else{
        echo "Please select an image file to upload.";
        }

  


?>