$(document).ready(function(){
  $(".page").height($(window).height());
  $('#nav').onePageNav({currentClass: 'current',changeHash: false,scrollSpeed: 750});
});