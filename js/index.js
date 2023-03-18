const sliderBox = document.getElementById('slide-box');
const images = ['images/amabile-slide-1.jpg',
                'images/amabile-slide-2.jpg',
                'images/amabile-slide-3.jpg',
                'images/amabile-slide-4.jpg'];
let index = 0;

const slajd = new Promise((end, error) => {
    sliderBox.style.animation = 'slide-left 2s';
    end();
    error();
    });
slajd.then(
    function end() {
        console.log("Już!");
    },
    function error()    {
        console.log("Oooops");
    });
/* setInterval(nextSlide, 5000); */

function nextSlide()    {
    if (++index === images.length)    {
        index = 0;
    }
    sliderBox.src = images[index];
}