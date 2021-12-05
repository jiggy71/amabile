$(window).scroll(function()	{
        if($(this).scrollTop() > 100) {
            $('.floatButton').fadeIn();
        } else {
            $('.floatButton').fadeOut();
        }
    }
);