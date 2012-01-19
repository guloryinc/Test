<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
 
<html>
  <head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  
  <body>
    	Hello PHP!
		
		<h1><?php
			echo " Hello PHP!  ";
		?></h1>
		
	<?php
	
	    define("The_year","2007",true);
		echo the_year;
		echo"<br/>";

		$test1 = "30cm";
		$newtest1 = (integer)$test1;
		echo $newtest1;
		echo"<br/>";
		
		$testing; // declare without assigning
		
		
		$testing = 4;
		if($testing == 5){
			echo "Hello IF";
			echo "<br/>";
		}else{
			echo "<br/>";
		}
		
		$testing2 = (string)$testing;
		echo "is an string? ".is_string($testing2); 
		echo"<br/>";
		
		echo "is an integer? ".is_int($testing); // checks if integer
		echo "<br/>";
		echo "is null? ".is_null($testing); // checks if null
		echo "<br/>";
		$testing = "five";
		echo "is a string? ".is_string($testing); // checks if string
		echo "<br/>";
		$testing = 5.024;
		echo "is a double? ".is_double($testing); // checks if double
		echo "<br/>";
		$testing = true;
		echo "is boolean? ".is_bool($testing); // checks if boolean
		echo "<br/>";
		$testing = array('apple', 'orange', 'pear');
		echo "is an array? ".is_array($testing); // checks if array
		echo "<br/>";
		echo "is numeric? ".is_numeric($testing); // checks if is numeric
		echo "<br/>";
		echo "is a resource? ".is_resource($testing); // checks if is a resource
		echo "<br/>";
		echo "is an array? ".is_array($testing); // checks if is an array
		echo "<br/>";
		?>	
		
		<?php
			$undecided = 3.14;
			echo "is ".$undecided." a double? ".is_double($undecided)."<br/>"; // double
			settype($undecided, 'string');
			echo "is ".$undecided." a string? ".is_string($undecided)."<br/>"; // string
			settype($undecided, 'integer');
			echo "is ".$undecided." an integer? ".is_integer($undecided)."<br/>"; // integer
			settype($undecided, 'double');
			echo "is ".$undecided." a double? ".is_double($undecided)."<br/>"; // double
			settype($undecided, 'bool');
			echo "is ".$undecided." a boolean? ".is_bool($undecided)."<br/>"; // boolean
		?>
		
    </div>
  </body>
</html>