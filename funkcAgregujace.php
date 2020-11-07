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
$sql = "SELECT sum(zarobki) as suma_zarobków FROM pracownicy, organizacja where id_org=dzial";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>suma zarobków</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['suma_zarobków'].'</td>');
        echo('</tr>');
    }
   echo('</table>');

echo("<br>Zad 2 <br>");
$sql = "SELECT sum(zarobki) as suma_zarobków FROM pracownicy, organizacja where id_org=dzial and imie like '%a'";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>suma zarobków</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['suma_zarobków'].'</td>');
        echo('</tr>');
    }

    echo('</table>');

echo("<br>Zad 3<br>");
$sql = "SELECT sum(zarobki) as suma_zarobków FROM pracownicy, organizacja where id_org=dzial and (dzial=2 or dzial=3) and imie not like '%a'";
echo($sql);
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>suma zarobków</th>');
    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['suma_zarobków'].'</td>');
        echo('</tr>');
    }
    echo('</table>');

echo("<br>Zad 4<br>");
$sql = "SELECT avg(zarobki) as średnia_zarobków FROM pracownicy, organizacja where id_org=dzial and imie not like '%a'";
echo($sql);
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>średnia zarobków</th>');
    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['średnia_zarobków'].'</td>');
        echo('</tr>');
    }
    echo('</table>');





?>
