// Can also be used with $(document).ready()
jQuery(window).load(function() {
    jQuery('.flexslider').flexslider({
        animation: "slide",
        // allowing the phone user to swipe
        touch: true,
        //hiding arrows on mobile device
        directionNav: false,
    });
});