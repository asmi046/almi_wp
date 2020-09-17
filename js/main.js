//Меню из верстки
$burgerBtn = jQuery('.burger-btn');
$navPanel = jQuery('.nav-panel');
$greatShadow = jQuery('.great-shadow');
$closeMenuBtn = jQuery('.close-menu-btn');
$body = jQuery('body');


function showMenu() {
    $navPanel.addClass('active');
    $greatShadow.fadeIn(200);
    $body.addClass('fixed');
}

function hideMenu() {
    $navPanel.removeClass('active');
    $greatShadow.fadeOut(200);
    $body.removeClass('fixed');
}


$burgerBtn.bind('click', function(e){
    e.preventDefault();
    showMenu();
});

$closeMenuBtn.bind('click', hideMenu);
$greatShadow.bind('click', hideMenu);

jQuery('.fancybox').fancybox({});

//------Файл открытие и подгрузка имени
function getFileName() {
    var file = document.getElementById('myfile').value;
    file = file.replace(/\\/g, '/').split('/').pop();
    document.getElementById('file-name').innerHTML = '' + file;

    var file = document.getElementById('myfiles').value;
    file = file.replace(/\\/g, '/').split('/').pop();
    document.getElementById('file-names').innerHTML = '' + file;
}

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

	$('#add-reviews').click(function(e) {
		e.preventDefault();
		$('#popup__bodyS').arcticmodal();
	});
	$('#add-faq').click(function(e) {
		e.preventDefault();
		$('#popup__body').arcticmodal();
	});

	jQuery(".uniSendBtn").click(function(e){ 

		e.preventDefault();
		var name = $(this).siblings('input[name=name]').val();
		var tel = $(this).siblings('input[name=tel]').val();
		
		if((tel == "")||(tel.indexOf("_")>0)) {
			$(this).siblings('input[name=tel]').css("background-color","#ff91a4")
		} else {
			var  jqXHR = jQuery.post(
				allAjax.ajaxurl,
				{
					action: 'send_mail',		
					nonce: allAjax.nonce,
					name: name,
					tel: tel,
					formsubject: jQuery(this).data("formname"),
				}	
			);
					
			jqXHR.done(function (responce) {  //Всегда при удачной отправке переход для страницу благодарности
				document.location.href = 'https://almi.asmi-studio.ru/stranicza-blagodarnosti/';	
			});
					
			jqXHR.fail(function (responce) {
				alert("Произошла ошибка. Попробуйте позднее.");
			}); 

		}
	});

	//-----Отправка вопроса
	jQuery("#getQestion").click(function(e){ 

		e.preventDefault();
		var name = $(this).siblings('input[name=name]').val();
		var tel = $(this).siblings('input[name=tel]').val();
		var quest = $(this).siblings('textarea[name=question]').val();
		
		if (quest == "")
		{
			$(this).siblings('textarea[name=question]').css("background-color","#ff91a4");
			return;
		}

		if((tel == "")||(tel.indexOf("_")>0)) {
			$(this).siblings('input[name=tel]').css("background-color","#ff91a4")
		} else {
			var  jqXHR = jQuery.post(
				allAjax.ajaxurl,
				{
					action: 'get_qestion',		
					nonce: allAjax.nonce,
					name: name,
					tel: tel,
					formsubject: jQuery(this).data("formname"),
					quest:quest
				}	
			);
					
			jqXHR.done(function (responce) {  //Всегда при удачной отправке переход для страницу благодарности
				document.location.href = 'https://almi.asmi-studio.ru/stranicza-blagodarnosti/';	
			});
					
			jqXHR.fail(function (responce) {
				alert("Произошла ошибка. Попробуйте позднее.");
			}); 

		}
	});


	//-----Отправка Отзыва
	jQuery("#sendRev").click(function(e){ 

		e.preventDefault();
		var name = $(this).siblings('input[name=name]').val();
		var tel = $(this).siblings('input[name=tel]').val();
		var rev = $(this).siblings('textarea[name=reviews]').val();
		
		if (quest == "")
		{
			$(this).siblings('textarea[name=question]').css("background-color","#ff91a4");
			return;
		}

		if((tel == "")||(tel.indexOf("_")>0)) {
			$(this).siblings('input[name=tel]').css("background-color","#ff91a4")
		} else {
			var  jqXHR = jQuery.post(
				allAjax.ajaxurl,
				{
					action: 'set_rev',		
					nonce: allAjax.nonce,
					name: name,
					tel: tel,
					formsubject: "Review form",
					rev:rev,
					reiting_prod:"",
					reiting_brend:"",
					img1:"",
					img2:"",
				}	
			);
					
			jqXHR.done(function (responce) {  //Всегда при удачной отправке переход для страницу благодарности
				document.location.href = 'https://almi.asmi-studio.ru/stranicza-blagodarnosti/';	
			});
					
			jqXHR.fail(function (responce) {
				alert("Произошла ошибка. Попробуйте позднее.");
			}); 

		}
	});

	jQuery(".faq-btn").click(function(e){ 

		e.preventDefault();
		var name = $(this).siblings('input[name=name]').val();
		var tel = $(this).siblings('input[name=tel]').val();
		var question = $(this).siblings('input[textarea=question]').val();
		var mailmsg = $(this).data('mailmsg');
		if((tel == "")||(tel.indexOf("_")>0)) {
			$(this).siblings('input[name=tel]').css("background-color","#ff91a4")
		} else {
			var  jqXHR = jQuery.post(
				allAjax.ajaxurl,
				{
					action: 'send_question',		
					nonce: allAjax.nonce,
					mailmsg: mailmsg,
					name: name,
					tel: tel,
					question: question,
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
