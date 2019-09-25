<?php
    include 'includes.php';
    if(isset($_POST['bNaam'])){
        $bNaam=$_POST['bNaam'];
        $bAdres=$_POST['bAdres'];
        $bPostcode=$_POST['bPostcode'];
        $bGemeente=$_POST['bGemeente'];
        $bContactVn=$_POST['bContactVn'];
        $bContactFn=$_POST['bContactFn'];
        $bContactGsm=$_POST['bContactGsm'];
        $bContactTel=$_POST['bContactTel'];
        $bContactEmail=$_POST['bContactEmail'];
        $bAantalPersonen=$_POST['bAantalPersonen'];
        $bCoreBusiness=$_POST['bCoreBusiness'];

    
        $sql = "INSERT INTO ict_bedrijven (bID, bNaam, bAdres, bPostcode, bGemeente, bContactVn, bContactFn, bContactTel, bContactGsm,         bContactEmail, bAantalPersonen, bCoreBusiness) VALUES (NULL, '$bNaam', '$bAdres', '$bPostcode', '$bGemeente','$bContactVn', '$bContactFn', '$bContactTel', '$bContactGsm', '$bContactEmail', '$bAantalPersonen', '$bCoreBusiness');";

        

         if($antwoord = $pdo->query($sql)){
             header("location:ekat/index.php?succes=geregistreerd");
          
        }
         else
         {

             header("location:ekat/index.php?error=foutje");

         }
        
    }
?>