let nextBtn = document.getElementById('next')
let prevBtn = document.getElementById('prev')
let sliders = document.querySelectorAll('.slider');
let index = 0

function sliderFunc(n){
    for (let i = 0; i < sliders.length; i++){
        sliders[i].classList.contains('active') && sliders[i].classList.remove('active')
    }
    sliders[n].classList.add('active')
}

sliderFunc(index)

nextBtn.addEventListener('click', () => {
    if (index > sliders.length - 2) {
        index = 0
    }
    else{
        index += 1
    }
    sliderFunc(index)
})
prevBtn.addEventListener('click', () => {
    if (index <= 0) {
        index = sliders.length - 1
    }
    else{
        index -= 1
    }
    sliderFunc(index)
})
