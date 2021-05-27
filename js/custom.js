  AOS.init({
   once: true
})
$('.burger-menu').click( function(e) {
    $(this).toggleClass('active');
    $('.menu').slideToggle();
})
