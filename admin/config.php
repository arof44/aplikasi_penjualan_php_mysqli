<?php
$conn = mysqli_connect("172.20.0.2","root","","penjualan_php");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>