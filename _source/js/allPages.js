if (is.not.ie()) {
    $('.cepMask').mask("99999-999");
    $('.cpfMask').mask("999.999.999-99");
    $('.cnpjMask').mask("99.999.999/9999-99");
    $('.dataMask').mask("99/99/9999");
    $('.foneMask').focusout(function () {
        var phone;
        $('.foneMask').unmask();
        phone = $('.foneMask').val().replace(/\D/g, '');
        if (phone.length > 10) {
            $('.foneMask').mask("(99) 99999-999?9");
        } else {
            $('.foneMask').mask("(99) 9999-9999?9");
        }
    }).trigger('focusout');
}