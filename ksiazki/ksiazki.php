  
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="/style.css">
</head>
<body>
  
<?php
require_once("../connect.php");
  
   echo ("<br>autorzy<br>");
$sql = "SELECT * FROM biblAutor";
echo ("<li>".$sql);
  $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  

echo('<select name="Autor">');

    while($row=mysqli_fetch_assoc($result)){
        echo'<option value="'.$row['id_autor'].'">';
        echo($row['autor']);
        echo"</option>"; 
    }
echo('</select>');
  echo("<br>");
  
  echo ("<br>tytuł<br>");
$sql = "SELECT * FROM biblTytuł";
echo ("<li>".$sql);
  $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  

echo('<select name="Tytuł">');

    while($row=mysqli_fetch_assoc($result)){
        echo'<option value="'.$row['id_tytuł'].'">';
        echo($row['tytuł']);
        echo"</option>"; 
    }
echo('</select>');
  echo("<br>");
  
  echo("<br>lista<br>");
$sql = "SELECT id_book, autor, tytuł FROM bibl_book, bibl_tytuł, bibl_autor WHERE bibl_tytuł.id_tytuł = bibl_book.id_tytuł AND bibl_autor.id_autor = bibl_book.id_autor";

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>Id</th><th>Autor</th><th>Tytuł</th>');
    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id_book'].'</td><td>'.$row['autor'].'</td><td>'.$row['tytuł'].'</td>');
        echo('</tr>');
    }
    echo('</table>');

echo("<br>zad 1<br>");
$sql = "SELECT * FROM biblAutor";
echo($sql);
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>Id</th><th>Autor</th>');
    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id'].'</td><td>'.$row['autor'].'</td>');
        echo('</tr>');
    }
    echo('</table>');
  
  echo("<br>zad 2<br>");
$sql = "SELECT * FROM biblTytuł";
echo($sql);
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
   echo('<th>Id</th><th>Tytuł</th>');
    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id'].'</td><td>'.$row['tytuł'].'</td>');
        echo('</tr>');
    }
    echo('</table>');
  
echo("<br>zad 3<br>");
$sql = "SELECT * FROM biblAutor_biblTytuł";
echo($sql);
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>Id</th><th>Id Autor</th><th>Id tytuł</th>');
    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id'].'</td><td>'.$row['biblAutor_id'].'</td><td>'.$row['biblTytuł_id'].'</td>');
        echo('</tr>');
    }
    echo('</table>');
?>
</body>
</html>