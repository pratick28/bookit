<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('header.php'); ?>

	<!-- this is for donor registraton -->
	<div class="dashboard" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;padding: 5px;">All registered Doctor List</h3>
	
	</div>
	<div class="all_user" style="margin-top:0px; margin-left: 40px;">
				<?php 
					include('../config.php');

					$sql = " SELECT * FROM doctor";
					$result = mysqli_query($conn,$sql);
					$count = mysqli_num_rows($result);

					if($count>=1){
						echo "<table border='1' align='center' cellpadding='32'>
							<tr>
								<th>Name</th>
								<th>Address</th>
								<th>Mobile</th>
								<th>Email</th>
								<th>Expert in</th>
								<th>Fee</th>
								<th>Action</th>								
							</tr>";
						while($row=mysqli_fetch_array($result)){
								echo "<tr>";
								// echo "<td>".$row['doctor_id']."</td>";
								echo "<td>".$row['name']."</td>";
								echo "<td>".$row['address']."</td>";
								echo "<td>".$row['contact']."</td>";
								echo "<td>".$row['email']."</td>";
								echo "<td>".$row['expertise']."</td>";
								echo "<td>".$row['fee']."</td>";
								echo "<form action='' method='post' class='text-center form-group'>";
								echo "<td><button type='submit' name='submit' style='color:#000;'>Delete</button></td>";
								echo "<input type='hidden' name='name' value='".$row['name']."'>";								
								echo "</tr></form>";
						}
						echo "</table>";
					}
					else{
						print "<p align='center'>Sorry, No match found for your search result..!!!</p>";
					}

					?>
			</div>
			<?php
							include('config.php');
							if(isset($_POST['submit'])){
							
							$sql="DELETE from doctor where name='" .$_POST['name']. "'";
		
							if (mysqli_query($conn, $sql)) {
							//echo "<script>alert(' Record updated successfully');</script>";
							header("location:viewDoctor.php");
							} else {
							    echo "<script>alert('There was a Error Updating profile');</script>";
							}

						mysqli_close($conn);
													}
					?> 
		
 <?php include('footer.php'); ?>
	</div>
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>
