<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('header.php'); ?>

	<div class="dashboard" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;padding: 5px;">Patient List</h3>
		
		
	</div>
		
			<div class="all_user" style="margin-top:0px; margin-left: 40px;">
				<?php 
					include('../config.php');

					$url = "https://zhpjyth5og.execute-api.us-east-1.amazonaws.com/dev/getpatients";
					$client = curl_init($url);
					curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
					$response = curl_exec($client);
					$a=str_replace('"[',"",$response);
					$a1=str_replace('\\','',$a);
					$a2=str_replace(']"',"",$a1);
					$a2=str_replace("}, {", "}|{", $a2);
						$a3 = explode("|",$a2);
						
				
					if($a3>=1)
					{
						echo "<table border='1' align='center' cellpadding='32'>
							<tr>
								<th>patient ID</th>
								<th>Patient Name</th>
								
								<th>Age</th>
								<th>Mobile</th>
								<th>Address</th>
								<th>B-Group</th>

								<th>Email </th>
								
							</tr>";
							foreach ($a3 as $row)
							{
								echo "<tr>";
								echo "<td>".json_decode($row) -> id."</td>";
								echo "<td>".json_decode($row) -> name."</td>";				
								echo "<td>".json_decode($row) -> age."</td>";
								echo "<td>".json_decode($row) -> contact."</td>";
								echo "<td>".json_decode($row) -> address."</td>";
								echo "<td>".json_decode($row) -> bgroup."</td>";
								
								echo "<td>".json_decode($row) -> email."</td>";
								echo "</tr>";
						}
						echo "</table>";
					}
					else{
						print "<p align='center'>Sorry, No match found for your search result..!!!</p>";
					}

					?>
			</div>
	
 <?php include('footer.php'); ?>
	</div>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>
