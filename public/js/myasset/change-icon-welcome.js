
let check = true;

$(window).resize(function () {

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


