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

    checkoutButton.removeAttr('disabled');
  }).fail(function() {
    $('#product-selector').text("Could not load products");
    $('#contact-form').addClass("has-error");
  });

  var handler = StripeCheckout.configure({
    key: 'pk_test_UeSvUeIabOSxYzN6b4QejXoi',
    image: '/apple-touch-icon.png',
    locale: 'auto',
    token: completeOrder
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

  function completeOrder(token) {
    $.post('/api/orders', {
      stripeToken: token.id,
      email: token.email,
      sku: $("option:selected", $('#product-selector')).val()
    }, redirectThanks)
      .fail(function() {
        window.location = '/taster-day-fail';
      });
  }

  function redirectThanks() {
    window.location = '/taster-day-thanks';
  }
});
