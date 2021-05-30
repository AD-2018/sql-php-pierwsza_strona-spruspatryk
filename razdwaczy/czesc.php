
	
<?php
require_once("connect.php");
$sql = "select name from country where region = 'Caribbean'";
$result = mysqli_query($conn,$sql);
echo("<th>Kraj</th><th>region</th>");
while($row = mysqli_fetch_assoc($result));
{
    echo("<tr>");
    echo("<td>".$row['Name']."</td><td>".$row['Region']."</td>");
    echo("</tr>")
};
echo("</table>")
echo("<br>");
?>

