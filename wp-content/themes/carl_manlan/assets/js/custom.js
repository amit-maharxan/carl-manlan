$(document).ready(function() {
    $('.mdhidden').each(function () {
        $(this).removeClass('mdhidden').addClass('md:hidden');
    });
    $('.max-mdhidden').each(function () {
        $(this).removeClass('max-mdhidden').addClass('max-md:hidden');
    });
});