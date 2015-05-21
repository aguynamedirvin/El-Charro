jQuery.validator.addMethod('answercheck', function (value, element) {
		return this.optional(element) || /^\bcat\b$/.test(value);
	}, "type the correct answer -_-");
 
// validate contact form
$(function() {
	$('#contact-form').validate({
		rules: {
			first_name: {
				required: true,
				minlength: 2
			},
			last_name: {
				required: true,
				minlength: 2
			},
			email: {
				required: true,
				email: true
			},
			phone: {
				required: true,
				digits: true,
				minlength: 10
			},
			message: {
				required: true
			},
			answer: {
				required: true,
				answercheck: true
			}
		},
		/*messages: {
			first_name: {
				required: "come on, you have a name don't you?",
				minlength: "your name must consist of at least 2 characters"
			},
			last_name: {
				required: "you must have a last name too, don't you?",
				minlength: "your last name must consist of at least 2 characters"
			},
			email: {
				required: "no email, no message"
			},
			phone: {
				required: "no phone, no message",
				digits: "your phone number must be consist of digits",
				minlength: "your phone number must consist of at least 10 digits. Ex: 915-123-4567"

			},
			message: {
				required: "um...yea, you have to write something to send this form.",
				minlength: "thats all? really?"
			},
			answer: {
				required: "sorry, wrong answer!"
			}
		},*/
		submitHandler: function(form) {
			$(form).ajaxSubmit({
				type:"POST",
				data: $(form).serialize(),
				
				// PHP File
				url:"send_email.php",
				
				success: function() {
					$('#contact-form :input').attr('disabled', 'disabled');
					$('#contact-form').fadeTo( "slow", 0.5, function() {
						$(this).find(':input').attr('disabled', 'disabled');
						$(this).find('label').css('cursor','default');
						$('#success').fadeIn();
					});
				},
				error: function() {
					$('#contact-form').fadeTo( "slow", 0.5, function() {
						$('#error').fadeIn();
					});
				}
			});
		}
	});
});