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

$result = $dbcon->query("SELECT * FROM treatment");

echo "<html>";
echo "<body>";
echo "<center>";
      echo '<table border="1">';
      echo "<tr>";
        echo "<th> TID </th>";
        echo "<th> TREATMENT NAME </th>";
        echo "<th> TREATMENT TYPE </th>";
        echo "<th> DISEASE ID </th>";
      echo "</tr>";


if ($result->num_rows > 0) {
    while($row = mysqli_fetch_assoc($result)) {

      echo"<tr>";
      echo '<td>'.$row["tid"].'</td>';
      echo '<td>'.$row["tname"].'</td>';
      echo '<td>'.$row["ttype"].'</td>';
      echo '<td>'.$row["deid"].'</td>';
      echo "</tr>";


    }
} else {
    echo "0\n";
}
echo "</table>";
echo "</center>";
echo "</body>";
echo "</html>";

mysqli_close($dbcon);
?>
