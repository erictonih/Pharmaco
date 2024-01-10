$(document).ready(function() {
    function rotateImage() {
        $('#myImage').animate({
            rotate: '+=360deg'
        }, 2000, 'linear', function() {
            rotateImage();
        });
    }

    rotateImage();
});