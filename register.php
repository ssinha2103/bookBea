<?php

include_once 'dbfun.php';

extract($_POST);

//$link= connect();
//$query="call RegisterUser(?,?,?)";
//$stmt=mysqli_prepare($link, $query);
//mysqli_stmt_bind_param($stmt, 'sss', $fname,$userid,$pwd);
//mysqli_stmt_execute($stmt);
//mysqli_close($link);

executeProc("RegisterUser",false,$fname,$userid,$pwd);

$_SESSION["userid"]=$userid;
$_SESSION["uname"]=$fname;
$_SESSION["msg"]="Registered successfully";
header("location: index.php");

