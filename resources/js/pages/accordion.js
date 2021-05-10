$(document).ready(function () {
$(".card-collapse").on('show.bs.collapse', function () {
    $(this).prev("div").find("i").removeClass("im-icon-Arrow-Up2").addClass("im-icon-Arrow-Down2");
});
$(".card-collapse").on('hide.bs.collapse', function () {
    $(this).prev("div").find("i").removeClass("im-icon-Arrow-Down2").addClass("im-icon-Arrow-Up2");
});
$(".card-collapse-acc").on('show.bs.collapse', function () {
    $(this).prev("div").find("i").removeClass("im-icon-Add").addClass("im-icon-Close-Window");
});
$(".card-collapse-acc").on('hide.bs.collapse', function () {
    $(this).prev("div").find("i").removeClass("im-icon-Close-Window").addClass("im-icon-Add");
});
})
