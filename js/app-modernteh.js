/**
 * Created by kaa on 23.06.2016.
 */
/*----zvonok----------------------*/
    $(document).ready(function(){
        $(".trigger").click(function(){
            $(".panel").toggle("fast");
            $(this).toggleClass("active");
            return false;
        });
    });
        $(document).ready(function(){
            //Показать форму
            //$('#callback').click(function(){
            //    $('#callback_form').slideDown();
            //});
            //Скрыть форму
            //$('#close').click(function(){
            //    $('#callback_form').slideUp();
            //});
            //Нажали на кнопку - заказать звонок
            $('#send').click(function(){
                name = $('#name').val();
                item = $('#item').val();
                phone = $('#phone').val();
                //Если поля заполнены, то отправляем данные
                if( name != '' && phone != '' ){
                    $.post("http://localhost:63342/modern/callback.php",{
                        name: name,
                        item: item,
                        phone: phone
                    },function success(data){
                        if( data != 0 ) {
                            $('#callback_form').html('Отправлено!'); //.slideUp(6000);
                            //$(".panel").toggle("fast");
                        }
                    });
                }else $(this).siblings('input').animate({opacity: 0.25}, 500).animate({opacity: 1}, 500);
            });
        });
/*--------end zvonok------------------*/

/*----akcii----------------------*/
$(document).ready(function(){
    $(".trigger2").click(function(){
        $(".panel2").toggle("fast");
        $(this).toggleClass("active");
        return false;
    });
});
/*--------end akcii------------------*/

    $(document).ready(function(){

        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('.scrollup').fadeIn();
            } else {
                $('.scrollup').fadeOut();
            }
        });

        $('.scrollup').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
        });

    });

    jQuery(function()
    {
        $('.main-slider-img').width($(document).width());
    });

    jQuery(function()
    {
        $('.content-main').height($('.main-navigation').height());
    });

    $(document).ready(function() {
        $(".fancybox").fancybox({
            hideOnContentClick  :   true
        });
    });
//------------------------------------------------
    $(document).ready(function(){
        var left_col_height = $("div#left").height();
        var right_col_height = $("div#right").height();

        if (left_col_height > right_col_height)
        {
            $("div#right").height(left_col_height);
        }
        else
        {
            $("div#left").height(right_col_height);
        }
    });

//-------------search-------
    (function(w,d,c){var s=d.createElement('script'),h=d.getElementsByTagName('script')[0],e=d.documentElement;if((' '+e.className+' ').indexOf(' ya-page_js_yes ')===-1){e.className+=' ya-page_js_yes';}s.type='text/javascript';s.async=true;s.charset='utf-8';s.src=(d.location.protocol==='https:'?'https:':'http:')+'//site.yandex.net/v2.0/js/all.js';h.parentNode.insertBefore(s,h);(w[c]||(w[c]=[])).push(function(){Ya.Site.Form.init()})})(window,document,'yandex_site_callbacks');

