<!DOCTYPE html>
<html>

<head>
    <title>Patryk Sprus 3Ti</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Grid.css">
</head>

<body>
    <strong>
    <div class="str5">
        <div class="str5A">
        <?php
                require_once("../connect.php");
                $sql = "SELECT * FROM osoby_v2";
                
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                      }
                
                    $result = mysqli_query($conn, $sql);
                    if ( $result) {
                         echo "<br>";
                     } else {
                       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                     }
                
                    echo("<h1>Fryzjerzy</h1>");
                
                    echo("<table border='1'>");
                    echo("<th>ID</th><th>Fryzjer</th>");
                        while($row = mysqli_fetch_assoc($result)) {
                            echo("<tr>");
                            echo("<td>".$row['id']."</td><td>".$row['imiona']."</td>");
                            echo("</tr>");
                        };
                    echo("</table>");
                    echo ("<br>");
                    ?>
        </div>
        <div class="str5B">
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
                
                    echo("<h1>Klienci</h1>");
                
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
        <div class="str5C">
        <?php
                        require_once("../connect.php");
                        $sql = "select imiona, `Imie-Nazwisko`, (`WDW`.ID) as ID_TAB from `patryksprus_baza`.WDW, `patryksprus_baza`.osoby_v2, `patryksprus_baza`.Osoby where Osoby.ID=osoby_id and osoby_v2.id=klasa_id order by ID_TAB asc";
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
                            echo("<th>ID</th><th>Fryzjer</th><th>Klient</th>");
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo("<tr>");
                                    echo("<td>".$row['ID_TAB']."</td><td>".$row['imiona']."</td><td>".$row['Imie-Nazwisko']."</td>");
                                    echo("</tr>");
                                };
                            echo("</table>");
                            echo ("<br>");
                ?>
        </div>
        <div class="str5D">SPA</div>
    </div>
    </strong>
</body>

</html>