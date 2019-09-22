<?php
    include 'includes.php';
    if(isset($_POST['bNaam'])){
        $bNaam=$_POST['bNaam'];
        $bAdres=$_POST['bAdres'];
        $bAdres2=$_POST['bAdres2'];
        $bPostcode=$_POST['bPostcode'];
        $bGemeente=$_POST['bGemeente'];
        $bContactVn=$_POST['bContactVn'];
        $bContactFn=$_POST['bContactFn'];
        $bContactGsm=$_POST['bContactGsm'];
        $bContactGender=$_POST['bContactGender'];
        $bContactTel=$_POST['bContactTel'];
        $bContactEmail=$_POST['bContactEmail'];
        $bCoreBusiness=$_POST['bCoreBusiness'];
    
        $sql = "INSERT INTO ictbedrijven (bID, bNaam, bAdres, bAdres2, bPostcode, bGemeente, bContactVn, bContactFn, bContactGender, bContactTel, bContactGsm, bContactEmail, bCoreBusiness) VALUES (NULL, '$bNaam', '$bAdres', '$bAdres2', '$bPostcode', '$bGemeente', '$bContactVn', '$bContactFn', '$bContactGender', '$bContactTel', '$bContactGsm', '$bContactEmail', '$bCoreBusiness');";
        if($antwoord = $pdo->query($sql)){
            echo "Uw gegevens werden geregistreerd";
        }
        else
        {
            echo "Er is iets fout gelopen bij het wegschrijven van uw gegevens";
            echo '<form><input type="submit" value="OPNIEUW" name="foutknop"></form>';
        }
        
    }
?>