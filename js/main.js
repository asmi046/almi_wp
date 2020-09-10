// Функция верификации e-mail
function isEmail(email) {
	var regex = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	return regex.test(email);
}

/*Test*/ 

jQuery(document).ready(function($) {
	
	// Сразу маскируем все поля телефонов
	var inputmask_phone = {"mask": "+7(999)999-99-99"};
	jQuery("input[type=tel]").inputmask(inputmask_phone);

	// Типовой скрипт для отправки сообщений на почту

	$('.popup-content').click(function(e) {
		e.preventDefault();
		var mailmsg = $(this).data('mailmsg');
		$('#order-modal .uniSendBtn').attr('data-mailmsg', mailmsg);
		$('#order-modal').arcticmodal();
	});

	jQuery(".uniSendBtn").click(function(e){ 

		e.preventDefault();
		var name = $(this).siblings('input[name=name]').val();
		var tel = $(this).siblings('input[name=tel]').val();
		var mailmsg = $(this).data('mailmsg');
		if((tel == "")||(tel.indexOf("_")>0)) {
			$(this).siblings('input[name=tel]').css("background-color","#ff91a4")
		} else {
			var  jqXHR = jQuery.post(
				allAjax.ajaxurl,
				{
					action: 'send_mail',		
					nonce: allAjax.nonce,
					mailmsg: mailmsg,
					name: name,
					tel: tel,
					formsubject: jQuery("#formsubject").val(),
				}	
			);
					
			jqXHR.done(function (responce) {  //Всегда при удачной отправке переход для страницу благодарности
				document.location.href = 'https://almi.asmi-studio.ru/stranicza-blagodarnosti/';	
			});
					
			jqXHR.fail(function (responce) {
				jQuery('#messgeModal #lineMsg').html("Произошла ошибка. Попробуйте позднее.");
				jQuery('#messgeModal').arcticmodal();
			}); 

		}
	});
});
