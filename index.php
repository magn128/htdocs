<!DOCTYPE html>
<html lang="en">
<head>


<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// brukernavnet er root
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
<!-- HTML code -->
<!DOCTYPE html> 

<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>GFG User Details</title>
    <!-- Link til css -->
    <link rel="stylesheet" href="css/style.css">
</head>
 
<body>
  <div id="innhold">
    <section>
      <div id="top">
        <h1>Ansatte</h1>
        </div>
        <!-- ansatte liste -->
        <div id="ansatt">
        <table>
            <tr>
                <th>Bilde</th>
                <th>Navn</th>
                <th>Mobil</th>
                <th>Jobb</th>
                <th>E-post</th>
                <th>Stilling</th>
                <th>Avdeling</th>
            </tr>
            <!-- php kode for å hent data til radene -->
            <?php
                // loop som kjører til slutten av
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- henter data fra hver rad -->
                
                <td><img src="img/heskestad.jpg" alt=""></td>
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
        </div>
    </section>
    </div>

 
</body>
</html>