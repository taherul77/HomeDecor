(function(a){function g(){if(a(".preloader").length){a(".preloader").delay(200).fadeOut(500)}}function h(){if(a(".main-header").length){var m=a(window).scrollTop();var k=a(".main-header");var l=a(".main-header .sticky-header, .header-style-two .outer-container, .header-style-four .header-lower");var j=a(".scroll-to-top");if(m>55){k.addClass("fixed-header");l.addClass("animated slideInDown");j.fadeIn(300)}else{k.removeClass("fixed-header");l.removeClass("animated slideInDown");j.fadeOut(300)}}}h();if(a(".main-header li.dropdown ul").length){a(".main-header li.dropdown").append('<div class="dropdown-btn"><span class="fa fa-angle-down"></span></div>');a(".main-header li.dropdown .dropdown-btn").on("click",function(){a(this).prev("ul").slideToggle(500)});a(".main-header .main-menu li.dropdown .dropdown-btn").on("click",function(){a(this).prev(".mega-menu").slideToggle(500)});a(".main-header .navigation li.dropdown > a,.hidden-bar .side-menu li.dropdown > a").on("click",function(j){j.preventDefault()})}if(a(".sidenav-bar, .hidden-bar").length){a(".sidenav-bar .navigation li.dropdown > a").on("click",function(j){j.preventDefault();var k=a(this).parent("li");if(a(k).hasClass("active")===true){a(k).removeClass("active")}else{a(".sidenav-bar .navigation li.dropdown").removeClass("active");a(this).parent("li").addClass("active")}});a(".sidenav-bar .side-nav .navigation li.dropdown > ul").slideUp();a(".sidenav-bar .side-nav .navigation li.dropdown > a").on("click",function(){a(this).next("ul").slideToggle(400);a(this).parent().siblings().find("ul").slideUp(400)});a(".main-header .nav-toggler").on("click",function(j){j.preventDefault();a("body").toggleClass("active-side-nav")});a(".sidenav-bar .cross-icon, .hidden-bar .cross-icon, .form-back-drop").on("click",function(j){j.preventDefault();a("body").removeClass("active-side-nav")})}if(a(".banner-carousel").length){a(".banner-carousel").owlCarousel({animateOut:"fadeOut",animateIn:"fadeIn",loop:true,margin:0,nav:true,smartSpeed:700,autoHeight:true,autoplay:true,autoplayTimeout:10000,navText:['<span class="fa fa-long-arrow-left"></span> prev','next<span class="fa fa-long-arrow-right"></span>'],responsive:{0:{items:1},600:{items:1},1024:{items:1},}})}if(a(".banner-carousel-two").length){a(".banner-carousel-two").owlCarousel({animateOut:"fadeOut",animateIn:"fadeIn",loop:true,margin:30,nav:true,smartSpeed:15000,mouseDrag:false,touchDrag:false,autoHeight:true,autoplay:true,autoplayTimeout:10000,navText:['<span class="fa fa-long-arrow-left"></span> prev','next<span class="fa fa-long-arrow-right"></span>'],responsive:{0:{items:1},600:{items:1},1024:{items:1},}})}if(a(".single-item-carousel").length){a(".single-item-carousel").owlCarousel({loop:true,margin:0,nav:true,smartSpeed:700,autoplay:true,navText:['<span class="fa fa-angle-left"></span>','<span class="fa fa-angle-right"></span>'],responsive:{0:{items:1},600:{items:1},1024:{items:1}}})}if(a(".services-carousel-two").length){a(".services-carousel-two").owlCarousel({loop:true,margin:30,nav:true,smartSpeed:700,autoplay:true,navText:['<span class="fa fa-angle-left"></span>','<span class="fa fa-angle-right"></span>'],responsive:{0:{items:1},767:{items:2},800:{items:3},1024:{items:4}}})}if(a(".services-carousel").length){a(".services-carousel").owlCarousel({loop:true,margin:0,nav:true,smartSpeed:700,autoplay:true,navText:['<span class="fa fa-angle-left"></span>','<span class="fa fa-angle-right"></span>'],responsive:{0:{items:1},767:{items:2},1024:{items:3}}})}if(a(".testimonial-carousel").length){a(".testimonial-carousel").owlCarousel({loop:true,margin:30,nav:true,smartSpeed:700,autoplay:true,navText:['<span class="fa fa-long-arrow-left"></span>','<span class="fa fa-long-arrow-right"></span>'],responsive:{0:{items:1},600:{items:1},800:{items:1},1024:{items:1}}})}if(a(".testimonial-carousel-two").length){a(".testimonial-carousel-two").owlCarousel({loop:true,margin:70,nav:true,smartSpeed:700,autoplay:true,navText:['<span class="fa fa-long-arrow-left"></span> prev','next<span class="fa fa-long-arrow-right"></span>'],responsive:{0:{items:1},600:{items:1},768:{margin:30,items:2},1024:{items:2}}})}if(a(".projects-carousel").length){a(".projects-carousel").owlCarousel({loop:true,margin:0,nav:true,smartSpeed:700,autoplay:true,navText:['<span class="fa fa-long-arrow-left"></span> prev','next<span class="fa fa-long-arrow-right"></span>'],responsive:{0:{items:1},600:{items:2},800:{items:3},1024:{items:4},1400:{items:5}}})}if(a(".projects-carousel-two").length){a(".projects-carousel-two").owlCarousel({animateOut:"slideOutDown",animateIn:"zoomIn",loop:true,margin:30,nav:true,smartSpeed:15000,mouseDrag:false,touchDrag:false,autoHeight:true,autoplay:true,autoplayTimeout:10000,navText:['<span class="fa fa-chevron-left"></span>','<span class="fa fa-chevron-right"></span>'],responsive:{0:{items:1},600:{items:1},1024:{items:1}}})}if(a(".sponsors-carousel").length){a(".sponsors-carousel").owlCarousel({loop:true,margin:30,nav:true,smartSpeed:700,autoplay:true,responsive:{0:{items:1},600:{items:2},768:{items:3},1024:{items:4},1400:{items:5},}})}if(a(".products-carousel").length){a(".products-carousel").owlCarousel({loop:true,margin:0,nav:true,center:true,smartSpeed:700,autoplay:true,navText:['<span class="fa fa-long-arrow-left"></span> prev','next<span class="fa fa-long-arrow-right"></span>'],responsive:{0:{items:1},600:{items:2},1024:{items:3}}})}if(a(".specialize-section-two .image-carousel").length&&a(".specialize-section-two .thumbs-carousel").length){var b=a(".specialize-section-two .image-carousel"),c=a(".specialize-section-two .thumbs-carousel"),e=false,d=500;b.owlCarousel({loop:false,items:1,margin:0,nav:false,navText:['<span class="icon fa fa-angle-left"></span>','<span class="icon fa fa-angle-right"></span>'],dots:false,autoplay:true,autoplayTimeout:5000}).on("changed.owl.carousel",function(j){if(!e){e=false;c.trigger("to.owl.carousel",[j.item.index,d,true]);e=false}});c.owlCarousel({loop:false,margin:20,items:1,nav:true,navText:['<span class="fa fa-long-arrow-left"></span> prev','next<span class="fa fa-long-arrow-right"></span>'],dots:false,center:false,autoplay:true,mouseDrag:true,touchDrag:true,autoplayTimeout:5000,responsive:{0:{items:2,autoWidth:false},400:{items:2,autoWidth:false},600:{items:3,autoWidth:false},800:{items:4,autoWidth:false},1024:{items:4,autoWidth:false}},}).on("click",".owl-item",function(){b.trigger("to.owl.carousel",[a(this).index(),d,true])}).on("changed.owl.carousel",function(j){if(!e){e=true;b.trigger("to.owl.carousel",[j.item.index,d,true]);e=false}})}if(a(".filter-list").length){a(".filter-list").mixItUp({})}if(a(".count-box").length){a(".count-box").appear(function(){var j=a(this),k=j.find(".count-text").attr("data-stop"),l=parseInt(j.find(".count-text").attr("data-speed"),10);if(!j.hasClass("counted")){j.addClass("counted");a({countNum:j.find(".count-text").text()}).animate({countNum:k},{duration:l,easing:"linear",step:function(){j.find(".count-text").text(Math.floor(this.countNum))},complete:function(){j.find(".count-text").text(this.countNum)}})}},{accY:0})}if(a(".accordion-box").length){a(".accordion-box").on("click",".acc-btn",function(){var j=a(this).parents(".accordion-box");var k=a(this).parents(".accordion");if(a(this).hasClass("active")!==true){a(j).find(".accordion .acc-btn").removeClass("active ")}if(a(this).next(".acc-content").is(":visible")){return false}else{a(this).addClass("active");a(j).children(".accordion").removeClass("active-block animated fadeInUp");a(j).find(".accordion").children(".acc-content").slideUp(300);k.addClass("active-block animated fadeInUp");a(this).next(".acc-content").slideDown(300)}})}if(a(".tabs-box").length){a(".tabs-box .tab-buttons .tab-btn").on("click",function(j){j.preventDefault();var k=a(a(this).attr("data-tab"));if(a(k).is(":visible")){return false}else{k.parents(".tabs-box").find(".tab-buttons").find(".tab-btn").removeClass("active-btn");a(this).addClass("active-btn");k.parents(".tabs-box").find(".tabs-content").find(".tab").fadeOut(0);k.parents(".tabs-box").find(".tabs-content").find(".tab").removeClass("active-tab animated fadeIn");a(k).fadeIn(300);a(k).addClass("active-tab animated fadeIn")}})}if(a(".time-countdown").length){a(".time-countdown").each(function(){var j=a(this),k=a(this).data("countdown");j.countdown(k,function(m){var l=a(this).html(m.strftime('<div class="counter-column"><span class="count">%D</span>Days</div> <div class="counter-column"><span class="count">%H</span>Hours</div>  <div class="counter-column"><span class="count">%M</span>Mints</div>  <div class="counter-column"><span class="count">%S</span>Sec</div>'))})})}if(a(".lightbox-image").length){a(".lightbox-image").fancybox({openEffect:"fade",closeEffect:"fade",helpers:{media:{}}})}if(a("#contact-form").length){a("#contact-form").validate({rules:{username:{required:true},email:{required:true,email:true},phone:{required:true,},message:{required:true}}})}function f(){a(".full-screen").css("height",a(window).height())}f();if(a(".sidenav-bar").length){a(".sidenav-bar").mCustomScrollbar({theme:"dark"})}if(a(".price-range-slider").length){a(".price-range-slider").slider({range:true,min:0,max:90,values:[8,85],slide:function(j,k){a("input.property-amount").val(k.values[0]+" - "+k.values[1])}});a("input.property-amount").val(a(".price-range-slider").slider("values",0)+" - $"+a(".price-range-slider").slider("values",1))}if(a(".quantity-spinner").length){a("input.quantity-spinner").TouchSpin({verticalbuttons:true})}if(a(".scroll-to-target").length){a(".scroll-to-target").on("click",function(){var j=a(this).attr("data-target");a("html, body").animate({scrollTop:a(j).offset().top},1500)})}if(a(".wow").length){var i=new WOW({boxClass:"wow",animateClass:"animated",offset:0,mobile:false,live:true});i.init()}a(window).on("resize",function(){f()});a(window).on("scroll",function(){h();f()});a(window).on("load",function(){g()})})(window.jQuery);