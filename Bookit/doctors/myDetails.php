<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<?php include('header.php'); ?>
				<?php 
							include('../config.php');
							$sql="SELECT * FROM doctor where userid='" . $_SESSION["userid"] . "'";
			
							$q=mysqli_query($conn,$sql);
							$row=mysqli_num_rows($q);
							
							$data=mysqli_fetch_array($q);
							$name=$data[1];
							$address=$data[2];
							$contact=$data[3];
							$email=$data[4];
							$expertise=$data[5];
							$fee=$data[6];
							$userid=$data[7];

							mysqli_close($conn);
				?>

<div class="login" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;">My Details</h3>
			<div class="formstyle" style="float: right;padding:20px;border: 1px solid lightgrey;margin-right:415px; margin-bottom:30px;background-color:#f3f3f8;color:#141313;">
				<form action="" method="post" class="text-center form-group">
					<label>
						Your Name: <input type="text" name="name" value="<?php echo $name; ?>" required>
					</label><br><br>

 					<label>
						Address: <input type="text" name="address" value="<?php echo $address; ?>"  required>
					</label><br><br>

					
					<label>
						Contact: <input type="text" name="contact" value="<?php echo $contact; ?>"  required="required" />
					</label><br><br>
 					<label>
						Email: <input type="email" name="email" value="<?php echo $email; ?>" " required>
					</label><br><br>
					<label>
						Userid: <input type="text" name="userid" value="<?php echo $userid; ?>"  disabled>
					</label><br><br>
					<label>
						Expert in: <input type="email" name="email" value="<?php echo $expertise; ?>"  disabled>
					</label><br><br>

					<label>
						Fee: <input type="text" name="fee" value="<?php echo $fee; ?>"  disabled>
					</label><br><br>
					<label>
				<button name="submit" type="submit" style="margin-left:30px;width:108px;border-radius: 3px;">Update</button> <br>


			</form> <br><br>
	</div>	
</div>
	<?php

						include('../config.php');
						if(isset($_POST['submit'])){
							

							$sql="UPDATE doctor SET name='" .$_POST["name"]. "' ,address='" .$_POST["address"]."' , contact='" .$_POST["contact"]. "',email='" .$_POST["email"]. "' WHERE userid='" . $_SESSION["userid"] . "'";
		
							if (mysqli_query($conn, $sql)) {
							echo "<script>alert(' Record updated successfully');</script>";
							header("location:myDetails.php");

							} else {
							    echo "<script>alert('There was a Error Updating profile');</script>";
							}

						mysqli_close($conn);
													}
					?> 
			
  <?php include('../footer.php'); ?>
	</div>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
