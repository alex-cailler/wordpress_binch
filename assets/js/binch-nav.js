window.addEventListener('scroll', function () {
    const header = document.querySelector('.header-binch');
    const windowPosition = window.scrollY > 0;

    header.classList.toggle('scrollingActive', windowPosition);
})