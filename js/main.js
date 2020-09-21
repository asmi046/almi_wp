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


// Функция верификации e-mail
function isEmail(email) {
	var regex = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	return regex.test(email);
}

/*Test*/ 

jQuery(document).ready(function($) {

	//----- Загрузка файла на сервер

	jQuery('input[type=file]').change(function(){
	    var file_data = jQuery(this).prop('files')[0];
	    var form_data = new FormData();
		var file_span = $(this).parent().parent().find('.file_name');
		var file_name = $(this).parent().parent().find('.popup__upload');
	    form_data.append('file', file_data);
	    form_data.append('action', "main_load_file");
	    form_data.append('nonce', allAjax.nonce);

		jQuery(".lds-ellipsis").css("visibility","visible");
	    var  jqXHR = jQuery.ajax({      
	        url: allAjax.ajaxurl,
	        dataType: 'text',
	        cache: false,
	        contentType: false,
	        processData: false,
	        data: form_data, 
	        type: 'post'    
	    });

	    jqXHR.done(function (responce) {
			file_span.val(responce);
			file_name.html(responce.split("/").pop());

	        jQuery(".lds-ellipsis").css("visibility","hidden");
	    });
	            
	    jqXHR.fail(function (responce) {
	    
	        if (responce.responseText == "0")
			file_name.html("<span style = 'color:red;'>Error!</span>");
	        else
			file_name.html(responce.responseText);
	    });
	});
	
	// Сразу маскируем все поля телефонов
	var inputmask_phone = {"mask": "+9(999)999-99-99"};
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
		var name = $("#popup__bodyS").find('input[name=name]').val();
		var tel = $("#popup__bodyS").find('input[name=tel]').val();
		var rev = $("#popup__bodyS").find('textarea[name=reviews]').val();
		var product = $("#popup__bodyS").find('input[name=product]').val();
		var ratingP = $("#popup__bodyS").find('input[name=ratingP]:checked').val();
		var ratingQ = $("#popup__bodyS").find('input[name=ratingQ]:checked').val();

		var file1 = $("#popup__bodyS").find('#file1').val();
		var file2 = $("#popup__bodyS").find('#file2').val();

		if (name == "")
		{
			$("#popup__bodyS").find('input[name=name]').css("background-color","#ff91a4");
			return;
		}

		if (rev == "")
		{
			$("#popup__bodyS").find('textarea[name=reviews]').css("background-color","#ff91a4");
			return;
		}

		if((tel == "")||(tel.indexOf("_")>0)) {
			$("#popup__bodyS").find('input[name=tel]').css("background-color","#ff91a4")
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
					reiting_prod:ratingP,
					reiting_brend:ratingQ,
					img1:file1,
					img2:file2,
					product:product
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
