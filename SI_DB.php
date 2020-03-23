

<?php 

		$user='root';
			$pass='';
			$db='phpclass';
			
			
			
			$con=mysqli_connect('localhost',$user,$pass,$db);
	 
      
	     
        $P = $_GET['p1'];  
        $R = $_GET['r1'];  
		$T = $_GET['t1']; 
		$si = ($P*$R*$T)/100;     
		echo "Simple intrest is :".$si;   
		
		$sql="INSERT INTO sitable(P,R,T,si)values('$P','$R','$T','$si')";
		mysqli_query($con,$sql);
		
		
		
		
		
			//header("location:http://localhost/SI/");

	
		
	  
?>