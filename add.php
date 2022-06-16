<?php
include 'conn.php';
if(isset($_POST["submit"])) { //submit loop
        $fnavn = htmlspecialchars($_POST["Fnavn"]);
        $enavn = htmlspecialchars($_POST["Enavn"]);
        $mobil = htmlspecialchars($_POST["Mobil"]);
        $jobb = htmlspecialchars($_POST["Jobb"]);
        $epost = htmlspecialchars($_POST["Epost"]);
        $stilling = htmlspecialchars($_POST["Stilling"]);
        $avdeling = htmlspecialchars($_POST["Avdeling"]);
        $bilde = $_POST["img/$enavn.jpg"];
    
    
        $sql = "INSERT INTO ansatte (Fnavn, Enavn,  Mobil, Jobb, Epost, Stilling, Avdeling, bilde) VALUES ('$fnavn', '$enavn', '$mobil', '$jobb', '$epost', '$stilling', '$avdeling', '$bilde')";
        if(mysqli_query($mysqli, $sql)) {
            // success case
            header('Location: index.php');
        } else {
            // error case
            echo "Error: " . mysqli_error($mysqli);
        }
    }
    ?>
    <head>
    <meta charset="UTF-8">
    <title></title>
    <!-- Link til css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<form action ="index.php">
                <input type="submit" value="Tilbake" />
                </form>
    <div class="row">
                <div class="col-md-5 mx-auto">
                <!-- legger til ny ansatt i databasen -->
                    <H1>legg til ny ansatt</H1>
                    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
                       
                        <input type="text" name="Fnavn" placeholder="Fornavn" required><br>
                        <input type="text" name="Enavn" placeholder="Etternavn" required><br>
                        <input type="number" name="Mobil" placeholder="Mobil" required><br>
                        <input type="number" name="Jobb" placeholder="Jobb" required><br>
                        <input type="email" name="Epost" placeholder="Epost" required><br>
                        <input type="text" name="Stilling" placeholder="Stilling" required><br>
                        <input type="text" name="Avdeling" placeholder="Avdeling" required><br>
                        
                        
                       
                        <button type="submit" name="submit">Legg til</button>
                        <!-- -->
                </div>
                
            </div>