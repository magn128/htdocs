<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>oppdater data</h1>

                        <input type="text" name="id" placeholder="ID">
                        
                        
                        
                        
                       
                       <input type="submit" name="oppdater" value="UPDATE DATA">




</body>
</html>


<?php

$conn = mysqli_connect("localhost","root","");
$db = mysqli_select_db($conn, '13.06utviklingsoppgave');

if(isset($_POST['oppdater']))
{
  $id = $_POST['id'];

  $query = "DELETE FROM ansatte WHERE id='$_POST[id]'";
  $query_run = mysqli_query($conn,$query);

  if($query_run)
  {
    echo '<script type="text/javascript"> alert("Oppdatert") </script>';

  }
  else
  {
    echo '<script type="text/javascript"> alert("ikke Oppdatert") </script>';
  }

}
