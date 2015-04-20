$(document).ready(function()
{
	$("#changeEmail_form").submit(function() 
	{
		$("#messageBox").removeClass().addClass('msgBox').text('Validating...').fadeIn(1000);
		
		$.post("changeEmail.php",{ currentEmail:$('#currentEmail').val(), newEmail:$('#newEmail').val(), confirmEmail:$('#confirmEmail').val(), rand:Math.random() },
		function(data) 
		{
			if (data == 'yes') 
			{
				$("#messageBox").fadeTo(200,0.1,function() 
				{
					$(this).html('Email changed successfully. You will be logged out automatically.').addClass('validMsg').fadeTo(900,1,function() 
					{
						document.location.href='logout.php';
					});
				});
			}
			else
			{
				$("#messageBox").fadeTo(200,0.1,function() 
				{
					$(this).html('Please make sure that you have entered a valid email address.').addClass('errorMsg').fadeTo(900,1);
				});
			}
		});
		return false;
	});
});