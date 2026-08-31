document.addEventListener('DOMContentLoaded', function () {

  // mobile nav
  var toggle = document.getElementById('menuToggle');
  var navlinks = document.getElementById('navlinks');
  if (toggle && navlinks) {
    toggle.addEventListener('click', function () {
      navlinks.classList.toggle('open');
    });

    // On mobile, tapping a top-level item with a dropdown expands
    // it in place instead of navigating (dropdowns are hover-only
    // on desktop, so this is the touch equivalent).
    navlinks.querySelectorAll('li').forEach(function (li) {
      var dropdown = li.querySelector('.dropdown');
      var link = li.querySelector('a.top-link');
      if (dropdown && link) {
        link.addEventListener('click', function (e) {
          if (window.innerWidth <= 900) {
            e.preventDefault();
            li.classList.toggle('expanded');
          }
        });
      }
    });
  }

  // rocket scroll animation
  var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var rocket = document.getElementById('rocket');
  if (rocket && window.gsap && window.ScrollTrigger && !reduceMotion) {
    gsap.registerPlugin(ScrollTrigger);
    gsap.to('#rocket', {
      y: function () { return -(document.body.scrollHeight - window.innerHeight * 1.05); },
      rotation: 4,
      ease: 'none',
      scrollTrigger: {
        trigger: 'body',
        start: 'top top',
        end: 'bottom bottom',
        scrub: 0.6
      }
    });
    gsap.to('#flame', { ry: 22, opacity: 0.6, repeat: -1, yoyo: true, duration: 0.25 });
  }
});
