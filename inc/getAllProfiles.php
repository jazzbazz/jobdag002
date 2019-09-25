<?php 
echo '<div class="container">';
$query = "SELECT  id, vnaam, naam, antw1, antw2, antw3, antw4, check1, check2, check3, omschrijving, pad FROM students  ";
if ($stmt = $con->prepare($query)) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	// $stmt->bind_param('ss', $_SESSION['voornaam'], $_SESSION['naam']);
	$stmt->execute();
	
	$stmt->store_result();
	$stmt->bind_result($id,$voornaam,$naam,$waarom,$fob,$wat,$waarde,$skill1,$skill2,$skill3,$omschrijving,$path);
	// $_SESSION['id']= $id;
  
while ($stmt->fetch()) {
         echo'<div class="card">
   <img class="card-img-top" src="'.$path.
   			'" alt="'.$voornaam.'_'.$id.'">';
        echo'<h4 class="card-title">'.$naam.'</h4>';
       echo '<h4 class="card-sub-title">'.$voornaam.'</h4>';
   echo'<div class="card-body">';

   		 
   		 echo'<p class="card-text">'.$omschrijving.'</p>';
//   		echo'<input type="hidden" name="hiddenId" value="'.$id.'">';
       echo '</div>';
  //  		echo'<form action="index.php" method="POST" name="indi">
 	// <input type="submit" name="indisubmit" class="btn btn-primary" value="See Profile">
 	// <input type="hidden" name="hiddenId" value="'.$id.'">';
 
echo '<div class ="hiddenFields">';
echo '<input type="hidden" name="waarom" value="'.$waarom.'">';
echo '<input type="hidden" name="fob" value="'.$fob.'">';
echo '<input type="hidden" name="wat" value="'.$wat.'">';
echo '<input type="hidden" name="waarde" value="'.$waarde.'">';
echo '<input type="hidden" name="skill1" value="'.$skill1.'">';
echo '<input type="hidden" name="skill2" value="'.$skill2.'">';
echo '<input type="hidden" name="skill3" value="'.$skill3.'">';
echo '<input type="hidden" name="waarom" value="'.$fob.'"></div>';
  // echo $id. " ".$voornaam." ".$naam." ".$omschrijving." ".$path;
        // echo 'First Name: '.$an2.'<br>';
        // echo 'Last Name: '.$an3.'<br>';
        // echo 'Username: '.$an4.'<br><br>';
echo '

    
 </div>';

   }

}else {
	$error = $con->errno. ' '.$con->error;
	echo $error;
}
echo "</div>";
?>
