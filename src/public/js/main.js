$(document).ready(function() {

$('.top-hamburger').click(function(){
	$(this).toggleClass('close-hamburger');
	$('.writers-account-info').toggleClass('writers-open-mobile-menu');
	$('.writers-sidebar-menu').toggleClass('writers-open-mobile-menu');
	$('.writers-sidebar').toggleClass('toggle-height-mobile');
	$('body').toggleClass('toggle-overflow-mobile');
});
$('.writers-order-messages-column .writers-order-close').click(function(){
	$('.writers-order-messages-column .writers-order-close').addClass('display-none');
	$('.writers-order-messages-column .writers-order-show').removeClass('display-none');
	$('.writers-order-send-message').addClass('display-none');
});
$('.writers-order-messages-column .writers-order-show').click(function(){
	$('.writers-order-messages-column .writers-order-show').addClass('display-none');
	$('.writers-order-messages-column .writers-order-close').removeClass('display-none');
	$('.writers-order-send-message').removeClass('display-none');
});
$('.writers-order-files-column .writers-order-close').click(function(){
	$('.writers-order-files-column .writers-order-close').addClass('display-none');
	$('.writers-order-files-column .writers-order-show').removeClass('display-none');
	$('.writers-for-upload-file').addClass('display-none');
});
$('.writers-order-files-column .writers-order-show').click(function(){
	$('.writers-order-files-column .writers-order-show').addClass('display-none');
	$('.writers-order-files-column .writers-order-close').removeClass('display-none');
	$('.writers-for-upload-file').removeClass('display-none');
});
$('.top-bell').click(function(){
	$('body').toggleClass('toggle-overflow-mobile');
	$('.writers-notifications').toggleClass('display-none');
});
$('.writers-close-notifications').click(function(){
	$('.writers-notifications').addClass('display-none');
	$('body').removeClass('toggle-overflow-mobile');
});
$('.mail-us-left-subject select').change(function(){
	if ($('.other-mail-option').is(':selected')) {
		$('.mail-us-right-subject').addClass('display-block');
		$('.mail-us-right-subject').removeClass('display-none');
	} else {
		$('.mail-us-right-subject').addClass('display-none');
		$('.mail-us-right-subject').removeClass('display-block');
	}
});
$('#popup-lets-go .verification-popup-wrapper').click(function(){
	$(this).parent().addClass('display-none');
});
$('#verification-start-test-button').click(function(){
	$('#popup-lets-go').toggleClass('display-none');
});
$('#verification-lets-do-button').click(function(){
	$('#popup-lets-go').toggleClass('display-none');
	$('#popup-english-test').toggleClass('display-none');
});

$('#payment-method-select').change(function(){
	if ($('.payoneer-bank-transfers-option').is(':selected')) {
		$('#payment-payoneer-bank-transfers-content').removeClass('display-none');
		$('#payment-payoneer-account-content').addClass('display-none');
		$('#payment-paypal-account-content').addClass('display-none');
	} else if ($('.payoneer-account-option').is(':selected')) {
		$('#payment-payoneer-account-content').removeClass('display-none');
		$('#payment-paypal-account-content').addClass('display-none');
		$('#payment-payoneer-bank-transfers-content').addClass('display-none');
	} else {
		$('#payment-paypal-account-content').removeClass('display-none');
		$('#payment-payoneer-bank-transfers-content').addClass('display-none');
		$('#payment-payoneer-account-content').addClass('display-none');
	}
});

$('.copy-referral-link-img').click(function(e){
	e.preventDefault();
	var $temp = $("<input>");
	$("body").append($temp);
	$temp.val($('.referral-share-link').text()).select();
	document.execCommand("copy");
	$temp.remove();
	$('.referral-link-popup').addClass('active-referral-popup');
	$('.referral-link-popup').delay().fadeIn(10);
	$('.referral-link-popup').delay(1000).fadeOut(500);
	$('.referral-link-popup').delay(1000).removeClass('active-referral-popup');
});

$('#verification-send-code-button').click(function(){
	$('.verification-sms-input-buttons').toggleClass('display-none');
	$(this).addClass('display-none');
});

$('#verification-essay-bottom-checkbox').change(function(){
	$('.verification-diploma-not-english').toggleClass('display-none');
});

$('.writers-available-orders-table .writers-mail-us-send').click(function(){
	var textareaCheck = $('.writers-available-orders-table textarea').val();
	if (textareaCheck=='') {
		$('.writers-available-orders-table textarea').addClass('empty-error');
		$('.writers-available-orders-table .fields-empty-error').removeClass('display-none');
	} else {
		$('.writers-available-orders-table textarea').removeClass('empty-error');
	}
	if (!$('.mail-us-right-subject').hasClass('display-none')) {
		var inputCheck = $('.mail-us-right-subject input').val();
		if (inputCheck == '') {
			$('.mail-us-right-subject input').addClass('empty-error');
			$('.writers-available-orders-table .fields-empty-error').removeClass('display-none');
		} else {
			$('.mail-us-right-subject input').removeClass('empty-error');
		}
	}
	if (textareaCheck !== '' && inputCheck !== '' && inputCheck !== null) {
		$('.writers-available-orders-table .fields-empty-error').addClass('display-none');
	}
});

});