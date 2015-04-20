$(document).ready(function()
{
	$("#chauffeurDrive_form").submit(function()
	{
        $("#CDmessageBox").removeClass().addClass('msgBox').text('Validating...').fadeIn(1000);
		
		$.post("chauffeurDrive.php", { CDcarmodel:$('#CDcarmodel').val(), CDquantity:$('#CDquantity').val(), CDpickuplocation:$('#CDpickuplocation').val(), CDdropofflocation:$('#CDdropofflocation').val(), CDpickupdate:$('#CDpickupdate').val(), CDpickuptime:$('#CDpickuptime').val(), rand:Math.random() },
		function(data)
		{
			if (data == 'yes')
			{
				$("#CDmessageBox").fadeTo(200,0.1,function()
				{
					$(this).html('Booking is Successful. Redirecting to Account Page.').addClass('validMsg').fadeTo(900,1,function()
					{
						document.location.href='account.php';
					});
				});
			}
			else
			{
				$("#CDmessageBox").fadeTo(200,0.1,function()
				{
					$(this).html('Booking is Unsucccessful, Please fill in empty fields.').addClass('errorMsg').fadeTo(900,1);
				});
			}
		});
		return false;
    });
		
});