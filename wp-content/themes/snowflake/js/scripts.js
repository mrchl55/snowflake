// KARUZELA
(function($) {
    $(document).ready(function() {
        AOS.init();
        $('nav .menu-menu-1-container').addClass('collapse navbar-collapse');
        $('nav .menu-menu-1-container').attr('id', 'navbarNav');
        $('nav #menu-menu-1').addClass('navbar-nav');
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                768:{
                    items:1
                },
                1000:{
                    items:3
                }
            }
        })
       

        
      });
  })( jQuery );


  // ZMIANA KONTENTU DLA APARTMENTS & HOUSES

  (function($) {
    $(document).ready(function() {
 
      $('.item-apartments').click(function() {
        $('.apartments-desc h6').html($(this).find("a").html());
        $('.apartments-desc img').attr('src', $(this).find("img").attr('src'));
        $('.apartments-desc p').html('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.');
      });

      $('.item-blueprints').click(function() {
        $('.apartments-desc h6').html($(this).find("a").html());
        $('.apartments-desc img').attr('src', $(this).find("img").attr('src'));
        $('.apartments-desc p').html(' Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.');
      });

      $('.item-floor').click(function() {
        $('.apartments-desc h6').html($(this).find("a").html());
        $('.apartments-desc img').attr('src', $(this).find("img").attr('src'));
        $('.apartments-desc p').html('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.');
      });
        
      });
  })( jQuery );

  // ANIMACJA SNIEZYNKI 

(function($) {
    $(document).ready(function() {
     


        
        $('.snowflake-icon img').click(function() {
            $(this).rotate({
              count: 4,
              duration: 0.6,
              easing: 'ease-out'
            });
          });
        
       

        
      });

      $.fn.rotate = function(options) {
        var $this = $(this),
          prefixes, opts, wait4css = 0;
        prefixes = ['-Webkit-', '-Moz-', '-O-', '-ms-', ''];
        opts = $.extend({
          startDeg: false,
          endDeg: 360,
          duration: 1,
          count: 1,
          easing: 'linear',
          animate: {},
          forceJS: false
        }, options);
      
        function supports(prop) {
          var can = false,
            style = document.createElement('div').style;
          $.each(prefixes, function(i, prefix) {
            if (style[prefix.replace(/\-/g, '') + prop] === '') {
              can = true;
            }
          });
          return can;
        }
      
        function prefixed(prop, value) {
          var css = {};
          if (!supports.transform) {
            return css;
          }
          $.each(prefixes, function(i, prefix) {
            css[prefix.toLowerCase() + prop] = value || '';
          });
          return css;
        }
      
        function generateFilter(deg) {
          var rot, cos, sin, matrix;
          if (supports.transform) {
            return '';
          }
          rot = deg >= 0 ? Math.PI * deg / 180 : Math.PI * (360 + deg) / 180;
          cos = Math.cos(rot);
          sin = Math.sin(rot);
          matrix = 'M11=' + cos + ',M12=' + (-sin) + ',M21=' + sin + ',M22=' + cos + ',SizingMethod="auto expand"';
          return 'progid:DXImageTransform.Microsoft.Matrix(' + matrix + ')';
        }
      
        supports.transform = supports('Transform');
        supports.transition = supports('Transition');
      
        opts.endDeg *= opts.count;
        opts.duration *= opts.count;
      
        if (supports.transition && !opts.forceJS) { 
          if ((/Firefox/).test(navigator.userAgent)) {
            wait4css = (!options || !options.animate) && (opts.startDeg === false || opts.startDeg >= 0) ? 0 : 25;
          }
          $this.queue(function(next) {
            if (opts.startDeg !== false) {
              $this.css(prefixed('transform', 'rotate(' + opts.startDeg + 'deg)'));
            }
            setTimeout(function() {
              $this
                .css(prefixed('transition', 'all ' + opts.duration + 's ' + opts.easing))
                .css(prefixed('transform', 'rotate(' + opts.endDeg + 'deg)'))
                .css(opts.animate);
            }, wait4css);
      
            setTimeout(function() {
              $this.css(prefixed('transition'));
              if (!opts.persist) {
                $this.css(prefixed('transform'));
              }
              next();
            }, (opts.duration * 1000) - wait4css);
          });
      
        } else { 
          if (opts.startDeg === false) {
            opts.startDeg = $this.data('rotated') || 0;
          }
          opts.animate.perc = 100;
      
          $this.animate(opts.animate, {
            duration: opts.duration * 1000,
            easing: $.easing[opts.easing] ? opts.easing : '',
            step: function(perc, fx) {
              var deg;
              if (fx.prop === 'perc') {
                deg = opts.startDeg + (opts.endDeg - opts.startDeg) * perc / 100;
                $this
                  .css(prefixed('transform', 'rotate(' + deg + 'deg)'))
                  .css('filter', generateFilter(deg));
              }
            },
            complete: function() {
              if (opts.persist) {
                while (opts.endDeg >= 360) {
                  opts.endDeg -= 360;
                }
              } else {
                opts.endDeg = 0;
                $this.css(prefixed('transform'));
              }
              $this.css('perc', 0).data('rotated', opts.endDeg);
            }
          });
        }
      
        return $this;
      };
      
  })( jQuery );


  