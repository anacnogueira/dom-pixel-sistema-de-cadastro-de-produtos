if (
    $("input.currency").val() != undefined ||
    $("input.currency").val() != null
) {
    $("input.currency").priceFormat({
        prefix: "",
        centsSeparator: ",",
        thousandsSeparator: ".",
        limit: $(this).attr("maxlength"),
        centsLimit: 2,
    });
}
