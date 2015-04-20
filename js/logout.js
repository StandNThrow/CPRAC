$(document).ready(function()
{
	$('#logout').submit(function()
	{
		$("logoutMessageBox").removeClass().addClass('msgBox').text("Logging Out...").fadeIn(1000);
		
		$.post("logout.php"), { rand:Math.random() },
		function(data)
		{
			if (data == 'yes')
			{
				$("logoutMessageBox").fadeTo(200,0.1,function() 
				{
					$(this).html("Successfully Logout, redirecting...").addClass('msgBox').fadeTo(900,1,function()
					{
						document.location.href = "index.php";
					});
				});
			}
		}
	});
});