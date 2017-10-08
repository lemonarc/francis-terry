$(function() {
  var productSelector = $('#product-selector');
  var checkoutButton = $('#checkout-button');

  $.get('/api/products', function(products) {
    productSelector.replaceWith(function() {
      return $("<select></select>")
        .attr("id", 'product-selector')
        .attr("name", 'product-selector');
    });

    $.each(products, function(i, product) {
      var option = $("<option>", {
        "value": product.id,
        "data-price": product.price,
        "data-description": product.name
      }).text(product.name + " (£" + (product.price / 100).toFixed(2) + ")");
      $('#product-selector').append(option);
    });
  });

  var handler = StripeCheckout.configure({
    key: 'pk_test_UeSvUeIabOSxYzN6b4QejXoi',
    image: '/apple-touch-icon.png',
    locale: 'auto',
    token: function(token) {
      console.log(token);
      // You can access the token ID with `token.id`.
      // Get the token ID to your server-side code for use.
    }
  });

  checkoutButton.click(function(e) {
    e.preventDefault();
    var productOption = $("option:selected", $('#product-selector'));
    // Open Checkout with further options:
    handler.open({
      name: 'Francis Terry and Associates',
      description: productOption[0].dataset.description,
      email: $('#contact-email').val(),
      currency: 'gbp',
      amount: productOption[0].dataset.price
    });
  });

  // Close Checkout on page navigation:
  window.addEventListener('popstate', function() {
    handler.close();
  });
});
