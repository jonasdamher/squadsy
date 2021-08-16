'use strict';

$(() => {

    $('.toggle-menu').on('click', function () {
        const menu = $('.menu');

        if (menu.css('visibility') === 'visible') {
            menu.removeClass('show');
        } else {
            menu.addClass('show');
        }
    });
});