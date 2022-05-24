const bar = document.querySelector('.icons .fa-bars')
const menu = document.querySelector('header ul')
const overlayer = document.querySelector('header + .overlayer')

bar.addEventListener('click', () => {
    menu.classList.toggle("active")
    overlayer.classList.toggle("active")
})
