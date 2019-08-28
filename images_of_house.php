<html>


<style type="text/css">


</style>


<script type="text/javascript">

	
	function back()
	{
		<?php
        //header('Location: http://www.example.com/');
		//header('Location:www.facebook.com');
	   ?>
	}

</script>

	
<body>


     
         
<center>


<form name="form1" method="post" action="add_image.php" >
	<table border="2.0" cellpadding="20" cellspacing="20">
		 <caption><h2>ADD IMAGES</h2></caption>
		  <tr>
			<td>
				<big><b>HOUSE ID:</b></big>
			</td>
			
			<td>
			<input type="number" name="house_id"/>
		    </td>
			
		</tr>

       <tr>
			<td>
				<big><b>IMAGE:</b></big>
			</td>
			
			<td>
			<input type="text" name="image"/>
		    </td>
			
		</tr>

<tr>

	 <td align="center" colspan="2">

     <input type="submit" name="SUBMIT"/>
	
	</td>

</tr>


</table>

 	
</form>

<?php
 echo "<center>";
   
    echo "<button onclick=back()>BACK TO DETAILS</button>";

    echo "</center>";

?>

</center>

</body>

</html>


