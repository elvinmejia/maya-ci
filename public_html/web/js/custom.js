$(document).ready(function() {

    /*$(".title_01").mouseover(function(){
        $('.title_maya_01').css('display','none');
        $('.info_cat_01').animate({ "top": "80%" }, "slow" );
        $('.txt_categoria').animate({ "top": "20%" }, "slow" );

    });
    $(".title_01").mouseout(function(){
        $('.title_maya_01').css('display','block');
        $('.info_cat_01').animate({ "top": "110%" }, "slow" );
        $('.txt_categoria').animate({ "top": "40%" }, "slow" );
    });*/

    $(".title_01").mouseover(function(){
        //$('.title_maya_01').css('display','none');
        $('.title_maya_01').addClass('img_maya');
    });
    $(".title_01").mouseout(function(){
        //$('.title_maya_01').css('display','block');
        $('.title_maya_01').removeClass('img_maya');
    });

    $(".title_02").mouseover(function(){
        //$('.title_maya_02').css('display','none');
        $('.title_maya_02').addClass('img_maya');
    });
    $(".title_02").mouseout(function(){
        //$('.title_maya_02').css('display','block');
        $('.title_maya_02').removeClass('img_maya');
    });

    $(".title_03").mouseover(function(){
        //$('.title_maya_03').css('display','none');
        $('.title_maya_03').addClass('img_maya');
    });
    $(".title_03").mouseout(function(){
        //$('.title_maya_03').css('display','block');
        $('.title_maya_03').removeClass('img_maya');
    });


    /*loader web open*/
    setTimeout(function(){
        $('body').addClass('loaded');
    }, 1000);
    /*loader web close*/

});
