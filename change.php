
  <?php
    include 'conn.php';
        if(isset($_POST["endre"])) {

            $id = htmlspecialchars($_POST["id"]);
            $ansatt_navn = htmlspecialchars($_POST["Navn"]);
            $mobil = htmlspecialchars($_POST["Mobil"]);
            $jobb = htmlspecialchars($_POST["Jobb"]);
            $epost = htmlspecialchars($_POST["Epost"]);
            $stilling = htmlspecialchars($_POST["Stilling"]);
            $avdeling = htmlspecialchars($_POST["Avdeling"]);
            


         $sql1 = "UPDATE ansatte SET Navn, Mobil, Jobb, Epost, Stilling, Avdeling WHERE id VALUES ('$id', '$ansatt_navn', '$mobil', '$jobb', '$epost', '$stilling', '$avdeling')";
       
        }  ?>

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
    <H1>Rediger info</H1>
    


                   <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">

                
                  
                        <input type="number" name="id" placeholder="ID">
                        <input type="text" name="Navn" placeholder="Navn" >
                        <input type="number" name="Mobil" placeholder="Mobil"  >
                        <input type="number" name="Jobb" placeholder="Jobb"  >
                        <input type="email" name="Epost" placeholder="Epost"  >
                        <input type="text" name="Stilling" placeholder="Stilling"  >
                        <input type="text" name="Avdeling" placeholder="Avdeling"  >
                        
                        
                        
                        
                       
                        <button type="submit"  name="endre">Endre</button>

                </div>
                
            </div>