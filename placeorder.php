<?php
include_once 'dbfun.php';

$userid=$_SESSION["userid"];
$link=connect();
mysqli_query($link,"insert into orders(userid) values('$userid')");
$orderid=mysqli_insert_id($link);


mysqli_query($link,"INSERT INTO order_details(prodid,qty,order_id) select prodid,qty,$orderid from cart c where c.userid='$userid'");

mysqli_query($link,"delete from cart where userid='$userid'");

$_SESSION["msg"] = "Order placed successfully orderid $orderid";

echo "<script>window.open('invoice.php?orderid=".$orderid."', '_blank'); window.location.href='index.php'; </script>";
// echo "<script>window.open('invoice.php?orderid=".$orderid."', '_blank'); </script>";
// echo $link;
?>
