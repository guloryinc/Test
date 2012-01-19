<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
 
<html>
  <head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  
  <body>
	<table border="1">
	<tr>
	<td>row 1, cell 1</td>
	<td>row 1, cell 2</td>
	</tr>
	<tr>
	<td>row 2, cell 1</td>
	<td>row 2, cell 2</td>
	</tr>
	</table>
	
    	Hello PHP!
		
		<h1><?php
			echo strtoupper(" Hello PHP table!  ");
		?></h1>

		
		<?php
			echo "<table style=\"border: 1px solid black;\"> \n";
			echo "<tr><td colspan=\"12\">";
			echo "hello table";
			echo "</td></tr>";
			for ($y=1; $y<=12; $y++) {
				echo "<tr> \n";
				for ($x=1; $x<=12; $x++) {
					// echo "<td style=\"border: 1px solid black; width: 25px; padding: 4px; text-align:center;\">";
					 echo "<td style=\"border: 1px solid black;width: 25px;padding: 4px;text-align:center;\">";
					echo ($x * $y);
					echo "</td> ";
				}
				echo "</tr> \n";
			}
			echo "</table>";
		?>
		
    </div>
  </body>
</html>