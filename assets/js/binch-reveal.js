
var slideUp = {
    distance: '100px',
    origin: 'bottom',
    duration: 1500,
    delay: 500,
    reset: true,
};

slideUpNodeItem = [
    document.querySelector('#card-2'),
    document.querySelector('#why-4')
]
ScrollReveal().reveal(slideUpNodeItem, {...slideUp, delay: 300});
ScrollReveal().reveal('.slideUp', slideUp);

var slideLeft = {
    distance: '100px',
    origin: 'right',
    duration: 1500,
    delay: 300,
    reset: true
};

slideLeftNodeItem = [
    document.querySelector('#card-3'),
    document.querySelector('#why-2')
]
ScrollReveal().reveal(slideLeftNodeItem, slideLeft);
ScrollReveal().reveal('.slideLeft', slideLeft);

var slideRight = {
    distance: '100px',
    origin: 'left',
    duration: 1500,
    delay: 300,
    reset: true
};

slideRightNodeItem = [
    document.querySelector('#card-1'),
    document.querySelector('#why-3')
]
ScrollReveal().reveal(slideRightNodeItem, slideRight);
ScrollReveal().reveal('.slideRight', slideRight);


var slideBottom = {
    distance: '100px',
    origin: 'top',
    duration: 1500,
    delay: 300,
    reset: true
};

ScrollReveal().reveal('#why-1', slideBottom);
ScrollReveal().reveal('.slideBottom', slideBottom);

var fadeIn = {
    duration: 1500,
    delay: 300,
    reset: true,
    easing   : 'ease-in-out',
}
ScrollReveal().reveal('.fadeIn', fadeIn);
