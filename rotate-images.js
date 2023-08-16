document.getElementById('rotate-button').addEventListener('click', function() {
    var images = document.querySelectorAll('img');
    images.forEach(function(image) {
        var currentRotation = image.getAttribute('data-rotation') || 0;
        currentRotation = (parseInt(currentRotation) + 90) % 360;
        image.style.transform = 'rotate(' + currentRotation + 'deg)';
        image.setAttribute('data-rotation', currentRotation);
    });
});
