$(function() {
  var bookingForm = $('#booking-form');

  bookingForm.submit(function() {
    var emptyFields = $("input.required").filter(function() {
      return $.trim(this.value).length === 0;
    });

    if (emptyFields.length !== 0) {
      emptyFields.addClass('required-error');
      emptyFields.focus(function() {
        $(this).removeClass('required-error');
      });
      return false;
    }
	// Consent checkbox
    if ($('#consent #agree').is(':checked') === false) {
      alert('Please indicate that you have read and agree to the Privacy Policy');
      return false;
    }
  });
});
