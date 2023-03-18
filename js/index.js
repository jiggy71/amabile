const sliderBox = document.getElementById('slide-box');
const images = ['images/amabile-slide-1.jpg',
                'images/amabile-slide-2.jpg',
                'images/amabile-slide-3.jpg',
                'images/amabile-slide-4.jpg'];
let index = 0;
setInterval(nextSlide, 5000);

function nextSlide()    {
    if (++index === images.length)    {
        index = 0;
    }
    sliderBox.src = images[index];
}