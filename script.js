const handleClick = document.querySelector('.burger__btn')
const burgerIcon = document.querySelector('.burger__btn i');

handleClick.addEventListener('click', function() {
    const menulinks= document.querySelector('.burger-menu__links');
    console.log(menulinks);
    menulinks.classList.toggle('open');
    const isOpen = menulinks.classList.contains('open');
    burgerIcon.classList=isOpen ? 'fa-solid fa-xmark' : 'fa-solid fa-bars';
});