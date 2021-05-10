$(document).ready(function () {
    $(".card-class span").click(function() {
        $(this).parents('.card').find('.table').removeClass('table-default table-active table-danger table-warning table-light table-primary table-success table-secondary table-info table-dark')
            .addClass($(this).data("color"));
    });
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();

    });
});
