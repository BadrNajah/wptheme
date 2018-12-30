if ($(window).width() > 960) 
{
  $(window).scroll(function()
  {
    if($(this).scrollTop() >= 100)
    {
      $('.navbar').addClass('navbar-fixed-top').animate({ top: 0 });
    }
    else
    {
      $('.navbar').removeClass('navbar-fixed-top');
    }
  });
}