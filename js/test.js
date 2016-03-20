$(function() {

  $('.cc-num').payment('formatCardNumber');
  $('.cc-exp').payment('formatCardExpiry');
  $('.cc-cvc').payment('formatCardCVC');

  var validateDetails = function() {

    var expiry = $('.cc-exp').payment('cardExpiryVal');
    var validateExpiry = $.payment.validateCardExpiry(expiry["month"], expiry["year"]);
    var validateCVC = $.payment.validateCardCVC($('.cc-cvc').val());

    if (validateExpiry) {
      $('.cc-exp__demo').addClass('identified');
    } else {
      $('.cc-exp__demo').removeClass('identified');
    }

    if (validateCVC) {
      $('.cc-cvc__demo').addClass('identified');
    } else {
      $('.cc-cvc__demo').removeClass('identified');
    }

  }

  $('.paymentInput').bind('change paste keyup', function() {
    validateDetails();
  });

});