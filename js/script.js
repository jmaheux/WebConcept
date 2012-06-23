/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
    $('.mainMenu li:eq(3)').hover(function(){
        $('.subMenu', this).stop(true, true).show('scale', {origin:['left','top'], scale:'content'}, 500);
    }, function(){
        $('.subMenu', this).stop(true, true).hide('scale', {origin:['left','top'], scale:'content'}, 500);
    });
});
