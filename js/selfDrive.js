$(document).ready(function()
{
	$("#selfDrive_form").submit(function()
	{
        $("#SDmessageBox").removeClass().addClass('msgBox').text('Validating...').fadeIn(1000);
		
		$.post("selfDrive.php", { SDhirename:$('#SDhirename').val(), SDvmodel:$('#SDvmodel').val(), SDquantity:$('#SDquantity').val(), SDstartdate:$('#SDstartdate').val(), SDenddate:$('#SDenddate').val(), SDpickuplocation:$('#SDpickuplocation').val(), SDpickuptime:$('#SDpickuptime').val(), rand:Math.random() },
		function(data)
		{
			if (data == 'yes')
			{
				$("#SDmessageBox").fadeTo(200,0.1,function()
				{
					$(this).html('Booking is Successful. Redirecting to Account Page.').addClass('validMsg').fadeTo(900,1,function()
					{
						document.location.href='account.php';
					});
				});
			}
			else
			{
				$("#SDmessageBox").fadeTo(200,0.1,function()
				{
					$(this).html('Booking is Unsucccessful, Please fill in empty fields.').addClass('errorMsg').fadeTo(900,1);
				});
			}
		});
		return false;
	});
});