$(document).ready(function()
{
	$("#register_form").submit(function()
	{
		$("#registerMessageBox").removeClass().addClass('msgBox').text('Validating...').fadeIn(1000);
		
		$.post("register_action.php",{ registerName:$('#registerName').val(), registerUsername:$('#registerUsername').val(), registerPassword:$('#registerPassword').val(), registerConfirmPassword:$('#registerConfirmPassword').val(), registerEmail:$('#registerEmail').val(), registerPhonenum:$('#registerPhonenum').val(), rand:Math.random() },
		function(data) 
		{
			if (data == 'yes') 
			{
				$("#registerMessageBox").fadeTo(200,0.1,function() 
				{
					$(this).html('Registration is successful.').addClass('validMsg').fadeTo(900,1,function()
					{
						document.location.href='index.php';
					});
				});
			}
			else
			{
				$("#registerMessageBox").fadeTo(200,0.1,function() 
				{
					$(this).html('Registration is unsuccessful. Please try again.').addClass('errorMsg').fadeTo(900,1);
				});
			}
		});
		return false;
	});
});