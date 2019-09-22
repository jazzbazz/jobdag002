

// $(document).ready(function() {
    // executes when HTML-Document is loaded and DOM is ready
    $(".card-right:not(:first)").hide();
//    });// verbergt bij het laden de andere tabs, buiten de home


$('.link').click(function (e) {
    // Stop the link being followed:
    e.preventDefault();
    // Get the div to be shown:
    var content = $(this).attr('rel');
    // Remove any active classes:
    if ($(this).hasClass('active')) {
        addClass('active');
    } else {
        $(this).addClass('active');
    }
    // verbergt de linkerkaart en vergroot de rechterpagina tot 1 geheel
    if ($(this).hasClass('profiel')) {

        $(".card-left").fadeOut(500);
        $(".card-right").css("grid-column", "3 / span 4");
        $(".card-background").hide();
    } else {



        $(".card-left").fadeIn(1000);
        $(".card-background").show();
        $(".card-right").css("grid-column", "5 / span 1");
    }

    /*slide left to right rightcard 
    $(".card-right").fadeOut(500).css("grid-column", "1 / span 1", "grid-row","1/span");
        $(".card-right").css("grid-column", "5   / span 4");*/


    $('.active').removeClass('active');
    // Add the 'active' class to this link:
    $(this).addClass('active');
    // Hide all the content:
    $('.card-right').fadeOut('3000');
    // Show the requested content:
    $('#' + content).show(function() {
        $('#' + content).addClass("fadeInLeft");
        
      });
});


// animatie typewriter


$(".typewriter-effect").typer({
    strings: [
        "front-end-developers",
        "backend-developers",
        "webcreators"
    ]
});

// ADDED BY WIM 22 09 2019 !!!!

jQuery(document).ready(function($) {
        console.log("helloworld");  
   $('.card').on('click', function(){
    // $('#modalleke').load('profielindi.php');
    $image = $(this).find('.card-img-top').attr('src');
    $voornaam = $(this).find(".card-title").text();
    $omschrijving = $(this).find(".card-body").text();
    $waarom = $(this).find('input[name="waarom"]').val();
    $wat = $(this).find('input[name="wat"]').val();
    $waarde = $(this).find('input[name="waarde"]').val();
    $feb = $(this).find('input[name="feb"]').val();
    $skill1 = $(this).find('input[name="skill1"]').val();
    $skill2 = $(this).find('input[name="skill2"]').val();
    $skill3 = $(this).find('input[name="skill3"]').val();
    $pad = "<img src='"+$image+"' alt=''>";
    
    // $('#modalleke').append($modal);
    $('#modalleke').append($pad);
    $('#modalleke').append('<h3>'+ $voornaam + '</h3>');
    $('#modalleke').append('<div>'+ $omschrijving + '</div>');
    $('#modalleke').append('<div>'+ $waarom + '</div>');
    $('#modalleke').css("background","lightgrey");
    $('#modalleke').css("display","block");
        
    $(this).css("background","red");
    
    console.log("card was clicked");
});

   $('.closeModal').on("click", function(){
    $('#modalleke').find('*').not('.closeModal').remove();
    // $('#modalleke').empty();
    $('#modalleke').css("display","none");
   });
});