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
                    
                    foreach ($a3 as $row)
                    {
                        echo json_decode($row) -> id;
                        echo json_decode($row) -> name;

                        echo "<br>";
                    }

                    ?>