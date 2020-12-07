$(document).ready(function() {

    const navEncreEvent = $('#nav-event-position')
    const header = $('.header-binch')

    console.log(header)

    if (navEncreEvent.length) {

        setNavBackground(header, navEncreEvent)

        $(document).scroll(function() {
            setNavBackground(header, navEncreEvent)
        })

        return;
    }

    header.removeClass('variant-transparent').addClass('variant-white')

})

function setNavBackground (header, navEncreEvent) {

    if (header.offset().top > (navEncreEvent.position().top - header.height())) {
        header.removeClass('variant-transparent').addClass('variant-white')
    }
    else {
        header.removeClass('variant-white').addClass('variant-transparent')
    }

}