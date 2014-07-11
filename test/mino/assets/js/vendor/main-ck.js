(function() {
    var e, t = function() {}, n = [ "assert", "clear", "count", "debug", "dir", "dirxml", "error", "exception", "group", "groupCollapsed", "groupEnd", "info", "log", "markTimeline", "profile", "profileEnd", "table", "time", "timeEnd", "timeStamp", "trace", "warn" ], r = n.length, i = window.console = window.console || {};
    while (r--) {
        e = n[r];
        i[e] || (i[e] = t);
    }
})();

var $dropdown, $login, $breadcrumbs;

$(function() {
    $('[data-toogle="tooltip"]').tooltip();
    $('[data-toogle="tooltip"]').on("click", function() {
        $(this).tooltip("hide");
    });
    $(".dropdown-toggle").click(function(e) {
        e.stopPropagation();
        $dropdown = $(this).parent();
        $dropdown = $dropdown.find("> ul");
        $dropdown.toggleClass("is-active-nav");
        $dropdown.hasClass("is-active-nav") ? $dropdown.slideDown("fast") : $dropdown.slideUp("fast");
        $('<div class="dropdown-backdrop"/>').insertAfter($dropdown).click(function() {
            $dropdown.hasClass("is-active-nav") && $dropdown.removeClass("is-active-nav");
            $(".dropdown-backdrop").remove();
        });
    });
    $(".sidenav-dropdown-toggle").click(function(e) {
        e.stopPropagation();
        var t = $(this).parent();
        t.toggleClass("is-active-sidenav-dropdown");
        t.hasClass("is-active-sidenav-dropdown") ? t.find(".sidenav-menu-sub").slideDown("fast") : t.find(".sidenav-menu-sub").slideUp("fast");
    });
    $(".login-toggle").click(function(e) {
        e.stopPropagation();
        $login = $(".login");
        $login.toggleClass("is-active-login");
        $login.hasClass("is-active-login") ? $(".login-wrap").slideDown("fast") : $(".login-wrap").slideUp("fast");
    });
    var e = $(".sidenav");
    e.click(function(e) {
        e.stopPropagation();
    });
    $(".sidenav-toggle").click(function(e) {
        e.stopPropagation();
        $("body").toggleClass("is-active-sidenav");
    });
    $(".breadcrumbs-toggle").click(function(e) {
        e.stopPropagation();
        $breadcrumbs = $(".breadcrumbs-crumbs");
        $breadcrumbs.toggleClass("is-active-breadcrumbs");
        $breadcrumbs.hasClass("is-active-breadcrumbs") ? $breadcrumbs.slideDown("fast") : $breadcrumbs.slideUp("fast");
    });
    $(window).resize(function() {
        $(this).width() > 769 && $breadcrumbs.css("display", "");
    });
    $("body").click(function() {
        $(this).hasClass("is-active-sidenav") && $(this).removeClass("is-active-sidenav");
        $breadcrumbs.hasClass("is-active-breadcrumbs") && $breadcrumbs.removeClass("is-active-breadcrumbs");
    });
});