$(document).ready(function() {
// Format email input
$('#email').on('input', function() {
  var input = $(this).val();
  var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (regex.test(input)) {
    $(this).removeClass('error');
  } else {
    $(this).addClass('error');
  }
});

// Format phone number input
$('#phone').on('input', function() {
  var input = $(this).val();
  var regex = /^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/;
  var formatted = input.replace(regex, "($1) $2-$3");
  $(this).val(formatted);
});

// Format zip code input
$('#zip').on('input', function() {
  var input = $(this).val();
  var regex = /^(\d{5})(?:[-\s]*(\d{4}))?$/;
  var formatted = input.replace(regex, "$1-$2");
  $(this).val(formatted);
});

// Format date input
$('#date').on('input', function() {
  var input = $(this).val();
  var regex = /^(\d{2})\/(\d{2})\/(\d{4})$/;
  var formatted = input.replace(regex, "$2/$1/$3");
  $(this).val(formatted);
});

});