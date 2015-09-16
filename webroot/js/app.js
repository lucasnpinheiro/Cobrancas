var cake = {};
cake.util = {};
cake.util.numero = function (e) {
    if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        return false;
    }
};
cake.util.mascaras = function () {
    $('.numero').keypress(cake.util.numero);
    $('.cep').mask('99999-999');
    $('.data').mask('99/99/9999');
    $('.telefone').mask('(99) 99999-9999');
    $('.date .input-group .data').datepicker('remove').datepicker({
        autoclose: true,
        format: 'dd/mm/yyyy',
        language: 'pt-BR'
    });
    $(".moeda").maskMoney({
        prefix: 'R$ ',
        allowNegative: true,
        thousands: '.',
        decimal: ',',
        affixesStay: false
    });

};

$(function () {
    cake.util.mascaras();
});
