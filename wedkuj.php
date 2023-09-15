<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkowanie</title>
    <link href="styl_1.css" rel="stylesheet">
</head>
<body>
    <div id="header">
        <h1>Portal dla wędkarzy</h1>
    </div>
    <div id="left1">
        <h3>Ryby zamieszkujące rzeki</h3>
        <ol>
        <?php
            $connect = mysqli_connect('localhost', 'root', '', 'wedkowanie');

            $question1 = "SELECT ryby.nazwa, lowisko.akwen, lowisko.wojewodztwo FROM ryby,  lowisko WHERE ryby.id=lowisko.Ryby_id and lowisko.rodzaj = 3";
            $result1 = mysqli_query($connect, $question1);
            while($row1 = mysqli_fetch_row($result1)){
                echo "<li>$row1[0] pływa w rzece $row1[1], $row1[2]</li>";
            }
        ?>
        </ol>
    </div>
    <div id="right">
        <img src="ryba1.jpg" alt="Sum"><br>
        <a href="kwerendy.txt">Pobierz kwerendy</a>
    </div>
    <div id="left2">
        <h3>Ryby drapieżne naszych wód</h3>
        <table>
            <tr>
                <th>L.p.</th>
                <th>Gatunek</th>
                <th>Występowanie</th>
            </tr>
            <?php
                $question2 = "SELECT id, nazwa, wystepowanie FROM ryby WHERE styl_zycia = 1";
                $result2 = mysqli_query($connect, $question2);
                while($row2 = mysqli_fetch_row($result2)){
                    echo "<tr>
                            <td>$row2[0]</td>
                            <td>$row2[1]</td>
                            <td>$row2[2]</td>
                          </tr>";
                }
                mysqli_close($connect);
            ?>
        </table>
    </div>
    <div id="footer">
        <p>Stronę wykonał: Tymoteusz Rutkowski</p>
    </div>
</body>
</html>