						<?php	
							$servername = "bookit.csanikuadi9k.us-east-1.rds.amazonaws.com";
							$username = "admin";
							$password = "pratik1995";
							$dbname = "bookit";

							// Create connection
							$conn = new mysqli($servername, $username, $password, $dbname);
							// Check connection
							if ($conn->connect_error) {
							    die("Connection failed: " . $conn->connect_error);
							}
						?>	