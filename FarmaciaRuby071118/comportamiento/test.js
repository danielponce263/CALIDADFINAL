$(document).ready(function() {
    $("#na div.submenu ul").hide();
    $("#nav div.submenu").click(function() {
        $(this).children("ul").slideToggle(150);
    });

    $("ul").click(function (p) {
        p.stopPropagation();
    });

});