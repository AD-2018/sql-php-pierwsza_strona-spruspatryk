<?php
require_once("connect.php");
$sql = "SELECT avg(koszt) from produkty";
$result = mysqli_query($conn,$sql);
echo("<table border='1'>");
echo("<th>średnia cena</th>");
while($row=mysqli_fetch_assoc($result))
{
    echo("<tr>");
    echo("<td>".$row['avg(koszt)']."</td>");
    echo("</tr>");

}
echo("</table>");
?>