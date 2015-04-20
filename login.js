$(document).ready(function()
{
	$("#login_form").submit(function() 
	{
		$("#loginMessageBox").removeClass().addClass('msgBox').text('Validating...').fadeIn(1000);
		
		$.post("login_action.php",{ loginEmail:$('#loginEmail').val(), loginPassword:$('#loginPassword').val(), rand:Math.random() },
		function(data) 
		{
			if (data == 'yes') 
			{
				$("#loginMessageBox").fadeTo(200,0.1,function() 
				{
					$(this).html('Logging in...').addClass('validMsg').fadeTo(900,1,function() 
					{
						document.location.href='account.php';
					});
				});
			}
			else if (data == 'incorrect')
			{
				$("#loginMessageBox").fadeTo(200,0.1,function()
				{
					$(this).html('Username or password is incorrect.').addClass('errorMsg').fadeTo(900,1);
				});
			}
			else 
			{
				$("#loginMessageBox").fadeTo(200,0.1,function() 
				{
					$(this).html('Please enter your username and password.').addClass('errorMsg').fadeTo(900,1);
				});
			}
		});
		return false;
	});
});