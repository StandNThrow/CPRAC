$(document).ready(function()
{
	$("#resetPassword_form").submit(function() 
	{
		$("#resetPasswordMessageBox").removeClass().addClass('msgBox').text('Validating...').fadeIn(1000);
		
		$.post("resetPassword.php",{ resetPasswordEmail:$('#resetPasswordEmail').val(), rand:Math.random() },
		function(data) 
		{
			if (data == 'yes') 
			{
				$("#resetPasswordMessageBox").fadeTo(200,0.1,function() 
				{
					$(this).html('Your account information have been successfully sent.').addClass('validMsg').fadeTo(900,1);
				});
			}
			else
			{
				$("#resetPasswordMessageBox").fadeTo(200,0.1,function() 
				{
					$(this).html('Unsuccessful. Please check if you have entered the correct email.').addClass('errorMsg').fadeTo(900,1);
				});
			}
		});
		return false;
	});
});