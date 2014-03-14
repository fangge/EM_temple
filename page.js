$(function() {
    $('#closeNav').click(function(){
        $(this).parent().css('left','-100%')
        $('#openNav').css('left','0');
    })
    $('#openNav').click(function(){
        $(this).css('left','-100%');
        $(this).parent().css('left','0')
    })
    $(window).scroll(function(){
        gwFuns.scrollmove();
    })
    gwFuns.scrollPics_tab({
        currentTarget:'.imgSlide',
        wrap: '.img-list',
        tab: ''
    });
})
var gwFuns = {
    scrollmove : function(){
      var scrollValue = $(window).scrollTop();
        var d;
        scrollValue >180?d=scrollValue:d = 180;
        $('#contact').stop().animate({'top':d,'left':'-228px'},400);
    },
    scrollPics_tab: function(opt){
        //只针对一个tab con
        var settings = {
                currentTarget: '',
                autoplay : true,
                minNum: 1,
                time: 5000,
                tab: ''
            },
            opt = opt || {};
        settings = $.extend(settings, opt);

        var $currentTarget = $(settings.currentTarget),
            $wrap = $(settings.wrap),
            ul = $wrap.find("ul"),
            li_len = ul.find("li").length,
            li_w = ul.find("li").width(),
            left = $currentTarget.find("#prev"),
            right = $currentTarget.find("#next"),
            tab = $(settings.tab),
            timer = null,
            currentIndex = 0;
        tab.eq(currentIndex).addClass('current');

        if(li_len > settings.minNum){
            right.click(function() {
                currentIndex++;
                if(currentIndex == li_len){
                    currentIndex = 0;
                }
                tab.removeClass('current').eq(currentIndex).addClass('current');

                ul.stop().animate({
                    "left": -(li_w*currentIndex)
                }, 500)
            });
            left.click(function() {
                currentIndex--;
                if(currentIndex < 0){
                    currentIndex = li_len - 1;
                }
                tab.removeClass('current').eq(currentIndex).addClass('current');

                ul.stop().animate({
                    "left": -(li_w*currentIndex)
                }, 500)
            });
            tab.click(function(){
                currentIndex = $(this).index(settings.tab);
                tab.removeClass('current').eq(currentIndex).addClass('current');
                ul.stop().animate({
                    "left": -(li_w*currentIndex)
                }, 500)
            });
            if (settings.autoplay) {
                timer = setInterval(function() {
                    right.trigger("click");
                }, settings.time);
                $wrap.mouseenter(function() {
                    clearInterval(timer);
                })
                left.click(function() {
                    clearInterval(timer);
                })
                right.click(function() {
                    clearInterval(timer);
                })
                $wrap.mouseleave(function() {
                    clearInterval(timer);
                    timer = setInterval(function() {
                        right.trigger("click");
                    }, settings.time);
                })
            };
        }
    }
}