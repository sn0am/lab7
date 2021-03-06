<head>
	<title>Unit Converter</title>
	<style type="text/css">
		h1 { color:  red ; }
		h2 { font-family: Times New Roman; color: blue ; }
		p { font-family: Ariel; color: green}
		input[type=submit] {
  			background-color: #4CAF50; /* Green */
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
	<h1>Unit Converter</h1>
<?php

	if ((isset($_POST['original_unit'])) && (isset($_POST['value'])) && (isset($_POST['target_unit'])))
      	{
		$original_unit = filter_var( $_POST['original_unit'], FILTER_SANITIZE_STRING);
		$value = filter_var( $_POST['value'], FILTER_SANITIZE_STRING);
		$target_unit = filter_var( $_POST['target_unit'], FILTER_SANITIZE_STRING);

		echo "<p>The original value is " . $value . " " . $original_unit . "</p>" ;
	
		if ($original_unit == "inch") {
			if ($target_unit == "centimeter") {
				$target_value = $value * 2.54 ;
			} else if ($target_unit == "meter") {
				$target_value = $value * 2.54 / 100 ;
			} else if ($target_unit == "kilometer") {
				$target_value = $value * 2.54 / 1000 ;
			}
		}		
	
		if ($original_unit == "feet") {
			if ($target_unit == "centimeter") {
				$target_value = $value * 30.48 ;
			} else if ($target_unit == "meter") {
				$target_value = $value * 30.48 / 100 ;
			} else if ($target_unit == "kilometer") {
				$target_value = $value * 30.48 / 1000 ;
			}
		}		
	
		if ($original_unit == "mile") {
			if ($target_unit == "centimeter") {
				$target_value = $value * 160934 ;
			} else if ($target_unit == "meter") {
				$target_value = $value * 1609.34  ;
			} else if ($target_unit == "kilometer") {
				$target_value = $value * 1.60934 ;
			}
		}		
		if ($original_unit == "ounces") {
			if ($target_unit == "grams") {
				$target_value = $value * 28.34952 ;
			} else if ($target_unit == "kilograms") {
				$target_value = $value / 35.27396195  ;
            }
        }
		if ($original_unit == "pound") {
			if ($target_unit == "grams") {
				$target_value = $value * 453.59237 ;
			} else if ($target_unit == "kilograms") {
				$target_value = $value * 0.45359237  ;
		}
        }
		if ($original_unit == "fluid ounces") {
			if ($target_unit == "liters") {
				$target_value = $value / 33.814 ;
		}
        }
		if ($original_unit == "pint") {
			if ($target_unit == "liters") {
				$target_value = $value / 2.113;
			}
		}		
		if ($original_unit == "quart") {
			if ($target_unit == "liters") {
				$target_value = $value / 1.057 ;
		}
        }
		if ($original_unit == "gallon") {
			if ($target_unit == "liters") {
				$target_value = $value * 3.785;
		}			
        }
		echo "<p style='color: darkblue ;'>The target value is " . $target_value . " " . $target_unit . "</p>" ;
		echo "</br>";
		echo "<p style='color: black ;'>If target value is empty, you will have to go back and select the appropriate target unit" . "</p>" ;
	}
	else
	{
      		print "<p>Missing or invalid parameters. Please go back to the lab.html page to
      		enter valid information.<br />";
      		print "<a href='UnitConvertion.html'>Unit Converter Page</a>";
	}
?>
		<div>
		
			<form method="post" action="UnitConvertion.html">
			</select></p>
                        <input type="submit" value="Go back!" />
                  </form>
			 </div>
	</body>
