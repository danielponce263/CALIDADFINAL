
$(document).ready(function() {
    $("li.submenu ul").hide();
    $("li.submenu").click(function() {
        $(this).children("li.submenu ul").slideToggle(400);
    });

    $("ul").click(function (p) {
        p.stopPropagation();
    });

});


