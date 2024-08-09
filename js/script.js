// window.addEventListener('load', function() {
//     autoSlide();
// });


// function autoSlide() {
//     setTimeout(() => {
//         slide(getItemActiveIndex() + 1)
//     }, 1000);
// }

// function slide(toIndex) {
//     const itemArray = Array.from(document.querySelectorAll('.carousel_item'));
//     const itemActive = document.querySelector('.active');
//     if(toIndex >= itemArray.length) {
//         toIndex = 0;
//     }
//     const newItemActive = itemArray(toIndex);
//     newItemActive.classList.add('.carousel_item_pos_next');
//     setTimeout(() => {
//         newItemActive.classList.add('carousel_item_next');
//         itemActive.classList.add('carousel_item_next');
//     }, 20);

//     newItemActive.addEventLisener('transitionend', () => {
//         itemActive.className = 'carousel_item';
//         newItemActive.className = 'carousel_item active';
//     }, {
//         once: true
//     })
// }

// function getItemActiveIndex() {
//     const itemArray = Array.from(document.querySelectorAll('.carousel_item'));
//     const itemActive = document.querySelector('.active');
//     const itemActiveIndex = itemArray.indexOf(itemActive);
//     return itemActiveIndex;
// }