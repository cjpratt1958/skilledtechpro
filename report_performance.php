<?php
  include_once 'includes/conn_sql.php;

  $sql = "SET @name := '%JOSH%'";
  $sql = "SET @month := 01";
  $sql = "SET @amount := (SELECT SUM(AMOUNT)FROM skilledtechpro.hcpimport WHERE employee like @name AND date like '____-01%')";
  $sql = "SET @count := (SELECT COUNT(AMOUNT)FROM skilledtechpro.hcpimport WHERE employee like @name AND date like '____-01%')";
  $sql = "SET @avg := (SELECT AVG(AMOUNT)FROM skilledtechpro.hcpimport WHERE employee like @name AND date like '____-01%')";
  $sql = "SELECT @NAME AS NAME, @MONTH AS MONTH, @AMOUNT AS SOLD, @count AS JOBS, @avg AS AVG";

?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>


</body>
</html>
