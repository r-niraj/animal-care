let scrollPos;
const handleMobileMenu = () => {
    $('.mobileMenuContent').css({
        'transform': 'translateX(0)',
        'top': scrollPos
    });

    $('html, body').css({
        overflow: 'hidden',
    });

    // $(window).scrollTop(0);
}

const handleCloseNav = () => {
    $('.mobileMenuContent').css({
        'transform': 'translateX(-100%)'
    });
    
    $('html, body').css({
        overflow: 'auto ',
        height: 'auto'
    });
}

$(document).on('scroll', function(){
    scrollPos = $(window).scrollTop();
    if(scrollPos>148){
        $('.logBgMobile.mobile').css({
            'background':'#fff',
            'zIndex':9
        });

        $('.navbarCustom+a.donateBtn.mobile').css({
            'position':'fixed',
            'right':'21px',
            'zIndex':9,
            'top':'6px',
            'padding':'5px 12px'
        })
    }else{
        $('.logBgMobile.mobile').css({
            'background':'transparent'
        });

        $('.navbarCustom+a.donateBtn.mobile').css({
            'position':'',
            'right':'',
            'zIndex':9,
            'top':'',
            'padding':''
        })
    }
});