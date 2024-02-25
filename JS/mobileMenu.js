const handleMobileMenu = () => {
    $('.mobileMenuContent').css({
        'transform': 'translateX(0)'
    });

    $('html, body').css({
        overflow: 'hidden',
        height: '100vh'
    });
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