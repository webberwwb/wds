
$(function(){
	$('#email-form').submit(function(evt){
		form = $(this);

		alert_success = $('.alert-success');
		alert_danger = $('.alert-danger');


		from = form.find('#email');
		subject = form.find('#subject');
		message = form.find('#message');

		if (from.val().match(/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i))
			from.parent().removeClass('has-error');
		else from.parent().addClass('has-error');

		if (subject.val())
			subject.parent().removeClass('has-error');
		else subject.parent().addClass('has-error');

		if (message.val())
			message.parent().removeClass('has-error');
		else message.parent().addClass('has-error');

		errors = form.find('.has-error');

		url = this.action;

		if (! errors.length) {
			$.ajax({
				url: "email.php",
				type: "POST",
				data: {subject: subject.val() ,message: message.val(), from: from.val()},
				success: function(response) {
					if (response.error)
						alert_danger.text(response.error).removeClass('hide');
					else alert_danger.addClass('hide');

					if (response.success)
						alert_success.text(response.success).removeClass('hide');
					else alert_success.addClass('hide');
				}
			});
		}

		return false;
	});
});
