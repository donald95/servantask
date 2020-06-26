
// variable check si es verdadera
// agrega la etiqueta span a la clase .navbar-brand.
let check = true;

$(document).ready(function () {

    // Revisa si la renderizacion de la pagina es dentro de un dispositivo movil.
    var isMobile = {
        android: function () {
            return navigator.userAgent.match(/Android/i); // Dispositivo android.
        },
        blackBerry: function () {
            return navigator.userAgent.match(/BlackBerry/i); // Dispositivo blackberry.
        },
        ios: function () {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i); // Dispositivo tablets.
        },
        opera: function () {
            return navigator.userAgent.match(/Opera Mini/i); // Dispositivo con navegador opera mini para movil.
        },
        windows: function () {
            return navigator.userAgent.match(/IEMobile/i); // Dispositivo movil para windows.
        },
        any: function () {
            // Cualquier dispositivo movil.
            return (isMobile.android() || isMobile.blackBerry() || isMobile.ios() || isMobile.opera() || isMobile.windows());
        }
    };

    // Cambio de atributos de la etiqueta #dog-two,
    // para cambiar de imagen cuando la pagina
    // se renderiza en un dispositivo movil.
    if (isMobile.any()) {
        $('#dog-two').attr({
            src: '../img/angry-dog-white.svg',
            alt: 'servant',
            width: '25px'
        });
        if (check) {
            $('.navbar-brand').append($('<span id="name-company-dog">ServanTask</span>'));
            check = false;
        }
    } else {
        if ($(window).width() < 767.98) {
            $('#dog-two').attr({
                src: '../img/angry-dog-white.svg',
                alt: 'servant',
                width: '25px'
            });

            if (check) {
                $('.navbar-brand').append($('<span id="name-company-dog">ServanTask</span>'));
                check = false;
            }

        } else {
            $('#dog-two').attr({
                src: '../img/angry-dog.svg',
                alt: 'servant',
                width: '25px'
            });
            $('#name-company-dog').remove();
            check = true;
        }
    }

    // Obtiene el evento al redimensionar pagina.
    $(window).resize(function () {
        // Si el ancho de la pagina es menor que 767.98 pixeles
        // entonces cambiar atributos del id #dog-two.
        if ($(window).width() < 767.98) {
            $('#dog-two').attr({
                src: '../img/angry-dog-white.svg',
                alt: 'servant',
                width: '25px'
            });

            if (check) {
                $('.navbar-brand').append($('<span id="name-company-dog">ServanTask</span>'));
                check = false;
            }

        } else {
            $('#dog-two').attr({
                src: '../img/angry-dog.svg',
                alt: 'servant',
                width: '25px'
            });
            $('#name-company-dog').remove();
            check = true;
        }
    });
});
