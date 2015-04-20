$(document).ready(function()
{
	$("#registerUsername").blur(function() 
	{
		$("#registerMessageBox").removeClass().addClass('msgBox').text('Validating...').fadeIn(1000);
		
		$.post("registerValidation.php",{ registerUsername:$('#registerUsername').val(), rand:Math.random() },
		function(data) 
		{
			if (data == 'no') 
			{
				$("#registerMessageBox").fadeTo(200,0.1,function() 
				{
					$(this).html('Username already in use.').addClass("errorMsg").fadeTo(900,1);
				});		
			}
			else if (data == 'empty') 
			{
				$("#registerMessageBox").fadeTo(200,0.1,function() 
				{
					$(this).html('Please fill in a username.').addClass("errorMsg").fadeTo(900,1);
				});
			}
			else
			{
				$("#registerMessageBox").fadeTo(200,0.1,function() 
				{
					$(this).html('Username available.').addClass("validMsg").fadeTo(900,1);
				});
			}
		});
		return false;
	});
	
	$("#registerEmail").blur(function() 
	{	
		$.post("registerValidation.php", { registerEmail:$('#registerEmail').val(), rand:Math.random() },
		function(data) 
		{
			if (data == 'no') 
			{
				$("#registerMessageBox").fadeTo(200,0.1,function() 
				{
					$(this).html('Email address already in use.').addClass('errorMsg').fadeTo(900,1);
				});
			}
			else if (data == 'empty') 
			{
				$("#registerMessageBox").fadeTo(200,0.1,function() 
				{
					$(this).html('Please fill in an email address.').addClass("errorMsg").fadeTo(900,1);
				});
			}
			else
			{
				$("#registerMessageBox").fadeTo(200,0.1,function() 
				{
					$(this).html('Email address available.').addClass('validMsg').fadeTo(900,1);
				});
			}
		});
		return false;
	});
});