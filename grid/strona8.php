<!DOCTYPE html>
<html>

<head>
    <title>Patryk Sprus 3Ti</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Grid.css">
</head>

<body>
    <strong>
    <div class="str8">
        <div class="str8A">
        <?php
                require_once("../connect.php");
                $sql = "SELECT * FROM rola";
                
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                      }
                
                    $result = mysqli_query($conn, $sql);
                    if ( $result) {
                         echo "<br>";
                     } else {
                       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                     }
                
                    echo("<h1>Role</h1>");
                
                    echo("<table border='1'>");
                    echo("<th>ID</th><th>Rola</th>");
                        while($row = mysqli_fetch_assoc($result)) {
                            echo("<tr>");
                            echo("<td>".$row['id']."</td><td>".$row['rola']."</td>");
                            echo("</tr>");
                        };
                    echo("</table>");
                    echo ("<br>");
            ?>
        </div>
        <div class="str8B">
        <?php
                        require_once("../connect.php");
                        $sql = "select rola, `Imie-Nazwisko`, (`WDW`.ID) as ID_TAB from `patryksprus_baza`.WDW, `patryksprus_baza`.rola, `patryksprus_baza`.Osoby where Osoby.ID=osoby_id and rola.id=klasa_id order by ID_TAB asc";
                            if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                             }
                                $result = mysqli_query($conn, $sql);
                            if ( $result) {
                            } else {
                                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                            }
                        
                            echo("<h1>Wiele do Wielu</h1>");
                        
                            echo("<table border='1'>");
                            echo("<th>ID</th><th>Rola</th><th>Pracownik</th>");
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo("<tr>");
                                    echo("<td>".$row['ID_TAB']."</td><td>".$row['rola']."</td><td>".$row['Imie-Nazwisko']."</td>");
                                    echo("</tr>");
                                };
                            echo("</table>");
                            echo ("<br>");
                ?>
        </div>
        <div class="str8C">3</div>
        <div class="str8F">
        <?php
                require_once("../connect.php");
                $sql = "SELECT * FROM Osoby";
                
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                      }
                
                    $result = mysqli_query($conn, $sql);
                    if ( $result) {
                         echo "<br>";
                     } else {
                       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                     }
                
                    echo("<h1>Osoby</h1>");
                
                    echo("<table border='1'>");
                    echo("<th>ID</th><th>Imię i Nazwisko</th>");
                        while($row = mysqli_fetch_assoc($result)) {
                            echo("<tr>");
                            echo("<td>".$row['ID']."</td><td>".$row['Imie-Nazwisko']."</td>");
                            echo("</tr>");
                        };
                    echo("</table>");
                    echo ("<br>");
            ?>
        </div>
        <div class="str8E">5</div>
        <div class="str8D">System Informatyczny</div>
    </div>
    </strong>
</body>

</html>