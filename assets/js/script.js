
 $(document).ready(function() {
    /* ================================================
       SIDE BAR AND RESPONSIVE WHEN TOGGLE MENU BAR
    ================================================ */
    $("#menuIcon").on('click', function() {
        $(".headermenu, .content").toggleClass('toggle');
        $(".side-bar").toggleClass('toggle backdrops');
        
        if ($(".fa-xmark").hasClass('fa-xmark')) {
            $(".fa-xmark").addClass('fa-bars').removeClass('fa-xmark');

        }else{
             $(".fa-bars").removeClass('fa-bars').addClass('fa-xmark');
        }
    });

    function toggleClassBasedOnWindowSize() {
        if (window.innerWidth < 900) {
            if ($(".fa-xmark").hasClass('fa-xmark')) {
                $(".fa-xmark").addClass('fa-bars').removeClass('fa-xmark');
            }else{
                 $(".fa-bars").removeClass('fa-bars').addClass('fa-xmark');
            }
            $(".side-bar, .headermenu, .content").addClass('toggle');
        } else {
            $(".headermenu, .content").removeClass('toggle');
            $(".side-bar").removeClass('toggle backdrops');

        }
    }

    toggleClassBasedOnWindowSize();

    $(window).on('resize', toggleClassBasedOnWindowSize);


    /*=====================================
            ACTIVE INDICATOR
    ======================================*/
    var currentPageUrl = window.location.href;

    for (var i = 0; i < $('.menu .nav-item').length; i++) {
        var link = $('.menu .nav-item a')[i];

        if (link.href === currentPageUrl) {
            link.parentElement.classList.add('active');

        }
    }

    /*=====================================
            ASSISTANCE BUTTON INDICATOR
    ======================================*/
        $('.btnClass').on('click', function() {
            $('.btnClass').removeClass('actives');
            $(this).addClass('actives');
        });
    
});



