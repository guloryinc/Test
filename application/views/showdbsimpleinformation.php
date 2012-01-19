<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
 
<html>
  <head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  
  <body>
    <div id="container">
		<?php 
		echo "       ffffff";
		
		 ?>
    	<p>My view has been loaded</p>
		
		<?php foreach($row as $r) : ?>
		
		<h1><?php echo $r->title; ?></h1>
		<div><?php echo $r->contents; ?></div>
		
		<?php endforeach; ?>
    </div>
  </body>
</html>
