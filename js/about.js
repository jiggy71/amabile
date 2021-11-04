jQuery(function($)	{
        //scroll reset
        $.scrollTo(0);

        $('.floatButton').click(function() { $.scrollTo($('body'), 500); return false;});
    }
);

$(window).scroll(function()	{
        if($(this).scrollTop() > 100) {
            $('.floatButton').fadeIn();
        } else {
            $('.floatButton').fadeOut();
        }
    }
);
