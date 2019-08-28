<!-- 
<html>

<head>

<style type="text/css">
	

	
</style>
	
</head>
	
<body>


<center>

<form name="owner_signup" method="post" action = "owner_signup_backend.php">
	<table border="2.0" cellpadding="20" cellspacing="20">
		<caption><h2>SIGN IN</h2></caption>
		<tr>
			<td>
				<big><b>Customer Id:</b></big>
			</td>
			
			<td>
			<input type="number" name="id"/>
		    </td>
			
		</tr>

		<tr>
			<td>
				<big><b>PASSWORD</b></big>
			</td>
			
			<td>
			<input type="text" name="password"/>
		    </td>
			
		</tr>

       <tr>
			<td>
				<big><b>FIRST NAME</b></big>
			</td>
			
			<td>
			<input type="text" name="fname"/>
		    </td>
			
		</tr>


       <tr>
			<td>
				<big><b>LAST NAME</b></big>
			</td>
			
			<td>
			<input type="text" name="lname"/>
		    </td>
			
		</tr>



       <tr>
			<td>
				<big><b>ADDRESS</b></big>
			</td>
			
			<td>
			<input type="text" name="address"/>
		    </td>
			
		</tr>





<tr>
			<td>
				<big><b>PHONE</b></big>
			</td>
			
			<td>
			<input type="text" name="phone"/>
		    </td>
			
		</tr>



<tr>

	<td align="center" colspan="2">

      <input type="submit" name="SUBMIT"/>
	</td>

</tr>


</table>


	
</form>

</center>



</body>



</html>



-->



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <script type="text/javascript">
//auto expand textarea
function adjust_textarea(h) {
h.style.height = "20px";
h.style.height = (h.scrollHeight)+"px";
}
  </script>
  <style type="text/css">
.form-style-8{
font-family: 'Open Sans Condensed', arial, sans;
width: 500px;
padding: 30px;
background: #FFFFFF;
margin: 50px auto;
box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
-moz-box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
-webkit-box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
}
.form-style-8 h2{
background: #4D4D4D;
text-transform: uppercase;
font-family: 'Open Sans Condensed', sans-serif;
color: #797979;
font-size: 18px;
font-weight: 100;
padding: 20px;
margin: -30px -30px 30px -30px;
}
.form-style-8 input[type="text"],
.form-style-8 input[type="date"],
.form-style-8 input[type="datetime"],
.form-style-8 input[type="email"],
.form-style-8 input[type="number"],
.form-style-8 input[type="search"],
.form-style-8 input[type="time"],
.form-style-8 input[type="url"],
.form-style-8 input[type="password"],
.form-style-8 textarea,
.form-style-8 select {
box-sizing: border-box;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
outline: none;
display: block;
width: 100%;
padding: 7px;
border: none;
border-bottom: 1px solid #ddd;
background: transparent;
margin-bottom: 10px;
font: 16px Arial, Helvetica, sans-serif;
height: 45px;
}
.form-style-8 textarea{
resize:none;
overflow: hidden;
}
.form-style-8 input[type="button"], .form-style-8 input[type="submit"]{
-moz-box-shadow: inset 0px 1px 0px 0px #45D6D6;
-webkit-box-shadow: inset 0px 1px 0px 0px #45D6D6;
box-shadow: inset 0px 1px 0px 0px #45D6D6;
background-color: #2CBBBB;
border: 1px solid #27A0A0;
display: inline-block;
cursor: pointer;
color: #FFFFFF;
font-family: 'Open Sans Condensed', sans-serif;
font-size: 14px;
padding: 8px 18px;
text-decoration: none;
text-transform: uppercase;
}
.form-style-8 input[type="button"]:hover, .form-style-8 input[type="submit"]:hover {
background:linear-gradient(to bottom, #34CACA 5%, #30C9C9 100%);
background-color:#34CACA;
}
  </style>
</head>
<body>
<div class="form-style-8">
<h2>SIGN UP</h2>
<form name="owner_signup" method="post"
 action="owner_signup_backend.php"> <input name="id"
 placeholder="Customer Id" type="number">
  <input name="password" placeholder="PASSWORD"
 type="password"> <input name="fname"
 placeholder="First Name" type="text"><input
 name="lname" placeholder="Last Name" type="text">
  <input name="address" placeholder="ADDRESS"
 type="text"><input name="phone"
 placeholder="PHONE NUMBER" type="text">
  <input name="SUBMIT" type="submit"></form>
</div>
</body>
</html>
