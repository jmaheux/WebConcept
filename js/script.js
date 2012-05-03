/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
    $('.mainMenu li:eq(3)').hover(function(){
        $('.subMenu', this).stop(true, true).show('fold', {size:5})
    }, function(){
        $('.subMenu', this).stop(true, true).hide('fold', {size:5})
    });
});
