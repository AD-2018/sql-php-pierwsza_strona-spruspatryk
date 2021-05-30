

<?php
require_once("connect.php");
$sql = "SELECT name from country where Region = 'Caribbean'";
$result = mysqli_query($conn,$sql);
echo("<tabler border='1'>");
echo("<th>Kraj</th><th>region</th>");
while($row = mysqli_fetch_assoc($result));
{
    echo("<tr>");
    echo("<td>".$row['Name']."<td><td>".$row['Region']."</td>");
    echo("</tr>");
};
echo("</table>");
echo("<br>");
?>
