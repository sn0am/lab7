<head>
	<title>Completed Registration Form</title>
	<style type="text/css">
		h1 { color:  purple ; }
		h2 { font-family: Times New Roman; color: blue ; }
		p { font-family: Ariel; color: black}
		input[type=submit] {
  			background-color: #FF0000; /* Red */
  			border: none;
  			color: white;
  			padding: 20px;
  			text-align: center;
  			text-decoration: none;
  			display: inline-block;
  			font-size: 12px;
  			margin: 4px 2px;
  			cursor: pointer;
		}
	</style>
</head>
<body>

	<h1 style="text-align:center">REGISTRATION INFORMATION</h1>

<?php
		
	if ((!empty($_POST['shirt'])) && !empty($_POST['age']) && !empty($_POST['fname']) && !empty($_POST['address']) && !empty($_POST['state']) && !empty($_POST['city']) && !empty($_POST['zip']) && !empty($_POST['gender']))
		
		{
		
			$shirt = filter_var( $_POST['shirt'], FILTER_SANITIZE_STRING);
			$age = filter_var( $_POST['age'], FILTER_SANITIZE_NUMBER_INT);
			$fname = filter_var( $_POST['fname'], FILTER_SANITIZE_STRING);
			$gender = filter_var( $_POST['gender'], FILTER_SANITIZE_STRING);
			$address = filter_var( $_POST['address'], FILTER_SANITIZE_STRING);
			$zip = filter_var( $_POST['zip'], FILTER_SANITIZE_NUMBER_INT);
			$state = filter_var( $_POST['state'], FILTER_SANITIZE_STRING);
			$city = filter_var( $_POST['city'], FILTER_SANITIZE_STRING);
		
			if ($shirt == "SM") {
				if ($age < 65) {
					$price = 25 ;
				} else if ($age > 65 ) {
					$price = 20 ;
				}		
			}
			if ($shirt == "MD") {
				if ($age < 65) {
					$price = 25 ;
				} else if ($age >= 65 ) {
					$price = 20 ;
				}			
			}
			if ($shirt == "LG") {
				if ($age < 65) {
					$price = 25 ;
				} else if ($age >= 65 ) {
					$price = 20 ;
				}	
			}	
			if ($shirt == "XL") {
				if ($age < 65) {
					$price = 25 ;
				} else if ($age >= 65 ) {
					$price = 20 ;
				}	
			}	
			if ($shirt == "2XL") {
				if ($age < 65) {
					$price = 27 ;
				} else if ($age >= 65 ) {
					$price = 22 ;
				}			

			}
			
			echo "<div style=\"text-align:center\">";
			echo "<p style='color: black ;'>Hey " . $fname . "!" . "</p>" ;
			echo "<p style='color: black ;'>Based on the information you have provided, Your ticket price should be " . $price . "$" . "</p>" ;
			echo "</br>";
			echo "</br>";
			echo "<p style='color: black ;'>Please verify that the information below is correct. If it is not, please go back and fill out the form properly to get accurate pricing information." . "</p>" ;
			echo "<p style='color: black ;'>Address: " . $address . ", " . $city  . ", " . $state . " " . $zip . "</p>";
			echo "<p style='color: black ;'>Age: " . $age . "</p>";
			echo "<p style='color: black ;'>Gender: " . $gender . "</p>";
			echo "<p style='color: black ;'>Shirt Size: " . $shirt . "</p>";
			echo "</div>";
		
		
		}
		
	else
		
		{
			echo "<div style=\"text-align:center\">";
			echo "You have not properly completed some or all of the required information. Please go back to the registration page and try again!";
			echo "</div>";
		}
?>
		<div style="text-align:center">
		
			<form method="post" action="marathonreg.html">

						</select></p>
                        <input type="submit" value="Go back!" />
						
            </form>
			
		</div>
		
</body>
