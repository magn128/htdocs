<!DOCTYPE html>
<html lang="en">
<head>


<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
include "conn.php";
 
// SQL query for å hent data fra databasen
$sql = " SELECT * FROM ansatte ORDER BY id";
$sql1 = "SELECT * FROM ansatte";
$bilde = " SELECT bilde FROM ansatte";
$result = $mysqli->query($sql);

?>
<!-- HTML code -->
<!DOCTYPE html> 

<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title></title>
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
                    <th>Foravn</th>
                    <th>Etternavn</th>
                    <th>Mobil</th>
                    <th>Jobb</th>
                    <th>E-post</th>
                    <th>Stilling</th>
                    <th>Avdeling</th>
                    <th>ID</th>
                 
                </tr>
                <!-- php kode for å hent data til radene -->
                <?php
                    // loop som kjører til slutten av raden
                    while($rows=$result->fetch_assoc())
                    {
                        $bilde = $rows ['bilde'];
                        $fornavn = $rows['Fnavn'];
                        $etternavn = $rows['Enavn'];
                        $mobil = $rows['Mobil'];
                        $jobbtelefon = $rows['Jobb'];
                        $epost = $rows['Epost'];
                        $avdeling = $rows['Avdeling']; 
                        $brukerid = $rows['id'];
                        $stilling = $rows['Stilling'];

                       
                ?>
                <tr>
                    <!-- henter data fra hver rad -->
                    
                    <td><?php echo "<img src=\"$bilde\" width=\"100px\" height=\"100px\">";?></td>
                    <td><?php echo $rows['Fnavn'];?></td>
                    <td><?php echo $rows['Enavn'];?></td>
                    <td><?php echo $rows['Mobil'];?></td>
                    <td><?php echo $rows['Jobb'];?></td>
                    <td><?php echo $rows['Epost'];?></td>
                    <td><?php echo $rows['Stilling'];?></td>
                    <td><?php echo $rows['Avdeling'];?></td>
                    <td><?php echo $rows['id'];?></td>
                   
                   
                  
                </tr>
                <?php
                    }
                ?>
            </table>
           
            </div>
        </section>
        <div>
            <form action ="add.php">
                <input type="submit" value="legg til nye ansatte" />
                </form>
               
                <h1>Slett Ansatt</h1> <!-- Sletter ansatte -->
            <form action="/Del.php" method="get"> 
            <label for="id">Brukerid:</label>
            <input type="text"  name="id" required><br> 
            <input type="submit" value="Slett ansatt">
            </form>
       
       
        
    
    
   
        </div>
    <div>
    
    </div>


    </div>

</body>
</html>