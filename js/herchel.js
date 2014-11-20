$(document ).ready(function() {
  $('#pseudo-mq .btn-add').click(function() {
    $('#pseudo-mq .wrapper').append('<li>Lorem</li>');
  })
  $('#pseudo-mq .btn-remove').click(function() {
    $('#pseudo-mq .wrapper li:last-child').remove();
  })
  
});
