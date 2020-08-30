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

// first step
var sectionFields = {
    el: $('.fieldsetHero'),
    sobreVoce: $('#sobre-voce'),
    dadosVeiculo: $('#dados-veiculo'),
    infosVeiculo: $('#informacoes-veiculo'),
    infosComp: $('#informacoes-complementares'),
};
var fields = {
    step1__nomeCompleto: $('#formJRF_nome'),
    step1__telefone: $('#formJRF_telefone'),
    step1__allFields: sectionFields.sobreVoce.find('input'),

    step2__0km: $('.li0km div'),
};

// step 1
fields.step1__allFields.on('keyup', function() {
    if ((fields.step1__nomeCompleto.val() === '') || (fields.step1__telefone.val() === '')) {
        sectionFields.dadosVeiculo.removeClass('is-active');
        sectionFields.dadosVeiculo.hide('fast');
    } else {
        setTimeout(function(){ sectionFields.dadosVeiculo.addClass('is-active'); }, 500);
        sectionFields.dadosVeiculo.show('fast');
    }
});

// step 2
fields.step2__0km.on('click', function() {
    var lfckv = $('#optZeroKM').is(":checked");
    console.log(lfckv)
    if (lfckv) {
        $('.js-vehiclePlate').addClass('u-dnone');
        $('.js-vehicleLocation').removeClass('u-dnone');
    } else {
        $('.js-vehiclePlate').removeClass('u-dnone');
        $('.js-vehicleLocation').addClass('u-dnone');
    }
});

// goToStep
$('.js-goToStep').on('click', function(e) {
    e.preventDefault();
    var thisHref = $(this).attr('href');
    console.log(thisHref)
    sectionFields.el.removeClass('is-active');
    setTimeout(function(){ sectionFields.el.hide('fast'); }, 150);
    setTimeout(function(){ $(thisHref).show('fast'); }, 300);
    setTimeout(function(){ $(thisHref).addClass('is-active'); }, 500);
    $('.c-hamburguer').addClass('is-active');
});

// openAside
$('.js-openAside').on('click', function() {
    $('.jrfHero').addClass('is-active');
});

// hamburguer mobile
$('.c-hamburguer').on('click', function() {
   $(this).toggleClass('is-active');
   $('.jrfHero').toggleClass('is-active');
});