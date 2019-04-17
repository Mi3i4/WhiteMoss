
//select all the a tag with name equal to modal
$('#certificate1').click(function(e) {

    e.preventDefault();
    //transition effect
    $('.shim, .certificateFull-1').fadeIn(500);

});

$('#certificate2').click(function(e) {

    e.preventDefault();
    //transition effect
   $('.shim, .certificateFull-2').fadeIn(500);

});
$('.shim .myClose').click(function (e) {

    //Cancel the link behavior
    e.preventDefault();
    $('.shim,  .certificateFull-1, .certificateFull-2').fadeOut(500);
});