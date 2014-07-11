// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

var $dropdown;
var $login;
var $breadcrumbs;

$(function(){
    // Init tooltips
    $('[data-toogle="tooltip"]').tooltip();
    $('[data-toogle="tooltip"]').on('click', function() {
        $(this).tooltip('hide');
    });

    // menu dropdown toggle
    $(".dropdown-toggle").click(function (e) {
        e.stopPropagation();
        
        $dropdown = $(this).parent();
        $dropdown = $dropdown.find("> ul");
        
        $dropdown.toggleClass("is-active-nav");
        
        if ($dropdown.hasClass("is-active-nav")) {
            $dropdown.slideDown("fast");
        } else {
            $dropdown.slideUp("fast");
        }

        $('<div class="dropdown-backdrop"/>').insertAfter($dropdown).click(function () {
            if ($dropdown.hasClass("is-active-nav")) {
                $dropdown.removeClass("is-active-nav");
            }
            $('.dropdown-backdrop').remove();
        });
    });

    // sidebar menu dropdown toggle
    $(".sidenav-dropdown-toggle").click(function (e) {
        e.stopPropagation();
        
        var $sidenav = $(this).parent();
        
        $sidenav.toggleClass("is-active-sidenav-dropdown");
        
        if ($sidenav.hasClass("is-active-sidenav-dropdown")) {
            $sidenav.find(".sidenav-menu-sub").slideDown("fast");
        } else {
            $sidenav.find(".sidenav-menu-sub").slideUp("fast");
        }
    });

    // Login section toggle
    $(".login-toggle").click(function (e) {
        e.stopPropagation();

        $login = $(".login");

        $login.toggleClass("is-active-login");

         if ($login.hasClass("is-active-login")) {
            $(".login-wrap").slideDown("fast");
        } else {
            $(".login-wrap").slideUp("fast");
        }
    });

    // mobile side-menu slide toggler
    var $menu = $(".sidenav");
    
    $menu.click(function(e) {
        e.stopPropagation();
    });
    
    $(".sidenav-toggle").click(function (e) {
        e.stopPropagation();
        $("body").toggleClass("is-active-sidenav");
    });

    // mobile breadcrumbs sliding menu
    $(".breadcrumbs-toggle").click(function (e) {
        e.stopPropagation();
        
        $breadcrumbs = $(".breadcrumbs-crumbs");
        
        $breadcrumbs.toggleClass("is-active-breadcrumbs");

        if ($breadcrumbs.hasClass("is-active-breadcrumbs")) {
            $breadcrumbs.slideDown("fast");
        } else {
            $breadcrumbs.slideUp("fast");
        }
    });

    $(window).resize(function() {
        if ($(this).width() > 769) {
            $breadcrumbs.css('display', '');
        }
    });

    // catch all
    $("body").click(function () {
        if ($(this).hasClass("is-active-sidenav")) {
            $(this).removeClass("is-active-sidenav");
        }
        
        if ($breadcrumbs.hasClass("is-active-breadcrumbs")) {
            $breadcrumbs.removeClass("is-active-breadcrumbs");
        }
    });
});