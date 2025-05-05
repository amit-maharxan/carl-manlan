$(document).ready(function() {
    $('.mdhidden').each(function () {
        $(this).removeClass('mdhidden').addClass('md:hidden');
    });
    $('.max-mdhidden').each(function () {
        $(this).removeClass('max-mdhidden').addClass('max-md:hidden');
    });
    $('li#menu-item-122 a').addClass('btn-primary');
    
    $('.bg-white25').addClass('bg-white/25');
    $('form').addClass('flex flex-col gap-6 max-w-[44rem] mx-auto');
});