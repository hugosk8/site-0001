document.addEventListener("DOMContentLoaded", function () {
    const toggle = document.querySelector('.toggle-submenu');
    const ul = document.querySelector('.sub-menu');
    const arrow = document.getElementsByClassName('icon-md-arrow-forward')[0];
    const li = document.querySelector('#arrowed>a');
    const headerLink = document.getElementById('arrowed');
    console.log(headerLink);

    li.addEventListener("mouseover", function (e) {
        e.preventDefault();

        const headerLink = this.closest('.header-li');
        const subMenu = headerLink.querySelector('.sub-menu');
        subMenu.classList.toggle('anim');
        headerLink.classList.toggle('sub-menu-open');
        arrow.style.transform = "rotate(90deg)";
    })

    li.addEventListener("mouseout", function (e) {
        e.preventDefault();

        const headerLink = this.closest('.header-li');
        const subMenu = headerLink.querySelector('.sub-menu');
        subMenu.classList.toggle('anim');
        headerLink.classList.toggle('sub-menu-open');
        arrow.style.transform = "rotate(-90deg)";
    })

    toggle.addEventListener("mouseover", function (e) {
        e.preventDefault();

        const headerLink = this.closest('.header-li');
        const subMenu = headerLink.querySelector('.sub-menu');
        subMenu.classList.toggle('anim');
        headerLink.classList.toggle('sub-menu-open');
        arrow.style.transform = "rotate(90deg)";
    })

    toggle.addEventListener("mouseout", function (e) {
        e.preventDefault();

        const headerLink = this.closest('.header-li');
        const subMenu = headerLink.querySelector('.sub-menu');
        subMenu.classList.toggle('anim');
        headerLink.classList.toggle('sub-menu-open');
        arrow.style.transform = "rotate(-90deg)";
    })

    ul.addEventListener("mouseover", function (e) {
        e.preventDefault();

        const headerLink = this.closest('.header-li');
        const subMenu = headerLink.querySelector('.sub-menu');
        subMenu.classList.toggle('anim');
        headerLink.classList.toggle('sub-menu-open');
        arrow.style.transform = "rotate(90deg)";
    })

    ul.addEventListener("mouseout", function (e) {
        e.preventDefault();

        const headerLink = this.closest('.header-li');
        const subMenu = headerLink.querySelector('.sub-menu');
        subMenu.classList.toggle('anim');
        headerLink.classList.toggle('sub-menu-open');
        arrow.style.transform = "rotate(-90deg)";
    })
})