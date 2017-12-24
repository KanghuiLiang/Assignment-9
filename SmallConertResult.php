<?php

$noOfSeats = 0;
$totalPrice = 0;
$a_price = 3000;
$b_price = 2000;
$c_price = 1000;
$s_price = $a_price * 0.5;

$receipt = array();



if(isset($_POST['a1'])){
	$receipt[$noOfSeats] = $_POST['a1'].": ". $a_price;
	$noOfSeats+=1;
	$totalPrice += $a_price;
}

if(isset($_POST['a2'])){
	$receipt[$noOfSeats] = $_POST['a2'].": ". $a_price;
	$noOfSeats+=1;
	$totalPrice += $a_price;
}
if(isset($_POST['a3'])){
	echo "<div style= 'color: green'> Lucky you! You have got 50% DISTCOUNT for A3! </div>"; 
	$receipt[$noOfSeats] = $_POST['a3'].": ". $s_price;
	$noOfSeats+=1;
	$totalPrice += $s_price;
}


if(isset($_POST['b1'])){
	$receipt[$noOfSeats] = $_POST['b1'].": ". $b_price;
	$noOfSeats+=1;
	$totalPrice += $b_price;
}
if(isset($_POST['b2'])){
	$receipt[$noOfSeats] = $_POST['b2'].": ". $b_price;
	$noOfSeats+=1;
	$totalPrice += $b_price;
}
if(isset($_POST['b3'])){
	$receipt[$noOfSeats] = $_POST['b3'].": ". $b_price;
	$noOfSeats+=1;
	$totalPrice += $b_price;
}
if(isset($_POST['c1'])){
	$receipt[$noOfSeats] = $_POST['c1'].": ". $c_price;
	$noOfSeats+=1;
	$totalPrice += $c_price;
}
if(isset($_POST['c2'])){
	$receipt[$noOfSeats] = $_POST['c2'].": ". $c_price;
	$noOfSeats+=1;
	$totalPrice += $c_price;
}
if(isset($_POST['c3'])){
	$receipt[$noOfSeats] = $_POST['c3'].": ". $c_price;
	$noOfSeats+=1;
	$totalPrice += $c_price;
}

for ($i=0; $i < count($receipt); $i++) { 
	echo $receipt[$i]."<br>";
}


if($noOfSeats == 0)
{
	echo "<div style='color: red'>Please select some tickets</div>";
}
elseif ($noOfSeats > 4) {
	echo "<div style='color: red'>The maximum number of ticket is 4</div>";
}
else{
	
	echo "Number of seats: ".$noOfSeats."<br>";
	echo "Total Price: ".$totalPrice."<br>";
}

?>