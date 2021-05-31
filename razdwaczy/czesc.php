

<?php
require_once("connect.php");
$sql = "SELECT * FROM klienci where imie not like '%a'";
$result = mysqli_query($conn, $sql);

echo("<h1>Tabelka</h1>");
echo("<table border='1'>");
echo("<th>id_klient</th><th>Imie</th><th>nazwisko</th><th>Data Urodzenia</th><th>kraj</th>");
while($row = mysqli_fetch_assoc($result)) {
echo("<tr>");
echo("<td>".$row['id_klient']."</td><td>".$row['imie']."</td><td>".$row['nazwisko']."</td><td>".$row['data_urodzenia']."</td><td>".$row['kraj']."</td>");
echo("</tr>");
};
echo("</table>");
echo ("<br>");
?>