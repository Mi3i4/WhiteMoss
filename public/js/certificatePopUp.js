
//select all the a tag with name equal to modal
$('#certificate1').click(function(e) {

    e.preventDefault();
    //transition effect
    $('#certificatePhoto, .shim').fadeIn(500);
    $('#myCarousel').fadeOut(500);
    $('.certificateFull-slider-1, .certificate1').addClass( "active" );

});

$('#certificate2').click(function(e) {

    e.preventDefault();
    //transition effect
    $('#certificatePhoto, .shim').fadeIn(500);
    $('#myCarousel').fadeOut(500);
    $('.certificateFull-slider-2, .certificate2').addClass( "active" );

});
$('.shim .myClose').click(function (e) {

    //Cancel the link behavior
    e.preventDefault();

    $('#certificatePhoto, .shim').fadeOut(500);
    $('#myCarousel').fadeIn(500);
    $('.certificateFull-slider-1, .certificate1, .certificateFull-slider-2, .certificate2').removeClass( "active" );
});