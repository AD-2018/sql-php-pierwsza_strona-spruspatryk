<!DOCTYPE html>
<link rel="stylesheet" href="style.css">
<div class="grid_uklad">
<div class="gridA"></div>
        <div class="gridB"></div>
        <div class="gridC"></div>
        <div class="gridD"></div>
        <div class="gridE"></div>
        </div>

<?php

require_once("connect.php");
$sql = "SELECT Name from country where Continent = 'Africa'";
$result = mysqli_query($conn, $sql);
echo("<table border='1'>");
echo("<th>Kraj</th><th>kontynent</th>");
while($row = mysqli_fetch_assoc($result))
{
    echo("<tr>");
    echo("<td>".$row['Name']."</td><td>".$row['Continent']."</td>");
    echo("</tr>");
};
    echo("</table>");
    echo("</br>");
?>
</html>
