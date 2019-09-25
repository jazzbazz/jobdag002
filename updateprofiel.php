<?php 
if (!isset($_POST['update'])){


$head = '<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Updateprofiel</title>
</head>
<body>
  <h1>Geef even uw gegevens om te updaten...</h1>
  <form action="updateprofiel.php" method="POST">
    <input type="text" name = "voornaam" placeholder="Voornaam graag" required>
    <input type="text" name = "naam" placeholder="Naam graag" required>
    <input type="submit" value="submit" name="update">
  </form>
  
</body>
</html>';
echo $head;
}else {
 




// VARIABELEN OPHALEN

  $postvnaam = strtolower(filter_var(trim($_POST['voornaam']), FILTER_SANITIZE_STRING));

  $postnaam = strtolower(filter_var(trim($_POST['naam']), FILTER_SANITIZE_STRING));


include_once('inc/verbind.inc.php');


$query = "SELECT  id, vnaam, naam, antw1, antw2, antw3, antw4, check1, check2, check3, omschrijving, pad FROM students  WHERE vnaam = (?) AND naam = (?)";
if ($stmt = $con->prepare($query)) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('ss', $postvnaam, $postnaam);
	$stmt->execute();
	
	$stmt->store_result();
	$stmt->bind_result($id,$voornaam,$naam,$waarom,$fob,$wat,$waarde, $skill1, $skill2, $skill3, $omschrijving,$path);
	// $_SESSION['id']= $id;
while ($stmt->fetch()) {
        // echo 'ID: '.$ant1.'<br>';
        // echo 'First Name: '.$an2.'<br>';
        // echo 'Last Name: '.$an3.'<br>';
        // echo 'Username: '.$an4.'<br><br>';
   }

   echo $id."<br>";
   echo $voornaam."<br>";
   echo $naam."<br>";
   echo $waarom."<br>";
   echo $fob."<br>";
   echo $wat."<br>";
   echo $waarde."<br>";
   echo $skill1."<br>";
   echo $skill2."<br>";
   echo $skill3."<br>";
   echo $omschrijving."<br>";
   echo $path."<br>";
   echo "geen foutmeldingen gezien maar ook geen variablen";

// echo "dit is omschrijving <br>".$omschrijving;
// echo "dit is pad <br>".$pad;
}else {
	$error = $con->errno. ' '.$con->error;
	echo $error;
}

// } else {
//   die ("something went wrong line40 in update na isset-ctrl");
// }

}



?>