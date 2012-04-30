(function($) {
    jQuery.fn.eclipseOut = function(options, duration, easing, callback) {
        options = $.extend({
            direction: 'left'
        }, options || {});
        options.duration = duration || 500;
        options.easing = easing || 'linear';
        options.callback = callback || function(){};
        return this.each(function(){
            $('body').css('overflow', 'hidden');
            switch(options.direction)
            {
                case 'left':
                case 'right':
                    var width = $(this).width();
                    var offsetLeft = $(this).offset().left;
                    if ($.browser.msie)
                    {
                        var offsetLeft = $(this).position().left;
                    }
                    var screenWidth = $(window).width();
                    if (options.direction == 'left')
                    {
                        var newLeft = 0 - (width + offsetLeft);
                    }
                    else
                    {
                        var newLeft = screenWidth - offsetLeft;
                    }
                    $(this).width(width).css({
                        'position': 'absolute', 
                        left: offsetLeft
                    });
                    $(this).animate({
                        left: '+=' + newLeft
                        }, options.duration, options.easing, function(){
                        $(this).hide().removeAttr('style').hide();
                        $('body').removeAttr('style');
                        options.callback();
                    });
                    break;
                case 'top':
                case 'bottom':
                    var height = $(this).height();
                    var offsetTop = $(this).offset().top;
                    if ($.browser.msie)
                    {
                        var offsetTop = $(this).position().top;
                    }
                    var screenHeight = $(window).height();
                    if (options.direction == 'top')
                    {
                        var newTop = 0 - (height + offsetTop);
                    }
                    else
                    {
                        var newTop = screenHeight - offsetTop;
                    }
                    $(this).animate({
                        top: '+=' + newTop
                        }, options.duration, options.easing, options.callback);
                    break;
            }
        });
    };
})(jQuery);
(function($) {
    jQuery.fn.eclipseIn = function(options, duration, easing, callback) {
        options = $.extend({
            direction: 'left'
        }, options || {});
        options.duration = duration || 500;
        options.easing = easing || 'linear';
        options.callback = callback || function(){};
        return this.each(function(){
            $('body').css('overflow', 'hidden');
            switch(options.direction)
            {
                case 'left':
                case 'right':
                    $(this).show();
                    var width = $(this).width();
                    var offsetLeft = $(this).offset().left;
                    var offsetTop = $(this).offset().top;
                    if ($.browser.msie)
                    {
                        var offsetLeft = $(this).position().left;
                    }
                    $(this).hide();
                    var screenWidth = $(window).width();

                    if (options.direction == 'right')
                    {
                        var newLeft = 0 - (width + offsetLeft);
                    }
                    else
                    {
                        var newLeft = screenWidth - offsetLeft;
                    }
                    $(this).width(width).css({
                        'position': 'absolute', 
                        'white-space': 'nowrap'
                    }).offset({
                        left: screenWidth, 
                        top: offsetTop
                    }).show(); // .margin({top: marginTop})
                    $(this).animate({
                        left: '-=' + newLeft
                        } , options.duration, options.easing, function(){
                        $(this).removeAttr('style').show(); // .removeAttr('style')
                        $('body').removeAttr('style');
                    });
                    break;
                case 'top':
                case 'bottom':
                    var height = $(this).height();
                    var offsetTop = $(this).offset().top;
                    if ($.browser.msie)
                    {
                        var offsetTop = $(this).position().top;
                    }
                    var screenHeight = $(window).height();
                    if (options.direction == 'bottom')
                    {
                        var newTop = 0 - (height + offsetTop);
                    }
                    else
                    {
                        var newTop = screenHeight - offsetTop;
                    }
                    $(this).animate({
                        top: '+=' + newTop
                        }, options.duration, options.easing, options.callback);
                    break;
            }
        });
    };
})(jQuery);

