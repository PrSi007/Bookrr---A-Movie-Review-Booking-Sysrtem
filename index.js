$(function () {
  $(window).on('scroll', function () {
      if ( $(window).scrollTop() > 10 ) {
          $('.navbar').addClass('active');
      } else {
          $('.navbar').removeClass('active');
      }
  });
});
$('#example').popover(options)
$(function () {
    $('.example-popover').popover({
      container: 'body'
    })
  })