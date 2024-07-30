document.addEventListener("DOMContentLoaded", function() {
    const boxes1to3 = document.querySelectorAll('.box1, .box2, .box3');
    const boxes4to6 = document.querySelectorAll('.box4, .box5, .box6');

    function toggleVisibility() {
        boxes1to3.forEach(box => box.style.opacity = 1);
        boxes4to6.forEach(box => box.style.opacity = 0);
    }

    boxes4to6.forEach(box => {
        box.addEventListener('animationiteration', toggleVisibility);
    });
})