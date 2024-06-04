// slider.js
window.addEventListener('load', function() {
    const slider = document.querySelector('#slider ul');
    let interval = 3000;  // Intervalo de tiempo en milisegundos
    let currentIndex = 0;
    const slides = slider.children.length;

    function startSlider() {
        setInterval(() => {
            slider.style.transition = 'margin-left 1s';
            slider.style.marginLeft = `-${currentIndex * 100}%`;

            currentIndex++;

            if (currentIndex === slides) {
                setTimeout(() => {
                    slider.style.transition = 'none';
                    slider.style.marginLeft = '0';
                    currentIndex = 0;
                }, interval);
            }
        }, interval);
    }

    startSlider();
});
