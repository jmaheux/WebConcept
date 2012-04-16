/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

WEBCONCEPT = {};

(function($){
    jQuery.fn.startSlide = function(alternationTime){
        var alternationTime = alternationTime || 10000;
        var slider = new WEBCONCEPT.Slider(this, alternationTime);
        slider.start();
        return this;
    }
})(jQuery);

(function(){
    WEBCONCEPT.Slider = function($arrElement, alternationTime){
        this.$arrElement = $arrElement;
        this.alternationTime = alternationTime || 10000;
    };

    WEBCONCEPT.Slider.prototype = {

        $arrElement: null,
        currentElement: 0,
        keepOnGoing: true,
        timer: null,
        alternationTime: 10000,
        arrFn: new Array(),

        start: function(){
            this.keepOnGoing = true;
            var _this = this;
            $(this.$arrElement[this.currentElement]).show();
            //this.currentElement++;
            $(window).load(function(){
                _this.timer = setTimeout(function(){
                    _this.slide()
                },_this.alternationTime);

                var maxHeight = 0;
                $(_this.$arrElement).hide();
                _this.$arrElement.each(function(){
                    var hgh = $(this).show().parent().height();
                    $(this).hide();
                    if (hgh > maxHeight)
                        maxHeight = hgh;
                });
                $(_this.$arrElement[_this.currentElement]).show()
                $(_this.$arrElement).parent().height(maxHeight);
            });
        },
        stop: function(){
            this.keepOnGoing = false;
            clearTimeout(this.timer);
        },
        slide: function(){
            clearTimeout(this.timer);
            if (this.keepOnGoing) {
                var _this = this;
                $(this.$arrElement[this.currentElement]).eclipseOut({}, 500, 'easeInExpo', function(){//easeInExpo
                    _this.currentElement++;
                    if (_this.currentElement == _this.$arrElement.length)
                        _this.currentElement = 0;
                    $(_this.$arrElement[_this.currentElement]).eclipseIn({}, 500, 'easeOutExpo', function(){//easeOutExpo
                        _this.timer = setTimeout(function(){
                            _this.slide()
                        },_this.alternationTime);
                    });
                });
            }
        }
    };
})()