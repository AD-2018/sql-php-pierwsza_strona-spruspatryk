<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
        <div class="nav">
    <a href="index.php">menu</a>
</div>
</body>
</html>
<?php
require_once("connect.php");
echo("<br>Zad 1 <br>");
$sql ="SELECT *,YEAR(curdate())-YEAR(data_urodzenia) AS wiek from pracownicy,organizacja where id_org=dzial"; 
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>Wiek</th><th>Nazwa Działu</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['wiek'].'</td><td>'.$row['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
?>