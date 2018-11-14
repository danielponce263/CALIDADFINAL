$(document).ready(function () {
    $('.secciones article').hide();
    $('.secciones article:first').show();

    $('#nav div a').click(function () {
        $('.secciones article').hide();

        var activeTab=$(this).attr('href');
        $(activeTab).show();
        return false;
    });

});
