<HTML>
<head>
  <style>

.topnav {
  position:relative;
  overflow: hidden;
  background-color: #668cff;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #4d4dff;
  color: black;
}

.topnav a.active {
  background-color: #0000e6;
  color: white;
}

.form-style-6{
    font: 95% Arial, Helvetica, sans-serif;
    max-width: 400px;
    margin: 10px auto;
    padding: 16px;
    background: #F7F7F7;
}
.form-style-6 h1{
    background: #43D1AF;
    padding: 20px 0;
    font-size: 140%;
    font-weight: 300;
    text-align: center;
    color: #fff;
    margin: -16px -16px 16px -16px;
}
</style>
</head>
<body>
<header>
<div class="topnav">
  <a  href="home_page.html">Home</a>
  <a href="child_home.html">Child Details</a>
  <a href="adoption_home.html">Adoption Details</a>
  <a class="active" href="transachome.html">Tansactions</a>
   <a href="main_organization.html">Organization</a>
   <a style="font-size:14px;font-style:italic;color:black;">Not all of us can do great things, but we can do small things with great love</a>
 </div>
</header>


<meta name="viewport" content="width=device-width,user-scalable=yes"/>
<center>
	<h3 align="center">Stock</h1>

	<table width="500" cellpadding="5" cellspacing="1"></center>
	<tr>
        <th style="background-color:orange;">Item</th>
		<th style="background-color:orange;">Prize/kg</th>
		<th style="background-color:orange;">Stock left</th>
        
	</tr>





<?php
$servername="localhost";
$username="postgres";
$password="sumSVR@1";


$conn=pg_connect("host=localhost port=5432 dbname=anathashishu user=postgres password=sumSVR@1");

if(!$conn)
	echo "Connection failed to the database";


$query= pg_query($conn, 'SELECT * FROM Stock');
if(!$query)
	echo "An error occured";

while($row= pg_fetch_row($query))
{ 
	?>
	<tr>
	<td style="background-color:#FFEBC5;"><center><?php echo $row[0];?></center></td>
	<td style="background-color:#FFEBC5;"><center><?php echo $row[1];?></center></td>
	<td style="background-color:#FFEBC5;"><center><?php echo $row[2];?></center></td>

	</tr>
	<?php
}?>










</table>

	<br><br><br><br>
	<h3 align="center">Funds </h1>

	<table width="500" cellpadding="5" cellspacing="1"></center>
	<tr>
        <th style="background-color:orange;">Sub_Division</th>
		<th style="background-color:orange;">Money</th>
        
	</tr>





<?php
$servername="localhost";
$username="postgres";
$password="sumSVR@1";


$conn=pg_connect("host=localhost port=5432 dbname=anathashishu user=postgres password=sumSVR@1");

if(!$conn)
	echo "Connection failed to the database";


$query= pg_query($conn, 'SELECT * FROM Fund');
if(!$query)
	echo "An error occured";

while($row= pg_fetch_row($query))
{ 
	?>
	<tr>
	<td style="background-color:#FFEBC5;"><center><?php echo $row[0];?></center></td>
	<td style="background-color:#FFEBC5;"><center><?php echo $row[1];?></center></td>
	

	</tr>
	<?php
}?>




</table>


</center>
</body>
</HTML>