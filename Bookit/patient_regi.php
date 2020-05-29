<?php include('header.php'); ?>

	<div class="recipient_reg" style="background-color:#272327;margin-top:33px;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;">Patient Registration</h3>

		<div class="formstyle" style="float: right;padding:25px;border: 1px solid lightgrey;margin-right:415px; margin-bottom:30px;background-color:#f3f3f8;color:#141313;">
		<form enctype="multipart/form-data" method="post" class="text-center">
			 <div class="col-md-12">
				  
			 		<label>
						Your Name: <input type="text" name="name" value="" placeholder="Full name" required>
					</label><br><br>

					<label>
						Age: <input type="number" name="age"  placeholder="age" pattern="[0-9]{2,2}" title="please enter only  numbers between 2 to 2 for age"/>
					</label><br><br>
					<label>
						Mobile: <input type="number" name="contact"  placeholder="contact no" required="required" pattern="[0-9]{10,11}" title="please enter only numbers between 10 to 11 for mobile no."/>
					</label><br><br>
 					<label>
						Address: <input type="text" name="address" value="" placeholder="address">
					</label><br><br>
					<label>
						Blood Group: <input type="text" name="bgroup" value="" placeholder="blood group">
					</label><br><br>
					<label>
					<label>
						Email: <input type="email" name="email"  value="" placeholder="email" required>
					</label><br><br>
					<label>
						Password: <input type="password" name="password"  value="" placeholder="password" required>
					</label><br><br>			
					<button name="submit" type="submit" style="margin-left:60px;width: 85px;border-radius: 3px;">Register</button> <br>
				
			</div>	<!-- col-md-12 -->


				</form>
			</div>
	</div>
	
	
 <?php include('footer.php'); ?>

	</div><!--  containerFluid Ends -->
	<script src="js/bootstrap.min.js"></script>

				<?php
						include('config.php');
						if(isset($_POST['submit']))
						{
							$url = "https://zhpjyth5og.execute-api.us-east-1.amazonaws.com/dev/addpatient";

$client = curl_init($url);
curl_setopt($client,CURLOPT_POST,true);
$data_array = array(
    "name" => $_POST["name"],
    "age" => $_POST["age"],
    "contact" => $_POST["contact"],
  "address" => $_POST["address"],
  "bgroup" => $_POST["bgroup"],
  "email" => $_POST["email"],
  "password" => $_POST["password"]
);
$string = json_encode($data_array);
curl_setopt($client,CURLOPT_POSTFIELDS,$string);
curl_setopt($client,CURLOPT_RETURNTRANSFER,true);

curl_exec($client);
curl_close($client);
					}
				?> 



	<!-- validation and insertion End-->



</body>
</html>