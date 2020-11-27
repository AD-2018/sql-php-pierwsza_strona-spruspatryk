<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Dane do Bazy</title>
</head>
<body>
	<h3>Dodawanie pracownika</h3>
   <form action="insert.php" method="POST">
    <b>Imie:</b><input type="text" name="imie"><br>
    <b>Dział:</b><input type="number" name="dzial"></br>
    <b>Zarobki:</b><input type="number" name="zarobki"></br>
    <b>Data Urodzenia:</b><input type="date" name="data_urodzenia"></br>
    <input type="submit" value="DODAJ">
</form>

<h3>Usuwanie pracownika</h3>
<form action="delete.php" method="POST">
   <input type="number" name="id"></br>
   <input type="submit" value="USUŃ">
 </form>
<?php
require_once("connect.php");
$sql = "SELECT * FROM pracownicy, organizacja WHERE id_org = dzial";

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

    $result = mysqli_query($conn, $sql);
    if ( $result) {
         echo "<br>";
     } else {
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }

    echo("<h1>Tabela</h1>");

    echo('<table border="1">');
echo('<th>Id</th><th>Imie</th><th>zarobki</th><th>dzial</th><th>Data urodzenia</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id_pracownicy'].'</td>'.'<td>'.$row['imie'].'</td>'.'<td>'.$row['zarobki'].'</td>'.'<td>'.$row['dzial'].'</td>'.'<td>'.$row['data_urodzenia'].'</td>'.
	     
	     '<td>
	    
	     <form action="delete.php" method="POST">
  		<input type="number" name="id" value="'.$row['id_pracownicy'].'"></br>
   		<input type="submit" value="x">
	</form>
	     
	     </td>');
	    
        echo('</tr>');
    }
  echo('</table>');
?>
</body>
</html>
