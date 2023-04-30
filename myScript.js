$(document).ready(function() {
  // check valid input
  $('#submit').click(function() {
    var name = $('#name').val().trim();
    var password = $('#password').val().trim();
    var repeat_password = $('#repeat_password').val().trim();
    var firstname = $('#firstname').val().trim().trim();
    var lastname = $('#lastname').val().trim();
    var address = $('#address').val().trim();
    var city = $('#city').val().trim();
    var state = $('#state').val().trim();
    var email = $('#email').val().trim();
    var phone = $('#phone').val().trim();
    var gender = $('#gender').val().trim();
    var maritalStatus = $('#marriage').val().trim();
    var zip = $('#zip').val().trim();
    var dateOfBirth = $('#date').val().trim();
    var valid = true;
    if (name == '' && name.length < 6 || name.length > 50) {
      $('#name').addClass('error');
      valid = false;
    }
    if (password == '' && name.length < 8 || name.length > 50 || password !== repeat_password) {
      //check password for capital letter, number, and special character
      var regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^\da-zA-Z]).{8,50}$/;
      if (regex.test(password)) {
        $('#password').removeClass('error');
      } else {
        $('#password').addClass('error');
        valid = false;
      }
    }
    if (repeat_password !== password && name.length < 8 || name.length > 50) {
      $('#repeat_password').addClass('error');
      valid = false;
    }
    if (firstname == '' && firstname.length > 50) {
      $('#firstname').addClass('error');
      valid = false;
    }
    if (lastname == '' && lastname.length > 50) {
      $('#lastname').addClass('error');
      valid = false;
    }
    if (address == '' && address.length > 100) {
      $('#address').addClass('error');
      valid = false;
    }
    if (city == '' && city.length > 50) {
      $('#city').addClass('error');
      valid = false;
    }
    if (state == '' && state.length > 2) {
      $('#state').addClass('error');
      valid = false;
    }
    if (email == '') {
      $('#email').addClass('error');
      valid = false;
    }
    if (phone == '' && phone.length < 10 || phone.length > 14) {
      $('#phone').addClass('error');
      valid = false;
    }
    if (gender == '' && gender.length > 50) {
      $('#gender').addClass('error');
      valid = false;
    }
    if (maritalStatus == '' && maritalStatus.length > 50) {
      $('#marriage').addClass('error');
      valid = false;
    }
    if (zip == '' && zip.length < 5 || zip.length > 10) {
      $('#zip').addClass('error');
      valid = false;
    }
    if (dateOfBirth == '') {
      //check date of birth for mm/dd/yyyy format
      var regex = /^(\d{2})\/(\d{2})\/(\d{4})$/;
      if (regex.test(dateOfBirth)) {
        $('#date').removeClass('error');
      } else {
      $('#date').addClass('error');
      valid = false;
    }
  }
  });

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

});