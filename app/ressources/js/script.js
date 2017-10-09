$('.pull').on('click', function() {
    if ($('.menu').hasClass('active')) {
        $('.menu').removeClass('active');
    } else {
        $('.menu').addClass('active');
    }
});

$('.pull').on('click', function() {
    if ($('.pull').hasClass('active')) {
        $('.pull').removeClass('active');
    } else {
        $('.pull').addClass('active');
    }
});