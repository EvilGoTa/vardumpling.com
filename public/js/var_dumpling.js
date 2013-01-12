$(document).ready(function(){
  $('#details').click(function(e){
    $('.var_dump').toggle();
    $('.var_dumpling').toggle();
  });

  $('.link').click(function(e){
    var link = $(this).text();
    link = link.match(/(?:[^\\"]+|\\.)*/g);
    window.location.href = link[2];
  });
});