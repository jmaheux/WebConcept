/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
var isOn = null;
var isOut = null;

$(document).ready(function(){
    $('#menu ul li:eq(2)').addClass('selected');
    var icons = {
        header: "ui-icon-circle-arrow-e",
        headerSelected: "ui-icon-circle-arrow-s"
    };

    $('.accordions-wrapper:eq(0) h1:eq(0)').raphaelIt("90-#888:0-#FFF");
    $('.accordions-wrapper:eq(0) h1:eq(1)').raphaelIt("90-#888:0-#FFF", 'right', 'top');
//    $('.accordions-wrapper:eq(0) h3').raphaelIt("#fff", 'left');
    $('.accordions-wrapper:eq(1) h1:eq(0)').raphaelIt("90-#676767:10-#888:50-#fff");
    $('.accordions-wrapper:eq(1) h1:eq(1)').raphaelIt("90-#676767:10-#888:50-#fff", 'right', 'top');
//    $('.accordions-wrapper:eq(1) h3').raphaelIt("#fff", 'left');
    $('.accordions-wrapper:eq(2) h1:eq(0)').raphaelIt("90-#4d4320:10-#fffccc:90-#fff");
    $('.accordions-wrapper:eq(2) h1:eq(1)').raphaelIt("90-#4d4320:10-#fffccc:90-#fff", 'right', 'top');
//    $('.accordions-wrapper:eq(2) h3').raphaelIt("#fff", 'left');

    $('.accordions').accordion({
        event: 'mouseenter',
        collapsible: true,
        autoHeight: false,
        clearStyle: true,
        active: false,
        icons: icons
    });

    $('.accordions').bind('mouseleave', function(){
        $('.ui-accordion-header-active', this).trigger('mouseenter');
    })
});