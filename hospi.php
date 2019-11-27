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

$result = $dbcon->query("SELECT * FROM hospital");

echo "<html>";
echo "<body>";
echo "<center>";
      echo '<table border="1">';
      echo "<tr>";
        echo "<th> HID </th>";
        echo "<th> NAME </th>";
        echo "<th> ST ADDRESS </th>";
        echo "<th> CITY </th>";
        echo "<th> STATE </th>";
        echo "<th> ZIP </th>";
      echo "</tr>";


if ($result->num_rows > 0) {
    while($row = mysqli_fetch_assoc($result)) {

      echo"<tr>";
      echo '<td>'.$row["hid"].'</td>';
      echo '<td>'.$row["hname"].'</td>';
      echo '<td>'.$row["hst_address"].'</td>';
      echo '<td>'.$row["hst_city"].'</td>';
      echo '<td>'.$row["hstate"].'</td>';
      echo '<td>'.$row["hzip"].'</td>';
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
