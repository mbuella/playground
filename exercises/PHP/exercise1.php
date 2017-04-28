<!DOCTYPE html>
<html>
<head>
	<title>PHP Strings: Adding Fractions</title>
</head>
<body>
<?php

	$x = "3/18";
	$y = "7/56";

	//numerator of x
	$num_x = substr($x, 0, strpos($x,"/"));
	$den_x = substr($x, strpos($x,"/")+1);

	//numerator of y
	$num_y = substr($y, 0, strpos($y,"/"));
	$den_y = substr($y, strpos($y,"/")+1);

	//step 1: multiply their denom and make it the sum's denom
	$sum_den = $den_x * $den_y;

	//step2: divide sum_den with the den_x then multiply the 
	//result by num_x
	$mult_x = ($sum_den / $den_x) * $num_x;

	//step2: divide sum_den with the den_y then multiply the 
	//result by num_y
	$mult_y = ($sum_den / $den_y) * $num_y;

	//add mult_x and mult_y and put it to sum_num
	$sum_num = $mult_x + $mult_y;
	//display sum of the fractions
	echo "$x + $y = $sum_num/$sum_den";
?>
	<math>  
  <mfrac bevelled="true">
     <mfrac>
        <mi> a </mi>
        <mi> b </mi>
     </mfrac>
     <mfrac>
        <mi> c </mi>
        <mi> d </mi>
     </mfrac>
  </mfrac>
</math>

</body>
</html>