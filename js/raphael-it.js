(function($){
    $.fn.raphaelIt = function(){
        return this.each(function(){
            //.contents().filter(function(){ return(this.nodeType == 3); }).text() // <- returns the textcontent minus te childrens
            var text = $(this).text();
            var width = $(this).width();
            var height = $(this).height();
            var textPositionX = width / 2;
            var textPositionY = height / 2;
            var r = Raphael(this, width, height);
            r.text(textPositionX, textPositionY, text).attr({
                fill: "90-#000:0-#888:50-#bbb",
                'fill-opacity': 0.8,
                'font-size': 42,
                'font-family':'Oswald, sans-serif',
                'font-weight':'bold'
            });
        });
    };
})(jQuery)