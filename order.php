<?php
$mysqli = new mysqli("sql7.freemysqlhosting.net:3306","sql7287843","2XReVlDc1Z","sql7287843") or die(mysqli_error($mysqli));

if (isset($_POST['save'])) {
    $roomnumber = $_POST ['roomnumber'];
    $foo = serialize($_SESSION["shopping_cart"]);
    echo $foo;


    $mysqli->query("INSERT INTO orders (roomnumber, foo) VALUES ('$roomnumber', '$foo')") or die($mysqli->error);
}
?>