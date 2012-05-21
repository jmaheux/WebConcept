(function($){
    $.fn.raphaelIt = function(gradient, textAlign, verticalAlign){
        gradient = gradient || "90-#000:0-#888:50-#bbb";
        textAlign = textAlign || 'center';
        verticalAlign = verticalAlign || 'center';
        return this.each(function(){
            //.contents().filter(function(){ return(this.nodeType == 3); }).text() // <- returns the textcontent minus te childrens
            var text = $(this).text();
            var width = $(this).width();
            var height = $(this).height();
            var previousDisplay = $(this).css('display');
            $(this).css('display', 'table');
            var textWidth = $(this).width();
            var textHeight = $(this).height();
            $(this).css('display', previousDisplay);
            $(this).text('');
            var textPositionX = width / 2;
            var textPositionY = height / 2;
            if (textAlign == 'left') {
                textPositionX = textWidth / 2;
            } else if (textAlign == 'right') {
                textPositionX = width - (textWidth / 2);
            }
            if (verticalAlign == 'top') {
                textPositionY = textHeight / 2;
            } else if (verticalAlign == 'bottom') {
                textPositionY = height - (textHeight / 2);
            }
            var that = this;
            var r = Raphael(this, width, height);
            r.text(textPositionX, textPositionY, text).attr({
                fill: gradient,
                'fill-opacity': 1,
                'font-size': $(that).css('font-size'),
                'font-family':$(that).css('font-family'),
                'font-weight':$(that).css('font-weight')
            });
        //
        });
    };
})(jQuery)