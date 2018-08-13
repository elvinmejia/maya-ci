$(document).ready(function() {

    $(".title_01").mouseover(function(){
        $('.title_maya_01').css('display','none');

    });
    $(".title_01").mouseout(function(){
        $('.title_maya_01').css('display','block');
    });

    /*loader web open*/
    setTimeout(function(){
        $('body').addClass('loaded');
    }, 1000);
    /*loader web close*/

});
