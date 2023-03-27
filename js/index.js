const images = ['images/amabile-slide-1.jpg',
                'images/amabile-slide-2.jpg',
                'images/amabile-slide-3.jpg',
                'images/amabile-slide-4.jpg'];
images.map(url => {
    preloadImage(url);
});

let index = 0;
setInterval(nextSlide, 5000);

function nextSlide()    {
    const sliderBox = document.getElementById('slide-box');
    sliderBox.classList.remove('fade-in-animation');
    let handler;
    sliderBox.classList.add('fade-out-animation');
    sliderBox.addEventListener('animationend', handler = () => {
       sliderBox.classList.remove('fade-out-animation');
       sliderBox.removeEventListener('animationend', handler);
        if (++index === images.length)    {
            index = 0;
        }
        sliderBox.src = images[index];
        sliderBox.classList.add('fade-in-animation');
    });
}

function preloadImage(url)  {
    const img = new Image();
    img.src = url;
}