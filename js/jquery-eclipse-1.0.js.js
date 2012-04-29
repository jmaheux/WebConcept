/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

//if ( /webkit.*mobile/i.test(navigator.userAgent)) {
(function($) {
    $.fn.offsetOld = $.fn.offset;
    $.fn.offset = function(obj) {
        if (obj != undefined) {
//            if (obj.left)
//                obj.left *= zoomFactor;
//            if (obj.top)
//                obj.top *= zoomFactor;
            return this.offsetOld(obj);
        } else {
            var result = this.offsetOld();
//            result.top *= zoomFactor;
//            result.left *= zoomFactor;
            return result;
        }
    };
})(jQuery);

(function($) {
    jQuery.fn.eclipseOut = function(options, duration, easing, callback) {
        options = $.extend({
            direction: 'left'
        }, options || {});
        options.duration = duration || 500;
        options.easing = easing || 'linear';
        options.callback = callback || function(){};
        return this.each(function(){
            $('body').css('overflow-x', 'hidden');
            //$(this).removeAttr('style').show();
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
                    if (options.direction == 'left') {
                        var newLeft = 0 - (width + offsetLeft);
                    } else {
                        var newLeft = screenWidth - offsetLeft;
                    }
                    //                    var height = $(this).parent().height();
                    //                    $(this).parent().css('height', height);
                    $(this).css('width', width).animate({
                        'margin-left': '+=' + newLeft
                    }, options.duration, options.easing, function(){
                        $('body').removeAttr('style');
                        $(this).hide();
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
    jQuery.fn.eclipseIn = function(options, duration, easing, callback) {
        options = $.extend({
            direction: 'left'
        }, options || {});
        options.duration = duration || 500;
        options.easing = easing || 'linear';
        options.callback = callback || function(){};
        return this.each(function(){
            $('body').css('overflow-x', 'hidden');
            $(this).hide().removeAttr('style').hide();
            switch(options.direction)
            {
                case 'left':
                case 'right':
                    $(this).show();
                    var width = $(this).width();
                    var offsetLeft = $(this).offset().left;
                    var positionLeft = $(this).position().left;
                    //                    var height = $(this).outerHeight(true);
                    $(this).hide();
                    var screenWidth = $(window).width();

                    if (options.direction == 'right') {
                        var newLeft = 0 - (width + offsetLeft);
                    } else {
                        var oldLeft = screenWidth - offsetLeft
                        var newLeft = 0 - oldLeft;
                    }
                    console.log('offsetLeft: '+offsetLeft+' screenWidth: '+screenWidth+' newLeft: '+newLeft)
                    //                    $(this).parent().css({'height': height});
                    $(this).css({
                        'width': width
                    }).offset({
                        left: oldLeft
                    }).show().animate(
                    {
//                        left: '+=' + newLeft
                        left: positionLeft
                    },
                    options.duration,
                    options.easing,
                    function(){
                        $('body').removeAttr('style');
                        $(this).removeAttr('style').show();//.parent().removeAttr('style');

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