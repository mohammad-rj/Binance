// html dom is done
$( window ).on( "load", function() {
    // menu bg color setting by page url
    // var cs1 = $(".pg_index").attr("class").split(" ");
    // console.log( cs1[1] );
    switch ( $(".pg_index").attr("class").split(" ")[1] ) {
        case 'home':            //home.php
            $(".menu0").addClass('select');
            break;

        case 'userinfo':        //page1_1.php
            $('#pageSubmenu').collapse("show");
            $(".menu1_1").addClass('select');
            break;
        case 'signal':      //page1_2.php
            $('#pageSubmenu').collapse("show");
            $(".menu1_2").addClass('select');
            break;
        case 'logmanagement':    //page1_3.php
            $('#pageSubmenu').collapse("show");
            $(".menu1_3").addClass('select');
            break;
        case 'buyout':    //page1_3.php
            $('#pageSubmenu').collapse("show");
            $(".menu1_4").addClass('select');
            break;

        case 'profitmanagement':       //page1_4.php
            $('#pageSubmenu').collapse("show");
            $(".menu1_5").addClass('select');
            break;
        case 'mail':      //page1_5.php
            $('#pageSubmenu').collapse("show");
            $(".menu1_6").addClass('select');
            break;
        case 'telegram':     //page1_6.php
            $('#pageSubmenu').collapse("show");
            $(".menu1_7").addClass('select');
            break;
        case 'admininfo':     //page1_7.php
            $('#pageSubmenu').collapse("show");
            $(".menu1_8").addClass('select');
            break;
        case 'profitsetting':     //page1_7.php
            $('#pageSubmenu').collapse("show");
            $(".menu1_3").addClass('select');
            break;
        case 'setting':     //page1_7.php
            $('#pageSubmenu').collapse("show");
            $(".menu1_2").addClass('select');
            break;
    }
});

// html dom is done
$(document).ready(function () {
    // hambugar button click
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });

    // menu click
    $("[href]").on('click', function () {
        $("li").removeClass('select');
        $("li").removeClass('subOpen');
        $(this).parent().addClass('select');

        if ( $(this).next().hasClass( "collapse" ) ) {      //click collapse menu
            
            if( $(this).attr('aria-expanded') == "true" ) {
                // when collapse menu is open
                $(this).parent().removeClass('subOpen');
            } else {
                // when collapse menu is close,
                $(this).parent().addClass('subOpen');
            }
            
        } else if ( $(this).parent().parent().hasClass( "collapse" ) ) {    //if click sub menu of collapse,
            $('.collapseItem').addClass('subOpen');
        } else {    //click other 5 buttons
            $('.collapse').collapse("hide");
        }
        // console.log( $(this).attr('aria-expanded') );
    });




    // click search icon
    //変数定義
    var navigationOpenFlag = false;
    var navButtonFlag = true;
    var focusFlag = false;
    //ハンバーガーメニュー
    $(function(){
    
        $(document).on('click','#searchIcon',function(){
            if(navButtonFlag){
            spNavInOut.switch();
            //一時的にボタンを押せなくする
            setTimeout(function(){
                navButtonFlag = true;
            },200);
                navButtonFlag = false;
            }
        });
        $(document).on('click touchend', function(event) {
            if (!$(event.target).closest('.searchTxt').length && $('.search-box').hasClass('searchOpen') && focusFlag) {
                focusFlag = false;
                //scrollBlocker(false);
                spNavInOut.switch();
            }
        });
    });
    
    //ナビ開く処理
    function spNavIn(){
        // $('.search-box').removeClass('js_humburgerClose');
        $('.search-box').addClass('searchOpen');
        setTimeout(function(){
            focusFlag = true;
        },200);
        setTimeout(function(){
            navigationOpenFlag = true;
        },200);
    }
    
    //ナビ閉じる処理
    function spNavOut(){
        $('.search-box').removeClass('searchOpen');
        // $('.search-box').addClass('js_humburgerClose');
        setTimeout(function(){
            focusFlag = false;
        },200);
        navigationOpenFlag = false;
    }
    
    //ナビ開閉コントロール
    var spNavInOut = {
        switch:function(){
            if($('.search-box.spNavFreez').length){
                return false;
            }
            if($('.search-box').hasClass('searchOpen')){
                spNavOut();
            } else {
                spNavIn();
            }
        }
    };


    
    // var loader = $("div.loader1");
    // var container = $("div.container");
    // loader.css("display","none");
    // container.css("display","block");

    // page preloader settings
    // new WOW().init();



    
    // mapping page - plus icon click
    $('#plus').click(function () {
        var classNames = $("#map-layer").attr("class").toString().split(' ');
        $.each(classNames, function (i, className) {
            // console.log( className );
            if ( className == 'zoom0' ) {
                $('#map-layer').removeClass('zoom0');
                $('#map-layer').addClass('zoom1');
            } else if ( className == 'zoom1' ) {
                $('#map-layer').removeClass('zoom1');
                $('#map-layer').addClass('zoom2');
            } else if ( className == 'zoom2' ) {
                $('#map-layer').removeClass('zoom2');
                $('#map-layer').addClass('zoom3');
            } else if ( className == 'zoom3' ) {
                $('#map-layer').removeClass('zoom3');
                $('#map-layer').addClass('zoom4');
            } else if ( className == 'zoom4' ) {
                $('#map-layer').removeClass('zoom4');
                $('#map-layer').addClass('zoom5');
            } else if ( className == 'zoom5' ) {
                $('#max-zoom').toast('show');
            }
        });

    })

    // mapping page - minus icon click
    $('#minus').click(function () {
        var classNames = $("#map-layer").attr("class").toString().split(' ');
        $.each(classNames, function (i, className) {
            // console.log( className );
            if ( className == 'zoom0' ) {
                $('#min-zoom').toast('show');
            } else if ( className == 'zoom1' ) {
                $('#map-layer').removeClass('zoom1');
                $('#map-layer').addClass('zoom0');
            } else if ( className == 'zoom2' ) {
                $('#map-layer').removeClass('zoom2');
                $('#map-layer').addClass('zoom1');
            } else if ( className == 'zoom3' ) {
                $('#map-layer').removeClass('zoom3');
                $('#map-layer').addClass('zoom2');
            } else if ( className == 'zoom4' ) {
                $('#map-layer').removeClass('zoom4');
                $('#map-layer').addClass('zoom3');
            } else if ( className == 'zoom5' ) {
                $('#map-layer').removeClass('zoom5');
                $('#map-layer').addClass('zoom4');
            }
        });

    })


    // mapping page - time line seek bar
    $(".time-ctrl").change(function (e) {
        var value = e.target.value;
        $(".time-bar").val(value);
    });


    // page2 display trans    
    $('.trans-btn').click(function () {
        $(".trans-btn").removeClass('select-on');
        $(this).addClass('select-on');
    });

    // page2, 4, 5, 6 - search filter-type
    $('.srh-block li a').click(function () {
        // $(".trans-btn").removeClass('select-on');
        $(this).parent('li').toggleClass('view-on');
    });

    // mapping page - map select
    $('.map-btn').click(function () {
        $(".map-btn").removeClass('select-on');
        $(this).toggleClass('select-on');
    });

    // mapping page - sensor select on/off
    $('.sensor-item li a').click(function () {
        // $(".trans-btn").removeClass('select-on');
        $(this).parent('li').toggleClass('view-on');
    });
});




