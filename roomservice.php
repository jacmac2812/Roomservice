<?php
include('db.php');
$fii = mysqli_query($con,"SELECT * FROM `orders`");
while ($row = mysqli_fetch_assoc($fii)); {
	$roomnumber = $row['roomnumber'];
	$foo = unserialize($row['foo']);
	echo " foo : ".$foo. ", room : ".$roomnumber." <br> ";
}
$arrayAgain = unserialize($data['foo']);

mysqli_close($con);

$alt = mysqli_query($con,"SELECT `foo` FROM `orders`");
$bar = 'a:1:{s:5:"chips";a:5:{s:4:"name";s:5:"chips";s:4:"code";s:5:"chips";s:5:"price";s:5:"30.00";s:8:"quantity";i:1;s:5:"image";s:29:"product-images/laptop-bag.jpg";}}';

$unserialize = unserialize($alt);

print_r($unserialize);
?>