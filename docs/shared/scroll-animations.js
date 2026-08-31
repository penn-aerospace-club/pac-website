document.addEventListener('DOMContentLoaded', function () {

  // ---------- mobile nav ----------
  var toggle = document.getElementById('menuToggle');
  var navlinks = document.getElementById('navlinks');
  if (toggle && navlinks) {
    toggle.addEventListener('click', function () {
      navlinks.classList.toggle('open');
    });
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

  // ---------- scroll-linked icon(s) ----------
  // Add class="scroll-icon vertical|horizontal" and data-anim="..." to any
  // SVG to have it move as the page scrolls. Modes:
  //   vertical        -> climbs straight up the page (rocket, balloon)
  //   vertical-spin    -> climbs up AND spins continuously (jet turbine)
  //   horizontal       -> flies left-to-right across the page, gentle bank (aircraft)
  var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  if (reduceMotion || !window.gsap) return;

  gsap.registerPlugin(ScrollTrigger);
  var pageDistance = function () {
    return document.body.scrollHeight - window.innerHeight * 1.05;
  };

  document.querySelectorAll('.scroll-icon').forEach(function (el) {
    var mode = el.getAttribute('data-anim') || 'vertical';

    if (mode === 'vertical' || mode === 'vertical-spin') {
      gsap.to(el, {
        y: function () { return -pageDistance(); },
        rotation: mode === 'vertical-spin' ? 0 : 4,
        ease: 'none',
        scrollTrigger: { trigger: 'body', start: 'top top', end: 'bottom bottom', scrub: 0.6 }
      });
      if (mode === 'vertical-spin') {
        var blades = el.querySelector('.spin-group');
        if (blades) {
          gsap.to(blades, { rotation: 360, transformOrigin: '50% 50%', repeat: -1, ease: 'none', duration: 1.4 });
        }
      }
    }

    if (mode === 'horizontal') {
      gsap.to(el, {
        x: function () { return window.innerWidth * 1.15; },
        rotation: 6,
        ease: 'none',
        scrollTrigger: { trigger: 'body', start: 'top top', end: 'bottom bottom', scrub: 0.6 }
      });
    }

    // shared flame/exhaust flicker if present
    var flame = el.querySelector('.flame');
    if (flame) {
      gsap.to(flame, { opacity: 0.6, repeat: -1, yoyo: true, duration: 0.25 });
    }
  });
});
