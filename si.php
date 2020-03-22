<html>
<head>
<style>
h1{
	font-size:60px
}
body{
	
		left:100px;
		border:solid;
		text-align:center;
	    height:700;
		width:2000;
}
     form
{
		position:absolute;
		top:250px;
		left:500px;
		transform: translate(-150px,-150px)
		
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
color:#505050;
trnsform:translate(0,-1.5em) scale(0.9,0.9);
}
</style>
<title>SI CAL DB connection</title>
</head>
<body>
<form method="post" action="">
<h1><i><u>Intrest Calculator</U></i></h1>
<input type="text" placeholder="principal" name="p"><br>

<input type="text" placeholder="ratio" name="r"><br>
<input type="text" placeholder="time" name="t"><br><br>

<h3>S I <input type="radio" value="10" name="si"><br>
<h3>C I <input type="radio" value="20" name="si"><br><br>
<input id="sub" type="submit" name="submit" value="calculate">
</form>


</body>
</html>


<?php 
	 
      if(isset($_POST['submit']))
	  {
        $P = $_POST['p'];  
        $R = $_POST['r'];  
		$T = $_POST['t']; 
		$T1 = $_POST['si']; 
		 
		
		if($T1==10)
		{
        $si = ($P*$R*$T)/100;     
echo "<h1>Simple intrest is :".$si;   
		}
		if($T1==20)
		{
        $ci = $P * (pow((1 + $R / 100), $T)); 
       
echo "<h1>compound intrest is :".$ci;  
		}
		
	  }
?>