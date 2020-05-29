<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('header.php'); ?>

	<div class="recipient_reg" style="background-color:#272327;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;">Add Doctor</h3>

		<div class="formstyle" style="float: right;padding:25px;border: 1px solid lightgrey;margin-right:320px; margin-bottom:30px;background-color: #101011;color:#d4530d;;">
		<form enctype="multipart/form-data" method="post" class="text-center" style="margin-left: 110px">
			 <div class="col-md-12">
					    <input type="text" name="name" value="" placeholder="Full name" required>
					</label><br><br>
					<label>
						 <input type="text" name="address" value="" placeholder="address" required>
					</label><br><br>
					<label>
						 <input type="text" name="contact" value="" placeholder="contact" required>
					</label><br><br>

					<label>
						 <input type="email" name="email"  value="" placeholder="email" required>
					</label><br><br>
					
					<div style = "float:left;"> 
						 <select name="expertise" required >
										<option>-Expertise-</option>
										<option>Medicine</option>
										<option>Heart</option>
										<option>Bone</option>
										<option>General Physician</option>
										<option>Neurologist</option>
									</select>
					</div> <br><br><br> 
					
					   <input type="text" name="fee" value="" placeholder="Fee" required>
					</label><br><br>
					<label>
					<label>
					<input type="text" name="userid" value="" placeholder="User Id" required>
					</label><br><br>
					<label>
					<input type="text" name="pass"  value="" placeholder="password" required>
					</label><br><br>	
					
					<button name="submit" type="submit" style="margin-left:148px;margin-top: 4px;width:95px;border-radius: 3px;height: 30px">Add</button> <br>
				
			</div>
				</form>
			</div>
	</div>

			<?php
						include('../config.php');
						if(isset($_POST['submit']))
						{
							$url = "https://f36rikbn42.execute-api.us-east-1.amazonaws.com/dev1/adddoctors";

							$client = curl_init($url);
							curl_setopt($client,CURLOPT_POST,true);
							$data_array = array(
								"name" => $_POST["name"],
								"address" => $_POST["address"],
								"contact" => $_POST["contact"],
							  "email" => $_POST["email"],
							  "expertise" => $_POST["expertise"],
							  "fee" => $_POST["fee"],
							  "userid" => $_POST["userid"],
							  "password" => $_POST["pass"]

							);
							$string = json_encode($data_array);
							curl_setopt($client,CURLOPT_POSTFIELDS,$string);
							curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
							
							curl_exec($client);
							curl_close($client);
						}
					?> 

 <?php include('footer.php'); ?>
	</div>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>