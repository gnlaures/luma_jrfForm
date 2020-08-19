// Limitação de caracteres
function limitCaracters(el, nMaxCaracters) {
    el.each(function() {
        var elText =  $(this).text();
        var minText = elText.substring(0, nMaxCaracters);
        var nCaractersTotal = elText.length;
        if (nCaractersTotal > nMaxCaracters) {
            $(this).text(minText.trim() + '...');
        } else {
            $(this).text(elText);
        }
    });
}
// Example:
// limitCaracters($('.elementoTESTE li div'), 50);


// substituir palavras quando for dispositivo for de toque
// necessita do plugin is.js para funcionar
function changeTouchClickText() {
    if (is.touchDevice()) {
        $('.js-changeString').each(function() {
            var str = $(this).text();
            console.log(str);
            if (str === 'clique') {
                $(this).html('toque');
            } else if (str === 'Clique') {
                $(this).html('Toque');
            }
        });
    } else {
        $('.js-changeString').each(function() {
            var str = $(this).text();
            console.log(str);
            if (str === 'toque') {
                $(this).html('clique');
            } else if (str === 'Toque') {
                $(this).html('Clique');
            }
        });
    }
}
// Example:
// $(window).on('load', changeTouchClickText());


// Identifica direcao do scroll
function scrollDirection() {
    var scrollInit = 0;
    $(window).on('scroll', function() {
        var scrollBody = $(this).scrollTop();
        if (scrollBody < scrollInit) {
            $('body').removeClass('hidden');
            $('body').addClass('scrolledUp');
            $('body').removeClass('scrolledDown');
        } else {
            $('body').removeClass('scrolledUp');
            $('body').addClass('scrolledDown');
        }
        scrollInit = scrollBody;
    });
}
// Example:
// $(window).on('load', function() {scrollDirection();});


// link scroll
function goToSection__scroll(elScrollDestiny, distanceIfScrollGoingToUp, distanceIfScrollGoingToDown, speedScroll, delay) {
    console.clear();
    // scroll reference
    var scrollEfetuado = $(window).scrollTop();
    console.log(scrollEfetuado);
    // element reference
    var sectionDestiny_offsetTop = $(elScrollDestiny).offset().top;
    console.log(elScrollDestiny);
    console.log(sectionDestiny_offsetTop);

    if (scrollEfetuado > sectionDestiny_offsetTop) {
        console.log('vai subir');
        setTimeout(function(){
            $('html, body').animate({
                scrollTop: sectionDestiny_offsetTop - distanceIfScrollGoingToUp
            }, speedScroll);
        }, delay);
    } else {
        console.log('vai descer');
        setTimeout(function(){
            $('html, body').animate({
                scrollTop: sectionDestiny_offsetTop - distanceIfScrollGoingToDown
            }, speedScroll);
        }, delay);
    }
}
// Example:
// $('.js-linkScroll').on('click', function(e) {
//     e.preventDefault();
//     var finalDestiny = $(this).attr('href');
//     goToSection__scroll(finalDestiny, 100, 50, 700, 10);
// });