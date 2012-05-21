/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
    $('.mainMenu li:eq(3)').hover(function(){
        $('.subMenu', this).stop(true, true).show('fold', {size:10, horizFirst: true})
    }, function(){
        $('.subMenu', this).stop(true, true).hide('fold', {size:10, horizFirst: true})
    });
});
