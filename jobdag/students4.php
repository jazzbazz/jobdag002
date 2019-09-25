<?php 
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Advent+Pro|Roboto&display=swap" rel="stylesheet">
    <!-- own CSS -->
    <link rel="stylesheet" href="css/styles.css">
    <title>Students Simplest 4</title>
    <style>
        .round {
            border: 3px solid skyblue;
            background-color: darkorange;
        }
    </style>
</head>

<body>
    <header>
        <div class="logo"><a href="home.html"><img src="images/logo_kleur.png" alt="logo"></a></div>
        <h1>Hello, Students!</h1>
    </header>
    <main class="container flexd2">
        <p class="intro">
            <h3>Wonderful <?php echo $_SESSION['voornaam']?>.</h3>
        </p>
        <div class="imgoutput">
<?php
echo "<div class='card-header'><h4>".$_SESSION['voornaam']."</h4>";
         echo "<h4>".$_SESSION['naam']."</h4></div>";
         echo "<div class='imagefit'><img src='".$_SESSION['path']."' alt='".$_SESSION['alt']."'></div>";
         echo "<div class='omschrijf'><p>".$_SESSION['omschrijving']."</p></div>";
         if($_SESSION['heartbeat'] === "both"){
            echo "<div class='siri'>Uw hart gaat sneller slaan van zowel Front End als Back End.</div>";
         } else {
            echo "<div class='siri'>Uw hart gaat sneller slaan van ".$_SESSION['heartbeat']."</div>";
         }
         echo "<div class='skills'>Uw sterkste punten zijn ".$_SESSION['skill1'].", ".$_SESSION['skill2']." en ".$_SESSION['skill3'].".</div>";
         echo "<div class='antwoorden'><p> U koos om volgende reden voor webdevolopment : ".$_SESSION['waarom']."</p><p> U zoekt volgende zaken in een bedrijf : ".$_SESSION['wat']."</p><p> Volgende waardes vindt u belangrijk : ".$_SESSION['waarde']."</p></div>";

            
?>       
        </div>
        <form action="profielen.php" method="POST" class="final">
            <input type="submit" name="satisfied" value="naar profielen">
        </form>
    </main>
    <footer>
        <section class=progressSection>
            <span>progress</span>
            <div class="proGress">
                <div class="round1 round"></div>
                <div class="round2 round"></div>
                <div class="round3 round"></div>
            </div>
        </section>
        <p>&copy;2019 Students WebOntwikkeling Leuven</p>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>