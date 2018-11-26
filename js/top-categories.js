(function($) {

$('#top-categories a:first').addClass('active');
var tabs = $('#top-categories');
var items = $('#top-categories').find('a').length;
var selector = $("#top-categories").prepend($("<div class='selector'></div"));
var activeItem = tabs.find('.active');
var activeWidth = activeItem.innerWidth();
$(".selector").css({
  "left": activeItem.position.left + "px", 
  "width": activeWidth + "px"
});

$("#top-categories").on("click","a",function(){
  $('#top-categories a').removeClass("active");
  $(this).addClass('active');
  var activeWidth = $(this).innerWidth();
  var itemPos = $(this).position();
  $(".selector").css({
    "left":itemPos.left + "px", 
    "width": activeWidth + "px"
  });
});

})( jQuery );

