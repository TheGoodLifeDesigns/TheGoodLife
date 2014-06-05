$(function(){
	clickLoginBtn();
	loginForm();
	testa();
});

function clickLoginBtn () 
{
    // Get the logo postion so we
    // can retrn it to normal later

    var logoMarginTop = $('#logo').css("margin-top");
        logoMarginBottom = $('#logo').css("margin-bottom");


	$('#loginBtn').click(function(e){

		e.preventDefault();

		console.log('clicked login button');

		$('#logo').animate({
			marginBottom: "33%",
			marginTop : "-350px"
		},1000);
		$('#logo').animate({
			marginBottom: "-6%",
			marginTop : "-280px"
		},400);

		$('#subLogo').animate({
			opacity: "0"
		},1000);

		$('#loginForm').fadeIn("slow");
	});

    // clicking the go back button after the login
    // is shown
    $('#backLogin').click(function(e){
        e.preventDefault()

        console.log(logoMarginTop);

        $('#logo').animate({
            marginBottom: logoMarginBottom,
            marginTop : logoMarginTop
        },400);

        $('#loginForm').fadeOut();

        $('#subLogo').animate({
            opacity: "1"
        },1000);
    });
}

function loginForm ()
{
	// Hide the error for styling
	$('.error').css('display','none');

	/* hide it when the user is going to fill the form out agin*/
    $('input').focus(function()
	{
		$('.error').css('display','none');
	});

	$('#loginSubmit').click(function(e)
	{
		e.preventDefault();

		remember = $('.login-remember').is(':checked'); 

		if(remember != true)
		{
			remember_input = '';
		}
		else
		{
			remember_input = 'checked';
		}

		var formData = new FormData;
		formData.append('username', $('.login-username').val());
		formData.append('password', $('.login-password').val());
		formData.append('remember', remember_input);

		$.ajax({
			url:'login',
			method: 'post',
			processData:false,
			contentType: false,
			cache: false,
			dataType: 'json',
			data: formData,
			success:function(data){

				if(!data.success)
				{
					$.each(data.errors,function(index, error){
						$('.error').fadeIn('slow').text(error);
					});
				}
				else
				{
					alert('logged in');
                    $(window).reload();
				}
			},
			error:function(){}

		});
	});
}

function testa (){

	$('.contact-submit-btn').click(function(){
		$('.letter-block').animate({
			marginTop: '25%',
			marginBottom: '-39.5%'
		});
	});
}