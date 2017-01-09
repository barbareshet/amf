/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
(function ($) {
    $(document).ready(function () {
        function timestamp() {
            var d = new Date;
            var timestamp = d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();

            console.log('last refresh was at: ' + timestamp);
        }
       timestamp();

        //carousel
        $('.carousel').carousel({
            interval: 5000 //changes the speed
        });

        //Paralax
        $(function () {
            //Cache the window object
            var $window = $(window);

            //Parallax background effect
            $('section[data-type="background"]').each(function () {
                var $bgobj = $(this); //assaining the object
                $($window).scroll(function () {
                    // scroll the background at var speed
                    //the yPos is a negative value because we're scrolling it UP!
                    var yPos = -($window.scrollTop() / $bgobj.data('speed'));
                    // put together our final background position
                    var coords = '50% ' + yPos + 'px';

                    //Move the background
                    $bgobj.css({
                        backgroundPosition: coords
                    });
                }); //ebd window scroll
            });
        });
        $(".navbar-toggle").on("click", function () {
            $(this).toggleClass("active");
        });

//scrollup
        $(window).scroll(function(){
            if ($(this).scrollTop() > 450) {
                $('.scrollup').fadeIn();
            } else {
                $('.scrollup').fadeOut();
            }
        });
        $('.scrollup').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 1000);
            return false;
        });

        //scroll form menu

        $("a.page-scroll").bind("click", function(e) {
            e.preventDefault();
            var l = $(this);
            $("html, body").stop().animate({
                scrollTop: $(l.attr("href")).offset().top - 50
            }, 1250);
        });
    });


})(jQuery);

//
jQuery(document).ready(function ($) {
    
    

});

