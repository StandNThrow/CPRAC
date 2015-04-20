$(document).ready(function() 
{
    $("#changePassword_form").submit(function() 
	{
		$("#changePasswordMessageBox").removeClass().addClass('msgBox').text('Validating...').fadeIn(1000);
		
		$.post("changePassword.php", { currentPassword:$('#currentPassword').val(), newPassword:$('#newPassword').val(), confirmPassword:$('#confirmPassword').val(), rand:Math.random() },
		function(data)
		{
			if (data == 'yes')
			{
				$("#changePasswordMessageBox").fadeTo(200,0.1,function() 
				{
					$(this).html('Password changed successfully.').addClass('validMsg').fadeTo(900,1);
				});
			}
			else if (data == 'incorrect')
			{
				$('#changePasswordMessageBox').fadeTo(200,0.1,function()
				{
					$(this).html('Password entered is incorrect. Please enter the correct password.').addClass('errorMsg').fadeTo(900,1);
				});
			}
			else
			{
				$("#changePasswordMessageBox").fadeTo(200,0.1,function() 
				{
					$(this).html('Unable to change password.').addClass('errorMsg').fadeTo(900,1);
				});
			}
		});
		return false;
	});
});