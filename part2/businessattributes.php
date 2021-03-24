<?php
?><head>
	<title>Completed Registration Form</title>
	<style type="text/css">
		h1 { color:  purple ; }
		h2 { font-family: Times New Roman; color: blue ; }
		p { font-family: Ariel; color: green}
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

	<h1 style="text-align:center">Completed Form</h1>

<?php
		
	if ((isset($_POST['T'])) && (isset($_POST['age'])))
        {
		$T = filter_var( $_POST['T'], FILTER_SANITIZE_STRING);
		$age = filter_var( $_POST['age'], FILTER_SANITIZE_NUMBER_INT);
		$fn = filter_var( $_POST['fn'], FILTER_SANITIZE_STRING);
		$G = filter_var( $_POST['G'], FILTER_SANITIZE_STRING);
		$ad = filter_var( $_POST['ad'], FILTER_SANITIZE_STRING);
		$zip = filter_var( $_POST['zip'], FILTER_SANITIZE_NUMBER_INT);
		$S = filter_var( $_POST['S'], FILTER_SANITIZE_STRING);
		$city = filter_var( $_POST['city'], FILTER_SANITIZE_STRING);
		
		if ($T == "SM") {
			if ($age < 65) {
				$price = 25 ;
			} else if ($age > 65 ) {
				$price = 20 ;
		}		
	}
		if ($T == "MD") {
			if ($age < 65) {
				$price = 25 ;
			} else if ($age >= 65 ) {
				$price = 20 ;
		}			
	}
		if ($T == "LG") {
			if ($age < 65) {
				$price = 25 ;
			} else if ($age >= 65 ) {
				$price = 20 ;
		}	
	}	
		if ($T == "XL") {
			if ($age < 65) {
				$price = 25 ;
			} else if ($age >= 65 ) {
				$price = 20 ;
		}	
	}	
		if ($T == "2XL") {
			if ($age < 65) {
				$price = 27 ;
			} else if ($age >= 65 ) {
				$price = 22 ;
		}			
	}
		if ($T == "3XL") {
			if ($age < 65) {
				$price = 29 ;
			} else if ($age >= 65 ) {
				$price = 24 ;
		}	
		
	}
		echo "<div style=\"text-align:center\">";
		echo "<p style='color: black ;'>Hey " . $fn . "!" . "</p>" ;
		echo "<p style='color: black ;'>Based on the information you have provided, Your ticket price should be " . $price . "$" . "</p>" ;
		echo "</br>";
		echo "</br>";
		echo "<p style='color: black ;'>Please verify that the information below is correct. If it is not, please go back and fill out the form properly to get accurate pricing information." . "</p>" ;
		echo "<p style='color: black ;'>Address: " . $ad . ", " . $city  . ", " . $S . " " . $zip . "</p>";
		echo "<p style='color: black ;'>Age: " . $age . "</p>";
		echo "<p style='color: black ;'>Gender: " . $G . "</p>";
		echo "<p style='color: black ;'>Shirt Size: " . $T . "</p>";
		echo "</div>";
		
		
		
		}
	else
	{
      		print "<p>Missing or invalid parameters. Please go back to the lab.html page to
      		enter valid information.<br />";
      		print "<a href='UnitConvertion.html'>Unit Converter Page</a>";
	}
?>
	<div style="text-align:center">
			<form method="post" action="marathonreg.html">

			</select></p>
                        <input type="submit" value="Go back!" />
                  </form>
				  </div>
	</body>
