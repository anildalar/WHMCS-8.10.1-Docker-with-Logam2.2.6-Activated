import $ from 'jquery';

function scrollTo ($element) {
    $(`html, body`).animate({
        scrollTop: $element.offset().top - 25
    }, 1000);
}

export {
    scrollTo
}