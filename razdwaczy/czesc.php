<html> <head>    <link rel="stylesheet" href="style.css">    <meta charset="UTF-8">    <title>Test</title> </head> <body class="uklad_grida"> 

<?php

require_once("connect.php");
$sql = "SELECT * from country where continent = 'Africa'";
$result = mysqli_query($conn, $sql);
echo("<table border='1'>");
echo("<th>Kraj</th><th>kontynent</th>");
while($row = mysqli_fetch_assoc($result))
{
    echo("<tr>")
    echo("<td>".$row['Name']."</td><td>".$row['Continent']."</td>");
    echo("</tr>")
};
    echo("</table>");
    echo("</br>");
?>
</html>