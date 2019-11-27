<?php
error_reporting(E_ALL);
$db_user = "root";
$db_password = "";
$db_host = "127.0.0.1";
$db_name = "hosp";




$dbcon = new mysqli($db_host, $db_user, $db_password, $db_name);
if(!$dbcon){
    echo mysqli_connect_error();
}


echo "<html>";
echo "<body>";
echo "<center>";
echo "<h1>VIEW</h1>";
      echo '<table border="1">';
      echo "<tr>";
        echo "<th> Department </th>";
        echo "<th> Disease </th>";
        echo "<th> Hospitals </th>";
        echo "<th> Patient </th>";
        echo "<th> Physician </th>";
        echo "<th> Patient_Treatment </th>";
        echo "<th> Treatment </th>";
        echo "<th> Users </th>";
      echo "</tr>";



      echo"<tr>";
      echo '<td><a href="dept.php">Click</a></td>';
      echo '<td><a href="dise.php">Click</a></td>';
      echo '<td><a href="hospi.php">Click</a></td>';
      echo '<td><a href="patient.php">Click</a></td>';
      echo '<td><a href="phy.php">Click</a></td>';
      echo '<td><a href="pt.php">Click</a></td>';
      echo '<td><a href="treat.php">Click</a></td>';
      echo '<td><a href="users.php">Click</a></td>';
      echo "</tr>";



echo "</table>";
echo "</center>";
echo "</body>";
echo "</html>";

mysqli_close($dbcon);
?>
