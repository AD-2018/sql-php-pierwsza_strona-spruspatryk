<?php    

			
require_once("connect.php");	

	
$sql = "SELECT * FROM country WHERE continent = africa"
$result = mysqli_query($conn, $sql);

    echo("<h1>Tabelka</h1>");

    echo("<table border='1'>");
    echo("<th>Kraj</th><th>kontynent</th>");	
        while($row = mysqli_fetch_assoc($result)) {
            echo("<tr>");
            echo("<td>".$row['Name']."</td><td>".$row['Continent']."</td>");
            echo("</tr>");
        };
    echo("</table>");
    echo ("<br>");
?>