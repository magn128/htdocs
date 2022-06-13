<!DOCTYPE html>
<html lang="en">
<head>


<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// Username is root
$user = 'root';
$password = '';
 

$database = '13.06utviklingsoppgave';
 
// Server er på localhost

$servername='localhost';
$mysqli = new mysqli($servername, $user,
                $password, $database);
// Ser etter tilkoblinger
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}
 
// SQL query for å hent data fra databasen
$sql = " SELECT * FROM ansatte ORDER BY id";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html> 
rus
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>GFG User Details</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
 
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
 
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
 
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
        }
    </style>
</head>
 
<body>
    <section>
        <h1>Ansatte</h1>
        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
                <th>Navn</th>
                <th>Mobil</th>
                <th>Jobb</th>
                <th>E-post</th>
                <th>Stilling</th>
                <th>Avdeling</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['Navn'];?></td>
                <td><?php echo $rows['Mobil'];?></td>
                <td><?php echo $rows['Jobb'];?></td>
                <td><?php echo $rows['E-post'];?></td>
                <td><?php echo $rows['Stilling'];?></td>
                <td><?php echo $rows['Avdeling'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </section>
</body>
</html>