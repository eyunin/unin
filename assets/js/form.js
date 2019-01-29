$(document).ready(function () {
	$("form").submit(function () {
		var formID = $(this).attr('id');
		var formNm = $('#' + formID);
		var message = $(formNm).find(".form-message");
		var formTitle = $(formNm).find(".form-title");
		$.ajax({
			type: "POST",
			url: '../form.php',
			data: formNm.serialize(),
			success: function (data) {
				// Вывод сообщения об успешной отправке
				message.html(data);
				setTimeout(function(){
					message.html('');
					$('input').not(':input[type=submit], :input[type=hidden]').val('');
				}, 3000);
			},
			error: function (jqXHR, text, error) {
				// Вывод сообщения об ошибке отправки
				message.html(error);
				setTimeout(function(){
					message.html('');
					$('input').not(':input[type=submit], :input[type=hidden]').val('');
				}, 3000);
			}
		});
		return false;
	});
});