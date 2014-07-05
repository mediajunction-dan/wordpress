// Responsive Phone/Tablet Navigation
$('.menu-trigger').sidr({
  name: 'touch',
  source: '.site-header .hs-menu-wrapper',
  side: 'right'
});
$(function(){
    var dir = 0;
    $(".menu-trigger").click(function(){
        dir = dir===0 ? 250 : 0;
        $(".site-header").stop().animate({right: dir }, 'fast');
    });
    $(".menu-trigger").click(function(){
       $(this).toggleClass('active');
    });
});