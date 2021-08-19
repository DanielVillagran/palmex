$(".head").load("../components/head.html");
new WOW().init();

$(document).ready(function ($) {
    $("#modalHome").modal();
});
$("#to_eng").click(function(){
    window.location.href='categorias-palmex.php?language=eng';
})
$("#to_esp").click(function(){
    window.location.href='categorias-palmex.php';
})
/*$(".btn-idioma").on("click", function () {
    var textBtn = $(".btn-idioma > span").text();
    if (textBtn == "Change Language") {
        $(this).html("<img src='images/icons/mexico.svg'><span>Cambiar Idioma</span>");
    } else {
        $(this).html("<img src='images/icons/estados-unidos.svg'><span>Change Language</span>");
    }

});
*/