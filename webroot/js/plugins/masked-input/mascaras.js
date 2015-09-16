$(document).ready(function () {
    $(':input.cpf_cnpj').change(function () {
        $(this).unmask();
        var v = $(this).val().replace(/\D/g, '');
        if (v.length > 11) {
            $(this).mask("99.999.999/9999-99");
        } else {
            $(this).mask("999.999.999-99");
        }
    }).focus(function () {
        $(this).unmask();
    });
});