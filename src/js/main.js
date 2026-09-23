(function () {
  'use strict';

  function slideDown(el) {
    if (!el) return;
    el.style.display = 'block';
    var height = el.scrollHeight;
    el.style.overflow = 'hidden';
    el.style.height = '0px';
    el.animate(
      [{ height: '0px' }, { height: height + 'px' }],
      { duration: 300, easing: 'ease' }
    ).onfinish = function () {
      el.style.removeProperty('height');
      el.style.removeProperty('overflow');
      el.style.display = 'block';
    };
  }

  function slideUp(el) {
    if (!el || el.style.display === 'none') return;
    var height = el.scrollHeight;
    el.style.overflow = 'hidden';
    el.animate(
      [{ height: height + 'px' }, { height: '0px' }],
      { duration: 300, easing: 'ease' }
    ).onfinish = function () {
      el.style.display = 'none';
      el.style.removeProperty('height');
      el.style.removeProperty('overflow');
    };
  }

  function initProjectList() {
    var expandedClass = 'is-expanded';
    var links = document.querySelectorAll('.js_project-link');

    links.forEach(function (link) {
      link.addEventListener('click', function (event) {
        event.preventDefault();

        var li = link.parentElement;
        var detail = li.querySelector('.js_project-detail');
        var wasExpanded = li.classList.contains(expandedClass);

        document.querySelectorAll('.js_project-list > li').forEach(function (otherLi) {
          if (otherLi !== li) {
            otherLi.classList.remove(expandedClass);
            slideUp(otherLi.querySelector('.js_project-detail'));
          }
        });

        li.classList.toggle(expandedClass);

        if (wasExpanded) {
          slideUp(detail);
        } else {
          slideDown(detail);
        }
      });
    });
  }

  function initSmoothScroll() {
    document.querySelectorAll('a[href*="#"]').forEach(function (anchor) {
      var href = anchor.getAttribute('href');
      if (!href || href === '#' || href.indexOf('#') === -1) return;
      if (anchor.hostname && anchor.hostname !== location.hostname) return;
      if (anchor.pathname.replace(/^\//, '') !== location.pathname.replace(/^\//, '')) return;

      var id = href.slice(href.indexOf('#') + 1);
      var target = id ? document.getElementById(id) : null;
      if (!target) return;

      anchor.addEventListener('click', function (event) {
        event.preventDefault();
        target.scrollIntoView({ behavior: 'smooth' });
      });
    });
  }

  document.addEventListener('DOMContentLoaded', function () {
    initProjectList();
    initSmoothScroll();
  });
})();
