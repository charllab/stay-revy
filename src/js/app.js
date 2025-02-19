jQuery(function () {

    //smooth scroll on property search results
    if (window.location.href.startsWith('https://stayrevy.com/vacation-rentals?g=')) {
        $('html, body').animate({
            scrollTop: 400 // Scroll 200px down
        }, 1000); // Duration of the animation in milliseconds (1000ms = 1s)
    }

    // Add active class to parent menu item for desktop menu
    jQuery('.dropdown-menu .menu-item.active').parents('.menu-item').addClass('active');

    // BIG Slide
    var menuLink = jQuery('.menu-link').bigSlide({
        side: 'right',
        menuWidth: '16rem',
        easyClose: true,
        afterOpen: function () {
            jQuery('body').toggleClass('no-scroll');
        },
        afterClose: function () {
            jQuery('body').toggleClass('no-scroll');
        }
    });

    // Lightbox gallery
    jQuery('.js-gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        gallery: {
            enabled: true
        }
    });

    // owl carousel
    jQuery('#testimonial-slide').owlCarousel({
        loop: true,
        margin: 0,
        autoplay: true,
        autoplaySpeed: 1500,
        autoplayTimeout: 9000,
        items: 1,
        dots: true
    });

    // owl carousel
    jQuery('.our-properties--slider').owlCarousel({
        loop: true,
        margin: 0,
        autoplay: true,
        autoplaySpeed: 1500,
        autoplayTimeout: 9000,
        items: 1,
        nav: true,
        dots: true,
        mouseDrag: false
    });

    // Hero Carousel
    var owlhero = jQuery('#hero-slide').owlCarousel({
        loop: false,
        margin: 0,
        responsiveClass: true,
        dots: true,
        nav: false,
        autoplaySpeed: 1500,
        autoplayTimeout: 9000,
        autoplay: false,
        items: 1,
        navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        responsive: {
            1638: {
                dots: false,
                nav: true,
            }
        },
        onDragged: sliderCallback,
    });

    // Hero Carousel slider drag resets
    function sliderCallback(event) {
        owlhero.trigger('stop.owl.autoplay');
        owlhero.trigger('play.owl.autoplay');
    };

    // Remove WP Block element iframe classes
    if (jQuery('.wp-block-embed-youtube').length) {
        jQuery('.wp-block-embed-youtube').removeClass().addClass('embed-responsive-item');
    }

    // Scrolling anchors
    jQuery('.scrollable-anchor').on('click', function (e) {
        e.preventDefault();

        jQuery('html,body').animate({
            scrollTop: jQuery(this.hash).offset().top
        }, 1000);
    });

    // date picker
    if (jQuery('.datePickW input').length) {
        jQuery('.datePickW input').daterangepicker({
            startDate: moment(),
            endDate: moment().add(1, 'days')
        });
    }

    jQuery('#checkInForm').on('submit', function (e) {
        e.preventDefault();

        var data = jQuery(this).serialize(),
            inputVal = jQuery('#checkInAndOut').val(),
            inputVals = inputVal.split(' - ');

        location.href = "https://stayrevy.kigobook.com/properties/?" + "checkin=" + moment(inputVals[0]).format('YYYY-MM-DD') + "&checkout=" + moment(inputVals[1]).format('YYYY-MM-DD') + '&' + data;


    });

    //count the guest
    var inputs = $('input[name="adults"],input[name="children"]'),
        output = $('input[name="guests"]');
    function parse(value) {
        return parseFloat(value.replace(',', '.'));
    }
    inputs.keyup(function () {
        var value = parse(inputs[0].value) + parse(inputs[1].value);
        if (!isNaN(value)) {
            output.val(value)
        }
    });

    jQuery(".js-num-increment > div").append('<div class="btn btn-primary js-inc js-button-increment px-50 border-0">+</div>');
    jQuery(".js-num-increment > div").prepend('<div class="btn btn-primary js-dec js-button-increment px-50 border-0">−</div>');

    jQuery(".js-button-increment").on("click", function () {

        var $button = jQuery(this);
        var oldValue = $button.parent().find("input").val().replace('+', '');

        if ($button.text() == "+") {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }

        $button.parent().find("input").val(newVal + '+');
    });

    jQuery('.js-update-search').on('click', function (e) {
        e.preventDefault();

        var currentUrl = [location.protocol, '//', location.host, location.pathname].join('');

        location.href = currentUrl + '?' + jQuery('.js-search-form').serialize();
    });

    // ie11 object-fit fallback
    if (!Modernizr.objectfit || !Modernizr.smil) {
        $('.js-img-obj-fit__container').each(function () {
            var $container = $(this),
                imgUrl = $container.find('img').prop('src');
            if (imgUrl) {
                $container
                    .css('backgroundImage', 'url(' + imgUrl + ')')
                    .addClass('compat-object-fit');
            }
        });
    }

    // GA RevelstokeHouse Book Now Button Tracking
    jQuery('a[href="https://stayrevy.kigobook.com/properties/revelstoke-house-luxurious-log-home"]').on('click', function () {
        trackEvent('Click', {
            category: 'RevelstokeHouse',
            label: window.location.href,
            value: 3000
        });
    });

    // GA RevedUpOut Book Now Button Tracking
    jQuery('a[href="https://stayrevy.kigobook.com/properties/reved-up-&-out-tasteful-2-bedroom-condo-close-to-resort-with-hot-tub"]').on('click', function () {
        trackEvent('Click', {
            category: 'RevedUpOut',
            label: window.location.href,
            value: 3000
        });
    });

    // GA RevyPow Book Now Button Tracking
    jQuery('a[href="https://stayrevy.kigobook.com/properties/revy-pow-pad-3-bedroom-condo-minutes-from-revelstoke-mountain-resort"]').on('click', function () {
        trackEvent('Click', {
            category: 'RevyPow',
            label: window.location.href,
            value: 3000
        });
    });

    // GA BegbieView Book Now Button Tracking
    jQuery('a[href="https://stayrevy.kigobook.com/properties/begbie-views-retreat;-breathtaking-scenery-and-luxury-property"]').on('click', function () {
        trackEvent('Click', {
            category: 'BegbieView',
            label: window.location.href,
            value: 3000
        });
    });



});

var trackEvent = function (name, options) {
    trackGA(name, options);
    trackPixel(name, options);
};

var trackGA = function (name, options) {
    if (typeof gtag !== 'undefined') {
        gtag('event', name, {
            'event_category': options.category,
            'event_label': options.label,
            'value': options.value || 0
        });
    }
};

var trackPixel = function (name, options) {
    if (typeof gtag !== 'undefined') {
        fbq('track', 'Lead', {
            'event_category': options.category,
            'event_action': name,
            'value': options.value || 0,
            'currency': 'CAD'
        });
    }
};

var targetBlankExternalLinks = function () {
    var internalLinkRegex = new RegExp('^((((http:\\/\\/|https:\\/\\/)(www\\.)?)?'
        + window.location.hostname
        + ')|(localhost:\\d{4})|(\\/.*))(\\/.*)?$', '');

    jQuery('a').filter(function () {
        var href = jQuery(this).attr('href');
        return !internalLinkRegex.test(href);
    })
        .each(function () {
            jQuery(this).attr('target', '_blank');
        });
};
