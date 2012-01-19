<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
 
<html>
  <head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  
  <body> 	
	<?php
		function bighell(){
			$testing =5;
			echo "<pre>";
			echo "<h1>HELLO       !</H1>";
			echo "<br/>";
			printf("%20s%20s","books","cds");
			printf("\n");
			printf("%-20s%-20s","books","cds");
			echo "</pre>";
		}
		bighell();
		?> 	
		
		<?php
		$products = array("Green armchair" => "222.4",
		"Candlestick"=> "4",
		"Coffee table"=> "80.6");
		echo "<pre>";
		printf("%-20s%20s\n", "Name", "Price");
		printf("%'-40s\n", "");
		foreach ($products as $key=>$val) {
		   printf( "%-20s%20.2f\n", $key, $val );
		}
		echo "</pre>";
		?>
		
    </div>
  </body>
</html>