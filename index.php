<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-spruspatryk">GitHub</a>
    <h1>Patryk Sprus nr 11</h1>
<div class="nav">
    <a href="orgPracownicy.php">Organizacja Pracownicy</a>
    <a href="funkcAgregujace.php">Funkcje Agregujące</a>
</div>
</body>
</html>
<?php
require_once("connect.php");

echo("<br>Zad 1 <br>");
$sql = "SELECT * FROM pracownicy where dzial=2
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>zarobki</th><th>nazwa dzialu</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['zarobki'].'</td><td>'.$row['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');

?>
