(function($){
  'use strict';
  
  
  
//////////////////////////////////////////////////
///////////////// Helper variables
// ///////////////////////////////////////////////
var $assetsPath ='assets/vendor',
     $window = $(window),
     $windowHeight = $(window).height(),
     $windowWidth = $(window).width(),
     $document = $(document);
  
  
  
  
//////////////////////////////////////////////////
/////////////////  Helper function 
// ///////////////////////////////////////////////  
  
// ////////////////////////////////////////////////
// Dynamic Script Loading  
// /////////////////////////////////////////////// 
  function loadScript(url, callback){
    var script = document.createElement("script");
    script.type = "text/javascript";
    if (script.readyState){  
        script.onreadystatechange = function(){
            if (script.readyState == "loaded" ||
                    script.readyState == "complete"){
                script.onreadystatechange = null;
                callback();
            }
        };
    } else {
        script.onload = function(){
            callback();
        };
    }
    script.src = url;
    document.getElementsByTagName("body")[0].appendChild(script);
}
  
  
// ////////////////////////////////////////////////
// Check if something really exits
// /////////////////////////////////////////////// 
  $.fn.exists = function () {
    return this.length > 0;
  };

  
  
  
// ////////////////////////////////////////////////
//////// theme helper functions master object 
// ///////////////////////////////////////////////   
var ECHOHelper = {
  
    // nav on scroll apperaance
  
    navOnScrollApperaance:function(){
      var $nav = $('.ec-nav');
      // add shadow when nav sticky top
      if($nav.length){
        $(window).scroll(function() {  
            if ($(window).scrollTop() >= 100) {
                $('.ec-nav.sticky-top').addClass('shadow-v1');
            }
            else {
                $('.ec-nav.sticky-top').removeClass('shadow-v1');
            }  
        });        
      }

    },
  
  		
    // Smooth scroll to target element

    scrollTo: function(){
            $('[data-scrollto]').on('click', function(){
            var id = '#' + $(this).data('scrollto');
            if ( $(id).length > 0 ) {
                var offset = 0;
                if ( $('.header').length ) {
                    offset = $('.header').height();
                }
                $('html').animate({scrollTop: $(id).offset().top}, 700);
            }
            return false;
        });
    },

    // Show mobile dropdown menu when click 
    mobileNavShow: function(){
        $( '.dropdown-menu a.dropdown-toggle' ).on( 'click', function ( e ) {
            var $el = $( this );
            var $parent = $( this ).offsetParent( ".dropdown-menu" );
            if ( !$( this ).next().hasClass( 'show' ) ) {
                $( this ).parents( '.dropdown-menu' ).first().find( '.show' ).removeClass( "show" );
            }
            var $subMenu = $( this ).next( ".dropdown-menu" );
            $subMenu.toggleClass( 'show' );

            $( this ).parent( "li" ).toggleClass( 'show' );

            $( this ).parents( 'li.nav-item.dropdown.show' ).on( 'hidden.bs.dropdown', function ( e ) {
                $( '.dropdown-menu .show' ).removeClass( "show" );
            } );
            return false;
        } );
    },
  
  
    // Search form toggler
    searchFormToggle: function(){
      
      $('.site-search-toggler').on('click', function(e){
        e.preventDefault();
        $('.site-search').addClass('open');
      });
      $('.site-search__close').on('click', function(){
        $('.site-search').removeClass('open');
      });
      
    },
  
  
    // Search form toggler
    hamburger: function(){
      
      $('.hamburger').on('click', function(e){
        $(this).toggleClass('is-active');
      });
    },

  
   //input focus shadow
    inputGroupFocus:function(){
      $('.input-group--focus .form-control').on('focus', function(){
        $(this).parent('.input-group').addClass('state--focus');
      }).on('blur', function(){
        $(this).parent('.input-group').removeClass('state--focus');
      });
    },


  
   //input focus shadow
    animatedShare:function(){
      
      $('.animated-share__trigger').on('click', function(e){
        e.preventDefault();
        $(this).parent('.animated-share').toggleClass('active');
      });
    },

  
   //touchSpin
    touchSpin:function(){
          $('.ec-touchspin').each(function(){
            var $this = $(this);
            var $plus = $this.find('.ec-touchspin__plus');
            var $minus = $this.find('.ec-touchspin__minus');
            var $input = $this.find('.ec-touchspin__result');
            var $inputVal = parseInt($input.val());
            
              $input.on('change', function(){
                $inputVal = parseInt($(this).val());
              });
            
              $plus.on('click', function(){
                $inputVal += 1;
                $input.val($inputVal);
              });

              $minus.on('click', function(){
                if($inputVal > 0){
                   $inputVal -= 1;
                  $input.val($inputVal); 
                }
                return;
              });    
            
            
          });
    
      
    }, // End touchSpin

  
   //ecRating
    ecRating:function(){
      if($('.ec-rating').exists()){
        
          $('.ec-rating').each(function(){
                var $this = $(this),
                $target = $this.find('> *'),
                stateClass = $this.data('state-class');

              $target.on('mouseenter', function () {
                $(this).addClass(stateClass);
                $(this).prevAll().addClass(stateClass);
                $(this).nextAll().not('.active').removeClass(stateClass);
              });

              $target.on('mouseleave', function () {
                $target.not('.active').removeClass(stateClass);
              });

              $target.on('click', function () {
                $(this).addClass('active ' + stateClass);
                $(this).prevAll().addClass('active ' + stateClass);
                $(this).nextAll().removeClass('active ' + stateClass);
              });
          });
        
        
      }else{
        return;
      } // End if
      
    }, // End ecRating

  
  /// Scroll to top
  scrollTop: function(){
      var documentOffsetHeight = document.body.offsetHeight;
    
      $(window).on('scroll', function() {
          if ($(this).scrollTop() > 600 ){
              $('.scroll-top').addClass('active');
          } else {
              $('.scroll-top').removeClass('active');
          }
      });
    
      $('.scroll-top').on('click', function() {
          $("html, body").animate({
                  scrollTop: 0
          }, 500);
          return false;
      });
  },
		
  
  offsetTop: function(){
    
    if($('[data-offset-top], [data-offset-top-md], [data-offset-top-lg], [data-offset-top-xl]').exists()){
      // For all device 
        $('[data-offset-top]').each(function(){
          var $this = $(this);
          var offsetVal = $this.data('offset-top');
          $this.css({
            marginTop:offsetVal
          });
        });        
      
      // For md
      if($(window).width() > 768){
        $('[data-offset-top-md]').each(function(){
          var $this = $(this);
          var offsetVal = $this.data('offset-top-md');
          $this.css({
            marginTop:offsetVal
          });
        });    
      }
      
      // For lg
      if($(window).width() > 992){
        $('[data-offset-top-lg]').each(function(){
          var $this = $(this);
          var offsetVal = $this.data('offset-top-lg');
          $this.css({
            marginTop:offsetVal
          });
        });  
       }
      
     // For xl
      if($(window).width() > 1200){
        $('[data-offset-top-xl]').each(function(){
          var $this = $(this);
          var offsetVal = $this.data('offset-top-xl');
          $this.css({
            marginTop:offsetVal
          });
        });    
      } 
      
  } // END if
    
  } // END offsetTop
  
  
  
}; // END ECHOHelper
// ////////////////////////////////////////////////
// init all ECHOHelper
// ///////////////////////////////////////////////
  $(function(){
    ECHOHelper.navOnScrollApperaance();
    ECHOHelper.scrollTo();
    ECHOHelper.mobileNavShow();
    ECHOHelper.searchFormToggle();
    ECHOHelper.hamburger();
    ECHOHelper.inputGroupFocus();
    ECHOHelper.touchSpin();
    ECHOHelper.ecRating();
    ECHOHelper.animatedShare();
    ECHOHelper.offsetTop();
    ECHOHelper.scrollTop();
  });
  
  
  
  
  
  
  
  
// ////////////////////////////////////////////////
//////// Components/ECHOCOMPONENTS master object 
// ///////////////////////////////////////////////  
  var ECHOCOMPONENTS = {
    
    
// ////////////////////////////////////////////////
// typed js
// ///////////////////////////////////////////////
    typedText:function(){
      if($('[data-typed-text]').exists()){
        loadScript($assetsPath + '/typed.js/typed.min.js', function(){
          
            var typedTxt = $('[data-typed-text]').data('typed-text').split(',');
            var typed = new Typed('[data-typed-text]', {
                strings: typedTxt,
                typeSpeed: 80,
                loop:true,
                backSpeed: 80,
                showCursor:false
            });
          
        });
      }
      return;
    },
    
    
// ////////////////////////////////////////////////
// Isotop
// ///////////////////////////////////////////////
    isotop:function(){
      if($('.isotop-filter').exists()){
        loadScript($assetsPath + '/isotope-layout/dist/isotope.pkgd.min.js', function(){
        // Init isotop. default layout mode is masonry
        var isotopEl = $('.isotop-filter');
         isotopEl.imagesLoaded(function(){
           isotopEl.isotope({
              percentPosition: true
           });
         }); 
          
        // Filter isotop
          var filterNav = $('.nav-isotop-filter');
          filterNav.on('click', 'a.nav-link', function(e){
            e.preventDefault();
            var filterVal = $(this).data('filter');
            isotopEl.isotope({
              filter:filterVal,
            });
            filterNav.find('.active').removeClass('active');
            $(this).addClass('active');
          });
          
        });
      }
      return;
    },
    
    
    
// ////////////////////////////////////////////////
// masonry
// ///////////////////////////////////////////////
    masonry:function(){
      if($('.js-masonry').exists()){
        loadScript($assetsPath + '/isotope-layout/dist/isotope.pkgd.min.js', function(){
          
        var isotopEl = $('.js-masonry');
         isotopEl.imagesLoaded(function(){
           isotopEl.masonry({
              // options
              itemSelector: '.masonry-item'
            });
         }); 
          
        });
      }
      return;
    },
    
   
    
    
// ////////////////////////////////////////////////
// Fancybox 
// ///////////////////////////////////////////////
    fancyBox:function(){
      if($('[data-fancybox]').exists()){
        loadScript($assetsPath + '/fancybox-master/dist/jquery.fancybox.min.js', function(){
          $("[data-fancybox]").fancybox({
              animationEffect : "zoom-in-out",
            });
        });
      }
      return;
    },
    
    
    
// ////////////////////////////////////////////////
// owl carousel 
// ///////////////////////////////////////////////
    owlCarousel:function(){
        if($('.owl-carousel').exists()){
        loadScript($assetsPath + '/owl.carousel/dist/owl.carousel.min.js', function(){
        $('.owl-carousel').each(function () {
          var $this = $(this),
              $items = ($this.data('items')) ? $this.data('items') : 3,
              $items_tablet = ($this.data('items-tablet')) ? $this.data('items-tablet') : 2,
              $items_mobile = ($this.data('items-mobile')) ? $this.data('items-mobile') : 1,
              $items_mobile_wide = ($this.data('items-mobile-wide')) ? $this.data('items-mobile-wide') : 2,
              $loop = ($this.data('loop')) ? $this.data('loop') : true,
              $autoplay = ($this.attr('data-autoplay')) ? $this.data('autoplay') : true,
              $autospeed = ($this.data('autospeed')) ? $this.data('autospeed') : 3000,
              $smartspeed = ($this.data('smartspeed')) ? $this.data('smartspeed') : 800,
              $autohgt = ($this.data('autoheight')) ? $this.data('autoheight') : false,
              $space = ($this.data('space')) ? $this.data('space') : 0,
              $dots = ($this.data('dots')) ? $this.data('dots') : false,
              $stageOuterClass = ($this.data('state-outer-class')) ? $this.data('state-outer-class') : null,
              $dotsclass = ($this.data('dots-class')) ? $this.data('dots-class') : false,
              $arrow = ($this.data('arrow')) ? $this.data('arrow') : false;
              $(this).owlCarousel({
                  loop: $loop,
                  items: $items,
                  autoplay: $autoplay,
                  autoplayTimeout:$autospeed,
                  smartSpeed: $smartspeed,
                  margin:$space,
                  dots: $dots,
                  nav: $arrow,
                  dotsClass:'owl-dots'+ ' '+$dotsclass, 
                  stageOuterClass: 'owl-stage-outer'+ ' '+$stageOuterClass, 
                  navText:["<i class='ti-angle-left'></i>","<i class='ti-angle-right'></i>"],
                  autoHeight:$autohgt,
                  responsive:{
                        0:{
                            items:$items_mobile,
                        },
                        576:{
                            items:$items_mobile_wide,
                        },
                        750:{
                            items:$items_tablet,
                        },
                        1170:{
                            items:$items,
                        }
                    }

              }); 
         }); 
       }
      );}  

      return;
    },
    
    
    
// ////////////////////////////////////////////////
// Parallax
// ///////////////////////////////////////////////
  parallax:function(){
    
    if($('.jarallax').exists()){
      
      loadScript($assetsPath+'/jarallax/dist/jarallax.min.js', function(){

           $('.jarallax').jarallax();

      }); // END loadScript
    } // End if
    return;
  },
        
    
    
// ////////////////////////////////////////////////
// wow js animation 
// ///////////////////////////////////////////////
  wow:function(){
    var wowInit = new WOW(
      {
        boxClass:     'wow',      // animated element css class (default is wow)
        animateClass: 'animated', // animation css class (default is animated)
        offset:       10,          // distance to the element when triggering the animation (default is 0)
        mobile:       false,       // trigger animations on mobile devices (default is true)
        live:         true,       // act on asynchronously loaded content (default is true)
      }
    );
    wowInit.init();
  },
    
        
    
// ////////////////////////////////////////////////
// Circles js
// ///////////////////////////////////////////////

  jsCircle:function(){
    if($('.js-circle').exists()){
      loadScript($assetsPath+'/circles-js/circles.min.js', function(){
          var elm = $('.js-circle');
        elm.each(function(i){
          var $this = $(this);
          var id = 'js-circle-' + i;
          $(this).attr('id', id);
          var $radius = ($this.data('radius')) ? $this.data('radius') : 60,
              $value = ($this.data('value')) ? $this.data('value') : 70,
              $borderWidth = ($this.data('border-width')) ? $this.data('border-width') : 6,
              $textSuffix = ($this.data('text-suffix')) ? $this.data('text-suffix') : null,
              $textSize = ($this.data('text-size')) ? $this.data('text-size') : 60,
              $textColor = ($this.data('text-color')) ? $this.data('text-color') : 'inherit',
              $maxValue = ($this.data('maxValue')) ? $this.data('maxValue') : 100;
              Circles.create({
              id:                  id,
              radius:              $radius,
              value:               $value,
              maxValue:            $maxValue,
              width:               $borderWidth,
              text:                function(value){return value + (($textSuffix) ? $textSuffix : null);},
              colors:              [$this.data('border-color') || '#eee', $this.data('border-fg-color') || '#000']
            });
          
          // set font size 
          $this.find('.circles-text').css({
            fontSize: $this.data('text-size'),
            color: $this.data('text-color')
          });

          
          
        });
        
    }); // END loadScript
    } // End if
    return;
  },
    
        
  
// ////////////////////////////////////////////////
// Chosen js/ select 
// ///////////////////////////////////////////////
  chosenSelect:function(){
    if($('.ec-select').exists()){
      loadScript($assetsPath+'/chosen/chosen.jquery.min.js', function(){
               $('.ec-select1').chosen({
                 width:"100%"
               });
        $('.ec-select').each(function () {
          var $this = $(this),
              $disable_search = ($this.data('disable-search')) ? $this.data('disable-search') : false,
              $disable_search_threshold = ($this.data('disable-search-threshold')) ? $this.data('disable-search-threshold') : 6,
              $max_selected_options = ($this.data('max-selected-options')) ? $this.data('max-selected-options') : "Infinity",
              $select_width = ($this.data('select-width')) ? $this.data('select-width') : "100%",
              $group_search = ($this.data('group-search')) ? $this.data('group-search') : false,
              $select_btn_class = ($this.data('btn-classes')) ? $this.data('btn-classes') : null,
              $select_placeholder = ($this.data('placeholder-text')) ? $this.data('placeholder-text') : 'Select an Option',
              $select_rtl = ($this.data('rtl')) ? $this.data('rtl') : false;
          
              $this.on('chosen:ready', function(){
                $this.siblings('.chosen-container').find('.chosen-single').addClass($select_btn_class);
              });
          
             $this.chosen({
                disable_search:$disable_search,
                disable_search_threshold:$disable_search_threshold,
                max_selected_options:$max_selected_options,
                width:$select_width,
               placeholder_text_single:$select_placeholder,
                group_search:$group_search,
                rtl:$select_rtl,
                inherit_select_classes:true
            });
        });
    }); // END loadScript
    } // End if
    return;
  },

    
    
// ////////////////////////////////////////////////
// Google map 
// ///////////////////////////////////////////////
  googleMap:function(){
    
    //Check if map DOM element exit 
    if($('.google-map').exists()){
      
      // Fatch HTML DOM element
      var elm = $('.google-map');
      
      // Fatch Map key 
      var mapKey = elm.data('key');  
      
      // check if the map has a valid key 
      if(mapKey){
        
        // if has valid key load google api
        loadScript('https://maps.googleapis.com/maps/api/js?key='+mapKey, function(){
          
            elm.each(function(index, DOMelm){
            var $this = $(this);

              // fatch map options               
            var address = $this.data('address'),
                zoom = ($this.data('zoom')) ? $this.data('zoom') : 8,
                mapTypeId = ($this.data('map-type')) ? $this.data('map-type') : "roadmap",
                styleJSON= ($this.data('style')) ? $this.data('style') : "assets/data/map-style.json",
                iconPath = ($this.data('marker')) ? $this.data('marker') : 'assets/img/map-marker.png';

              // default options
             var mapOptions = {
                    zoom: zoom,
                    mapTypeId: mapTypeId
                  };

              // Geocode conversion and Init the map
              var geocoder = new google.maps.Geocoder();
              geocoder.geocode({'address': address}, function(results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    mapOptions.center = results[0].geometry.location;
                    var map = new google.maps.Map(DOMelm, mapOptions);

                  // styling the map 
                    $.getJSON( styleJSON, function( data ) {
                      map.setOptions({
                          styles: data
                      });
                    });

                  // map marker
                    var marker = new google.maps.Marker({
                        map: map,
                        position: results[0].geometry.location,
                        icon:iconPath
                    });

                  // info window 
                    var infowindow = new google.maps.InfoWindow({'content': address});
                  // Show info window by default
                    /*google.maps.event.addListener(map, 'tilesloaded', function(event) {
                        infowindow.open(map, marker);
                    });*/

                    google.maps.event.addListener(marker, 'click', function() {
                        infowindow.open(map, marker);
                    });              
                } else {
                    alert('The address could not be found for the following reason: ' + status);
                }
              }); // END geocoder

            }); // End each

        }); // END loadScript  
      }else {
        $(elm).text('Please provide a valid key');
      } // END if key check 
    

    }else{
      return;
    } // END Check is map element exit 
  },


    
// ////////////////////////////////////////////////
// dateTimePicker 
// ///////////////////////////////////////////////
  dateTimePicker:function(){
    if($('[data-toggle="datetimepicker"]').exists()){
      loadScript($assetsPath+'/moment/moment.min.js', function(){        
        loadScript($assetsPath+'/tempus-dominus-datetimepicker/js/tempusdominus-bootstrap-4.min.js', function(){
          // Date time both 
            $('#ec-datetimepicker').datetimepicker({
              icons: {
                  time: 'far fa-clock',
                  date: 'ti-calendar',
                  up: 'ti-angle-up',
                  down: 'ti-angle-down',
                  previous: 'ti-angle-left',
                  next: 'ti-angle-right',
                  today: 'far fa-calendar-check-o',
                  clear: 'far fa-trash',
                  close: 'ti-home'
                }
            });              
          // Only date
            $('#ec-datepicker').datetimepicker({
              format: 'L',
              icons: {
                  time: 'far fa-clock',
                  date: 'ti-calendar',
                  up: 'ti-angle-up',
                  down: 'ti-angle-down',
                  previous: 'ti-angle-left',
                  next: 'ti-angle-right',
                  today: 'far fa-calendar-check-o',
                  clear: 'far fa-trash',
                  close: 'ti-close'
                }
            });
          
          // Only time
            $('#ec-timepicker').datetimepicker({
              format: 'LT',
              icons: {
                  time: 'far fa-clock',
                  date: 'ti-calendar',
                  up: 'ti-angle-up',
                  down: 'ti-angle-down',
                  previous: 'ti-angle-left',
                  next: 'ti-angle-right',
                  today: 'far fa-calendar-check-o',
                  clear: 'far fa-trash',
                  close: 'ti-close'
                }
            });
          
          // Date time side by side 
            $('#ec-datetimepicker-sbs').datetimepicker({
               sideBySide: true,
              icons: {
                  time: 'far fa-clock',
                  date: 'ti-calendar',
                  up: 'ti-angle-up',
                  down: 'ti-angle-down',
                  previous: 'ti-angle-left',
                  next: 'ti-angle-right',
                  today: 'far fa-calendar-check-o',
                  clear: 'far fa-trash',
                  close: 'ti-close'
                }
            });
          
      }); // END loadScript
      
        
      });
    }else {
      return;
    } // End if

  },

    
    
// ////////////////////////////////////////////////
// noUiSlider slider
// ///////////////////////////////////////////////
  noUiSliderInit:function(){

    
    if($('.ec-range-slider').exists()){

      loadScript('assets/vendor/nouislider/distribute/nouislider.min.js', function(){


            var noUiSliders = {

              noUiSliders_1:function(){      
              var rangeSlide1 = document.getElementById('rangeSlide1');

              noUiSlider.create(rangeSlide1, {
                  start:[50, 380],
                  connect: true,
                  tooltips: true,
                  range: {
                      'min': 0,
                      'max': 500
                  }
              });

          
        // Update low and high value 
        var sliderInput0 = document.getElementById('noUiSliders_1_input');
        var sliderInput1 = document.getElementById('noUiSliders_1_1_input');
        var sliderInputs = [sliderInput0, sliderInput1];        

        rangeSlide1.noUiSlider.on('update', function( values, handle ) {
            sliderInputs[handle].value = values[handle];
        });
    
        }
      };
        
      
      noUiSliders.noUiSliders_1();

      
        var rangeSlide2 = document.getElementById('rangeSlide2');

        noUiSlider.create(rangeSlide2, {
            start:[70],
            connect: [true, false],
            tooltips: true,
            range: {
                'min': 0,
                'max': 500
            }
        });
      
    }); // END loadScript
      
    } // END if
  }, // END noUiSliderInit

    
    
// ////////////////////////////////////////////////
// countDown
// ///////////////////////////////////////////////
countDown: function(){
    if($('[data-countdown]').exists()){
        loadScript($assetsPath+'/jquery.countdown/dist/jquery.countdown.min.js', function(){
            $('[data-countdown]').each(function() {
            var $this = $(this), finalDate = $(this).data('countdown');
            $this.countdown(finalDate, function(event) {
                if($this.find('.countdown-days').length > 0){ 
                    $this.find('.countdown-days').text(event.strftime('%D'));
                }
                if($this.find('.countdown-hours').length > 0){ 
                    $this.find('.countdown-hours').text(event.strftime('%H'));
                }
                if($this.find('.countdown-minutes').length > 0){ 
                    $this.find('.countdown-minutes').text(event.strftime('%M'));
                }
                if($this.find('.countdown-seconds').length > 0){ 
                    $this.find('.countdown-seconds').text(event.strftime('%S'));
                }
            });
        });
      }); // END loadScript
    } // End if

}, // END countDown


// ////////////////////////////////////////////////
// counterUp
// ///////////////////////////////////////////////
  counterUp:function(){
    if($('.ec-counter').exists()){
      var $elm = $('.ec-counter');
      loadScript($assetsPath+'/countTo/countTo.min.js', function(){
       loadScript($assetsPath+'/appear-master/dist/appear.min.js', function(){
        appear({
          elements: function elements(){
            return $elm;
          },
          appear: function appear(el){
            $(el).countTo();
          },
    
        });
        
      }); // END loadScript
    }); // END loadScript
  } // End if
    
    
    
  },

    
    
  }; // END ECHOCOMPONENTS obj  
  
  
  
  
// ////////////////////////////////////////////////
// init all ECHOCOMPONENTS
// ///////////////////////////////////////////////
  $(document).ready(function(){
      ECHOCOMPONENTS.typedText();
      ECHOCOMPONENTS.isotop();
      ECHOCOMPONENTS.masonry();
      ECHOCOMPONENTS.owlCarousel();
      ECHOCOMPONENTS.noUiSliderInit();
      ECHOCOMPONENTS.chosenSelect();
      ECHOCOMPONENTS.fancyBox();
      ECHOCOMPONENTS.dateTimePicker();
      ECHOCOMPONENTS.parallax();
      ECHOCOMPONENTS.countDown();
      ECHOCOMPONENTS.wow();
      ECHOCOMPONENTS.counterUp();
      ECHOCOMPONENTS.googleMap();
      ECHOCOMPONENTS.jsCircle();
  });

  


  
    $('[data-offset-top]').each(function(){
      var $this = $(this);
      var offsetVal = $this.data('offset-top');
      $this.css({
        marginTop:offsetVal
      });
    });        

  
  
// ////////////////////////////////////////////////
// Init bootstrap tooltip and popover
// ///////////////////////////////////////////////  
  $('[data-toggle="tooltip"]').each(function(){
    var $this = $(this);
      var skin_color = $this.data('skin');
      $this.tooltip({
        template:'<div class="tooltip'+" "+ ((skin_color)? 'tooltip-'+skin_color:" ") +'"' +' role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
      });
  });
  
  $('[data-toggle="tooltip"]').on('click', function(){
    $('[data-toggle="tooltip"]').not(this).tooltip('hide');
  });
  
  $('[data-toggle="popover"]').each(function(){
    var $this = $(this);
      var skin_color = $this.data('skin');
      $this.popover({
        template:'<div class="popover'+" "+ ((skin_color)? 'popover-'+skin_color:" ") +'"' +'role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>',
      });
  });

  $('[data-toggle="popover"]').on('click', function(){
    $('[data-toggle="popover"]').not(this).popover('hide');
  });
  

}(jQuery));

