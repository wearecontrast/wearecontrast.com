//= include vendor/modernizr-custom.js

$(document).foundation();




$(".js_project-link").on('click', function(event) {
  var $this = $(this),
      expandedClass = "is-expanded";
      thisIsExpanded = $this.hasClass(expandedClass);

  event.preventDefault();

  $(".js_project-list li").not($this.parent()).removeClass(expandedClass)
                                              .find(".js_project-detail").slideUp();

  $this.parent().toggleClass(expandedClass)
                  .find(".js_project-detail").slideToggle();
});






$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
