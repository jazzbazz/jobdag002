<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css"
        integrity="sha256-PF6MatZtiJ8/c9O9HQ8uSUXr++R9KBYu4gbNG5511WE=" crossorigin="anonymous" />
    <link href="./css/style.css" rel="stylesheet">
    <title>Webcreators</title>
    <!-- XTRA CSS VOOR PROFIELEN !!!!! ADDED 22 09 -->
    <style>

        article.profielen {
            position:relative;
        }


        .container {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            position:relative;
            border-radius: 15px;

        }
        .card {
            width: 20%;
            border: 1px solid #55A79C;
            height: 200px;
            background: white;
            cursor:pointer;
            border-radius: 15px;
            
        }
        .card-img-top {
            width: 100px;
            display: block;
            margin: 0 auto;
        }

        img {

            width: 100px;
            display: block;
        }

        
/* MODAL IS NU MET DISPLAY NON EN NOT ANIMATED*/
        #modalleke {
            display:none;
            position:absolute;
            width:100%;
            height: 100%;
            
            opacity:0.95;
            background: white;
            left: 0px;
            top:0px;
            z-index: 4;
            font-size: 1em;
            color: black;
            border-radius: 15px;
        }

        #modalleke img {
            display: block;
            width: 30%;
            margin:20px auto;
            border-radius: 50%;
            opacity: 1;

        }

        .closeModal {
            width: 80px;
            height:80px;
            background-color: firebrick;
            cursor:pointer;
            position:absolute;
            top: 05px;
            right: 20px;
            color: white;
            font-size: 3em;
            opacity: 1;
            z-index: 4;
            border-radius: 50%;
            line-height: 80px;
            text-align:center;
        }

        .fas {
            z-index: 5;
        }
    </style>
</head>

<body>
    <!-- / /BEGIN BACKGROUND/ ................................................................................................. -->

    <div class="area">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>

    <!-- / /END BACKGROUND/ ................................................................................................. -->


    <main>
        <section class="container-opened">
            <article class="menu">

                <a class="link" href="#" rel="home"><span><i class="fas fa-home"></i>Home</span></a>
                <a class="link" href="#" rel="agenda"><span><i class="fas fa-book-open"></i>Agenda</span></a>
                <a class="link" href="#" rel="registratie"><span><i class="fas fa-pen"></i>Schrijf je in</span></a>
                <a class="link profiel" href="#" rel="profielen"><span><i class="fas fa-users"></i>Profielen</span></a>
                <a class="link" href="#" rel="praktisch"><span><i class="fas fa-puzzle-piece"></i>Praktisch</span></a>

            </article>
            <article class="card-background">

            </article>
            <article class="card-left">
                <h1>22.10.2019</h1>
                <h2>leuven</h2>
                <section class="logo">
                    <img src="./img/logo_kleur (1).png" alt="">
                </section>
                <section class="skills">
                    <p class="typewriter-effect"></p>
                </section>
                <footer id="main-footer">

                        <div id="delogos">
                                <img class="legos" src="/img/mobileLogo.png" alt="">
                                <img class="legos" src="/img/logo.png" alt="">
                                <img class="legos" src="/img/multimedi_logo.png" alt="">
                            </div>
        

                    <ul class="list-unstyled" id="lijst">
                        <li>&copy; 2019 <a href="#home">Webcreators</a></li>
                        <li><a href="#disclaimer">Disclaimer/Privacy</a></li>
                        <li><a href="#site-map">Site-map</a></li>
                        <li><a href="#section-three">Inschrijven</a></li>
                    </ul>
                 
                </footer>



            </article>
            <article id="home" class="card-right fadeInLeft">
                <p>Deel1 is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply
                    dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </article>
            <article id="agenda" class="card-right fadeInLeft">
                <p>LDeel2is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </article>
            <article id="registratie" class="card-right fadeInLeft">
                <p>Deel3 simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </article>
            
            <article id="profielen" class="card-right fadeInLeft">
                    <div class="container">
    <div id="modalleke" class="modalleke">
        <div class="closeModal fas fa-times">
            
        
    </div>
</div>
<?php 
require_once('inc/verbind.inc.php');
require_once('inc/getAllProfiles.php');

?>
</div>


            </article>
            <article id="praktisch" class="card-right fadeInLeft">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore distinctio natus magni atque a, suscipit, alias maxime ratione soluta nostrum?
            </article>
        </section>
    </main>



    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="js/typer.min.js"></script>
    <script src="js/script.js"></script>


</body>

</html>