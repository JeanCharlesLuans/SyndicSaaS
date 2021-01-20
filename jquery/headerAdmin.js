$('.iconMenu').on('click',function() {
    $('.menu').removeClass('d-none');
    $('.iconeCroix').removeClass('d-none');
    $('.iconMenu').addClass('d-none');
});

$('.iconeCroix').on('click',function() {
    $('.menu').addClass('d-none');
    $('.iconeCroix').addClass('d-none');
    $('.iconMenu').removeClass('d-none');
});