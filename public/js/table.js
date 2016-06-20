$(function() {
    $("#tableId input[type=checkbox]").on("change", function(e) {
        var id = $(this).parent().index()+1,
            col = $("table tr th:nth-child("+id+"), table tr td:nth-child("+id+")");
        $(this).is(":checked") ? col.show() : col.hide();
    }).prop("checked", true).change();

    $("#button").on("click", function(e) {
        $("input[type=checkbox]").prop("checked", true).change();
    });
})
