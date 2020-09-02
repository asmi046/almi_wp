
jQuery(document).ready(function() {
	var inputmask_96e76a5f = {"mask":"+7(999)999-99-99"};
	jQuery(".mascedtel").inputmask(inputmask_96e76a5f);
	
	// верификация телефона
	//if ((jQuery("#formZayavka #zphone").val() == "")||(jQuery("#phone").val().indexOf("_")>0)){
	//		jQuery("#formZayavka #zphone").css("background-color","#f9d6c5");
	//		return;
	//	}
	
	//Меню мобильная версия
	jQuery(".menuBtn").click(function(){ 
		jQuery("#mainMenuHead ul").toggle("slow", function(){});
	});
	
	// сообщение а арктик модал
	//jQuery('#messgeModal #lineIcon').html('<i style = "color:green;" class="fa fa-check-circle"></i>');
	//jQuery('#messgeModal #lineMsg').html("Ваша заявка принята. Мы свяжемся с Вами в ближайшее время.");
	//jQuery('#messgeModal').arcticmodal();
	
	
	jQuery("#clsubmit").click(function(){ 
			
			if (jQuery("#cltel").val() == "") {
				jQuery('#messgeModal .mvmessagr').html("<i style = 'color:red; font-size:2em' class='fas fa-phone-square'></i> <br/>Поле телефон обязательно для заполнения");
				jQuery('#messgeModal').arcticmodal();
			} else {
			
				var  jqXHR = jQuery.post(
					allAjax.ajaxurl,
					{
						action: 'send_mail',		
						nonce: allAjax.nonce,
						formsubject: jQuery("#formsubject").val(),
						clname: jQuery("#clname").val(),
						cltel: jQuery("#cltel").val(),
						cltime: jQuery("#cltime").val(),
					}
					
				);
				
				
				jqXHR.done(function (responce) {
					jQuery('#messgeModal #lineMsg').html(responce);
					jQuery('#messgeModal').arcticmodal();
					console.log(responce);
				});
				
				jqXHR.fail(function (responce) {
					jQuery('#messgeModal #lineMsg').html("Произошла ошибка. Попробуйте позднее.");
					jQuery('#messgeModal').arcticmodal();
				});
			}
	});
});
