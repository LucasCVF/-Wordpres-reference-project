document.getElementById('carouselExampleDark').addEventListener('slid.bs.carousel', function (event) {
    let activeIndex = event.to; // Index do slide ativo
    let buttons = document.querySelectorAll('.custom-indicators button');
    buttons.forEach(function(button, index) {
        if (index === activeIndex) {
            button.classList.add('active');
        } else {
            button.classList.remove('active');
        }
    });
});