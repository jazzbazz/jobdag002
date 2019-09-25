// $(document).ready(function() {

// executes when HTML-Document is loaded and DOM is ready

// verbergt bij het laden de andere tabs, buiten de home



jQuery(document).ready(function($) {


    // $('.active').removeClass('active');

    // // Add the 'active' class to this link:

    // $(this).addClass('active');



    function pageLoad() {

        $('#home').click()

    }



    $(function() {

        $('#home').click()

    })

    // sets the home button on active when reloading the page
    if ($(this).hasClass('active')) {

        removeClass('active');


    }



    if ($(window).width() > 1199) {



        if (!$("body").hasClass('detail')) {



            $(".card-right:not(:first)").hide();



        }


        $('.link').click(function(e) {
            console.log("link clicked");
            $('#modalleke').find('*').not('.closeModal').remove();
            $('#modalleke').css("display", "none");

            // Stop the link being followed:

            e.preventDefault();

            // stops refreshing the current page
            if ($(this).hasClass('active')) {

                preventDefault();
            }


            // Get the div to be shown:

            // $('.active').removeClass('active');

            // // Add the 'active' class to this link:

            // $(this).addClass('active');

            $("body").addClass('detail');

            var content = $(this).attr('rel');

            // Remove any active classes:

            $('.active').removeClass('active');

            // Add the 'active' class to this link:

            $(this).addClass('active');





            // Hide all the content:

            $('.card-right').fadeOut('3000');

            // Show the requested content:

            $('#' + content).show(function() {

                $('#' + content).addClass("fadeInLeft");



            });

            // verbergt de linkerkaart en vergroot de rechterpagina tot 1 geheel

            if ($(this).hasClass('profiel')) {



                $(".card-left").fadeOut(500);

                $(".card-right").css("grid-column", "3 / span 4");

                $(".card-background").hide();
                

            } else {







                $(".card-left").show();

                $(".card-background").show();

                $(".card-right").css("grid-column", "5 / span 1");

            }



        });



    }



    if ($(window).width() < 1199) {

        $(".card-right").removeClass("fadeInLeft");

        $("#agenda").removeClass("scrollbar");

        $("#registratie").removeClass("scrollbar");

        $("#praktisch").removeClass("scrollbar");

        $('.link').click(function() {

            onclick = $(this).attr('onclick');

            $(this).attr('onclick', '');

            showConfirm(onclick);

            return false;

        });



    }



});



// animatie typewriter





$(".typewriter-effect").typer({

    strings: [

        "front-end-developers",

        "backend-developers",

        "webcreators"

    ]

});







jQuery(document).ready(function($) {

    console.log("helloworld");

    $('.card').on('click', function() {

        // $('#modalleke').load('profielindi.php');

        $image = $(this).find('.card-img-top').attr('src');
    $voornaam = $(this).find(".card-sub-title").text();
    $naam = $(this).find(".card-title").text();
    $omschrijving = $(this).find(".card-body").text();
    $waarom = $(this).find('input[name="waarom"]').val();
    $wat = $(this).find('input[name="wat"]').val();
    $waarde = $(this).find('input[name="waarde"]').val();
    $fob = $(this).find('input[name="fob"]').val();
    $skill1 = $(this).find('input[name="skill1"]').val();
    $skill2 = $(this).find('input[name="skill2"]').val();
    $skill3 = $(this).find('input[name="skill3"]').val();
    $pad = "<img src='"+$image+"' alt=''>";



        // $('#modalleke').append($modal);

        $('#modalleke').append($pad);

        $('#modalleke').append('<h3>' + $voornaam + '</h3>');

        $('#modalleke').append('<div>' + $omschrijving + '</div>');

        $('#modalleke').append('<div>' + $waarom + '</div>');

        $('#modalleke').css("background", "lightgrey");

        $('#modalleke').css("display", "block");



        $(this).css("border", "1px solid red");



        console.log("card was clicked");

    });



    $('.closeModal').on("click", function() {

        $('#modalleke').find('*').not('.closeModal').remove();

        // $('#modalleke').empty();

        $('#modalleke').css("display", "none");

    });

});





// ===== Scroll to Top ==== 

$(window).scroll(function() {

    if ($(this).scrollTop() >= 50) { // If page is scrolled more than 50px

        $('#return-to-top').fadeIn(200); // Fade in the arrow

    } else {

        $('#return-to-top').fadeOut(200); // Else fade out the arrow

    }

});

$('#return-to-top').click(function() { // When arrow is clicked

    $('body,html').animate({

        scrollTop: 0 // Scroll to top of body

    }, 500);

});