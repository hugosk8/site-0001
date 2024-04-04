document.addEventListener("DOMContentLoaded", function () {
    const toggle = document.querySelector('.toggle-submenu');
    const ul = document.querySelector('.sub-menu');

    toggle.addEventListener("mouseover", function (e) {
        e.preventDefault();

        const parentLi = this.closest('.header-li');
        const subMenu = parentLi.querySelector('.sub-menu');
        subMenu.classList.toggle('anim');
        parentLi.classList.toggle('sub-menu-open');
    })

    toggle.addEventListener("mouseout", function (e) {
        e.preventDefault();

        const parentLi = this.closest('.header-li');
        const subMenu = parentLi.querySelector('.sub-menu');
        subMenu.classList.toggle('anim');
        parentLi.classList.toggle('sub-menu-open');
    })

    ul.addEventListener("mouseover", function (e) {
        e.preventDefault();

        const parentLi = this.closest('.header-li');
        const subMenu = parentLi.querySelector('.sub-menu');
        subMenu.classList.toggle('anim');
        parentLi.classList.toggle('sub-menu-open');
    })

    ul.addEventListener("mouseout", function (e) {
        e.preventDefault();

        const parentLi = this.closest('.header-li');
        const subMenu = parentLi.querySelector('.sub-menu');
        subMenu.classList.toggle('anim');
        parentLi.classList.toggle('sub-menu-open');
    })
})