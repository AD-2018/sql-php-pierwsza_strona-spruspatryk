<?php
require_once("connect.php");
$sql = "SELECT sum(ilosc) from koszyk,klienci,zamowienia where zamowienia.id_klient=klienci.id_klient and zamowienia.id_zamowienia=koszyk.id_zamowienia and imie like '%a'";
$result = mysqli_query($conn,$sql);
echo("<table border='1'>");
echo("<th>suma produktuf</th>");
while($row=mysqli_fetch_assoc($result))
{
    echo("<tr>");
    echo("<td>".$row['sum(ilosc)']."</td>");
    echo("</tr>");

}
echo("</table>");
?>
suma produktuw kobiet w koszyku