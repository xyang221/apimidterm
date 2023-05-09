<?php
session_start();

require_once("db_conn.php");

$id = $_SESSION['id'];
$sql =  "SELECT status FROM users WHERE id = $id";
$Sql_query = mysqli_query($conn,$sql);
$result = mysqli_fetch_all($Sql_query,MYSQLI_ASSOC);

$query = mysqli_query($conn,"UPDATE users SET status='Deleted' WHERE id = $id") or die(mysqli_error());

session_unset();
session_destroy();

header('location:index.php');

?>
