<?php
require_once("connect.php");
$sql = "SELECT name from country where continent ='Africa'";
$result = mysqli_query($conn,$sql);
echo("<table border='1'>");
echo(<"th>Kraj</th><th>Kontynent</th>");
while($row = mysqli_fetch_assoc($result))
{
    echo("<tr>");
    echo(<"td>".$row['Name']."</td><td>".$row['Continent']."</td>");
    echo(<"tr>");
    };
    echo("<table>");
    echo(<"br>");
    ?>