$(document ).ready(function() {
  $('#slide7 .btn-add').click(function() {
    $('#slide7 .wrapper').append('<li>Lorem</li>');
  })
  $('#slide7 .btn-remove').click(function() {
    $('#slide7 .wrapper li:last-child').remove();
  })
  
});
