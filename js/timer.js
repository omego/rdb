var timer = 5,
    el = document.getElementById('countdown');

$('#hulk').click(function t_minus() {
    'use strict';
    el.innerHTML = timer--;
    if (timer >= 0) {
        setTimeout(function () {
            t_minus();
        }, 1000);
    } else {
        window.location.replace("google.com");
    }
}());