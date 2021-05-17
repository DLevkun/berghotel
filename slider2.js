let offset = 0;
let index = 0;
const sliderLine = document.querySelector('.slider-line');
const dots = document.querySelectorAll('.dot');
const slides = document.querySelectorAll('.slide');

const prepareNextSlide = () =>{
    offset += 850;
    index += 1;
    if(offset > 3400){
        offset = 0;
        index = 0;
    }
    activeDot(index);
    sliderLine.style.left = -offset + 'px';
}

const preparePrevSlide = () => {
    offset -= 850;
    index -= 1;
    if(offset < 0){
        offset = 3400;
        index = 4;
    }
    activeDot(index);
    sliderLine.style.left = -offset + 'px';
};

document.querySelector('#btn-next').addEventListener('click', prepareNextSlide);

document.querySelector('#btn-prev').addEventListener('click', preparePrevSlide);

const activeDot = id => {
    for(dot of dots){
        dot.classList.remove('active');
    }
    dots[id].classList.add('active');
};

dots.forEach((item, indexDot)=>{
    item.addEventListener("click",()=>{
        sliderLine.style.left = 0;
        offset = 850*indexDot;
        sliderLine.style.left = -offset + 'px';
        activeDot(indexDot);
    });
});

