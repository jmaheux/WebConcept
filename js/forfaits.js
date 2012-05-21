/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
var isOver = null;

$(document).ready(function(){
    $('#menu ul li:eq(2)').addClass('selected');
    var icons = {
        header: "ui-icon-circle-arrow-e",
        headerSelected: "ui-icon-circle-arrow-s"
    };

    $('.accordions-wrapper:eq(0) h1:eq(0)').raphaelIt("90-#888:0-#FFF");
    $('.accordions-wrapper:eq(0) h1:eq(1)').raphaelIt("90-#888:0-#FFF", 'right', 'top');
    $('.accordions-wrapper:eq(1) h1:eq(0)').raphaelIt("90-#676767:10-#888:50-#fff");
    $('.accordions-wrapper:eq(1) h1:eq(1)').raphaelIt("90-#676767:10-#888:50-#fff", 'right', 'top');
    $('.accordions-wrapper:eq(2) h1:eq(0)').raphaelIt("90-#4d4320:10-#fffccc:90-#fff");
    $('.accordions-wrapper:eq(2) h1:eq(1)').raphaelIt("90-#4d4320:10-#fffccc:90-#fff", 'right', 'top');

    $('.accordions').accordion({
        event: 'mymouseevent',
        //fillSpace: true,
        collapsible: true,
        autoHeight: false,
        clearStyle: true,
        active: false,
        icons: icons
    });

    var myMaxHeight = 0;
    $('.accordions-wrapper').each(function(){
        var myHeight = $(this).height();

        var myContentMaxHeight = 0;
        $('.accordions div', this).each(function(){
            myContentMaxHeight = Math.max(myContentMaxHeight, $(this).height('').show().height());
            $(this).hide();
        });
        myMaxHeight = Math.max(myMaxHeight, myHeight + myContentMaxHeight);
    });
    $('.accordions-holder').height(myMaxHeight);
    //$('.accordions').height(myMaxHeight - 102);


    $('.accordions h3').bind('mouseover', function(){
        isOver = this;
        var that = this;
        setTimeout(function(){
            if (isOver == that)
                $(that).trigger('mymouseevent');
        }, 200);
    });

    $('.accordions').bind('mouseleave', function(){
        isOver = null;
        $('.ui-accordion-header-active', this).trigger('mymouseevent');
    });
});