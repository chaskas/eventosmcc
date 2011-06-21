$(document).ready(function(){
  $(".page").height($(window).height());
  $('#nav1').onePageNav({currentClass: 'current',changeHash: false,scrollSpeed: 750});
  $('#nav2').onePageNav({currentClass: 'current',changeHash: false,scrollSpeed: 750});
  $('#nav3').onePageNav({currentClass: 'current',changeHash: false,scrollSpeed: 750});
  $('#nav4').onePageNav({currentClass: 'current',changeHash: false,scrollSpeed: 750});
});