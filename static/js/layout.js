$(function(){
	max_height();
});

function max_height()
{
	var windowHeight = $(window).height();

	$('.body-content').css('height', windowHeight);

    // Make it responsive
    $(window).resize(function()
    {
        var windowHeight = $(window).height();
        $('.body-content').css('height', windowHeight);
    });

}