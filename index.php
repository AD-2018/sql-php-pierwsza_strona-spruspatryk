<?php

$conn = new mysqli("mysql-patryksprus.alwaysdata.net","217136","@H@R8He5TsaaXJR","patryksprus_baza");
$sql = "SELECT * FROM pracownicy";
$wynik = mysqli_query($conn, $sql);


    echo('<table border="1">');
    echo('<th>Imie</th><th>zarobki</th>');

    while($wiersz=mysqli_fetch_assoc($wynik)){
        echo('<tr>');
        echo('<td>'.$wiersz['imie'].'</td>'.'<td>'.$wiersz['zarobki'].'</td>');
        echo('</tr>');
    }

    echo('</table>');


?>
