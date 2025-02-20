document.addEventListener('DOMContentLoaded', function() {
    setTimeout(function() {
        const splashImage = document.getElementById('avvanz-logo');

        splashImage.classList.add('fade-out');

        setTimeout(function() {
                window.location.href = redirectUrl;
        }, 2000); 
    }, 1000); 
});