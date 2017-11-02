$(function() {
  $.get(api_url + '/Orders/details.php', function(details) {
    var markup = $("<p><strong>Booking reference:</strong> " + details.order_number + "</p>\n" +
      "       <p><strong>Type of Taster Day:</strong> " + details.product + "</p>\n" +
      "       <p><strong>Booking Total:</strong> £" + (details.amount/100).toFixed(2) + "</p>");

    $('#booking-details').append(markup);
  }).fail(function() {
    var markup = $("<p>Could not get booking details, please <a href='/contact'>contact us</a> for information.</p>");
    $('#booking-details')
      .addClass('has-error')
      .append(markup);
  });
});
