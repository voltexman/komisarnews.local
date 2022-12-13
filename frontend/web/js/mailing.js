$(document).ready(function() {
	$('#contact-form').submit(function(){
		var
			form = $(this);
			type = form.attr('method');
			url = form.attr('action');
			data = form.serialize();
			errorMsg = 'Ошибка'
		$.ajax({
			type: type,
			url: url,
			data: data,
			success: function(response){
				console.log(response);
				if (!$("mailing-send-inform")) {
					form.append('<div class="mailing-send-inform">' + response + '</div>');
				}
			},
			error: function(){
				console.log(errorMsg);
			}
		});
		return false;
	})
});
