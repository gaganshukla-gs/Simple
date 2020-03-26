<html>
<head>
<style>
h1{
	font-size:60px;
	
}
h2{
	font-size:60px;
	margin-top:380px;
	

}

body{
		
		left:100px;
		border: 2px solid #000000;
		border-width:5px;
		
		margin-left:500px;
		margin-right:180px;
		margin-top:115px;
		text-align:center;
	    height:500;
		
		
}
     form	
{
		position:absolute;
		top:250px;
		left:500px;
		transform: translate(-150px,-150px);
		padding:50px;
		height:450px;
		width:1000px;
	
}
input[type="text"]
{
	
	width:50%;
	border:none;
 	border-bottom:3px solid #ccc;
    outline:none;
	font-size:1.5em;
	
}



input[type="text"]:focus{
color:#000000;
trnsform:translate(0,-1.5em) scale(0.9,0.9);
}

table {
  border-collapse: collapse;
  width :500px;
  margin-top:150px;
  margin-left:150px;
}

table, td, th {
	
  border: 5px solid #ddd;
  width: 800px
  
}

th {
	
	height : 50px;
	background-color: #ddd;
	
	
}
tr{
		height :40px;
}

th , td {
	
	
text-align:center;
}
frame{
	
	border:5px solid black;
}


</style>
<title>SI CAl</title>
</head>
<body>

<form method="GET" action="SI_DB.php">
<h1><i><u>Intrest Calculator</U></i></h1>
<input type="text" placeholder="principal" name="p1"><br>

<input type="text" placeholder="ratio" name="r1"><br>
<input type="text" placeholder="time" name="t1"><br><br>

<input id="sub" type="submit" name="submit" value="calculate">
<label for="result" value="<?php echo $si ?>"
</form>



</body>
</html>


<?php
		/*	
			
			$user='root';
			$pass='';
			$db='phpclass';
			
			
			$con=mysqli_connect('localhost',$user,$pass,$db);
			
			if(!$con)
			{
				die("connection failed".mysqli_connect_error());
			}
			else
			{
				$sql="select * from sitable";
				$res=$con->query($sql);
			
				
					//output data from each row
					
					
					echo "<h2><B> HISTORY </B> </h2>";
					
					echo "<table border='1'>
							<tr>
						
							<th>principal</th>
							<th>rate</th>
							<th>TIME</th>
							<th>intrest</th>
							</tr>";	
							while($row= $res->fetch_assoc())
							{
								
								echo "<tr>";
							
								echo "<td>".$row['P']."</td>";
								echo "<td>".$row['R']."</td>";
								echo "<td>".$row['T']."</td>";
								echo "<td>".$row['si']."</td>";
								echo "</tr>";
							}
							echo "</table>";
				}
			
	
			
		
					$con->close();
							*/
					
					
			
			
	



?>




