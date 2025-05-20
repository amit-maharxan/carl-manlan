$(document).ready(function () {
  $('.lghidden').each(function () {
    $(this).removeClass('lghidden').addClass('lg:!hidden');
  });

  $('.max-lghidden').each(function () {
    $(this).removeClass('max-lghidden').addClass('max-lg:!hidden');
  });
  
  $('li#menu-item-122 a').addClass('btn-primary');

  $('.bg-white25').addClass('bg-white/25');
  $('.bg-light25').addClass('bg-light/25');

  $('form').addClass('flex flex-col gap-6 max-w-[44rem] mx-auto');

  $('form.wpcf7-form p').contents().unwrap();
  $('form.wpcf7-form br').remove();

  $('input[name="first_name"]').removeAttr('size');
  $('input[name="last_name"]').removeAttr('size');

  $('input[name="first-name"]').removeAttr('size');
  $('input[name="last-name"]').removeAttr('size');
  $('input[name="email"]').removeAttr('size');
  $('textarea[name="message"]').removeAttr('cols');
});
