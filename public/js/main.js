// (function(){
//     const header = document.querySelector('.scroll_header');
//     const div = document.querySelector('.container_section');
//     window.onscroll = () => {
//         if(window.pageYOffset > 50 || div.classList.contains('show')){
//             header.classList.add('header_active');
//         } else {
//             header.classList.remove('header_active');
//         }
//     }
// }());
$('.scroll_nav a').click(function() {
    $(this).addClass('active').siblings().removeClass('active');
});



// // Scroll to anchors
// (function () {

//     const smoothScroll = function (targetEl, duration) {
//         const headerElHeight =  document.querySelector('.scroll_nav').clientHeight;
//         let target = document.querySelector(targetEl);
//         let targetPosition = target.getBoundingClientRect().top - headerElHeight - '100';
//         let startPosition = window.pageYOffset;
//         let startTime = null;

//         const ease = function(t,b,c,d) {
//             t /= d / 2;
//             if (t < 1) return c / 2 * t * t + b;
//             t--;
//             return -c / 2 * (t * (t - 2) - 1) + b;
//         };

//         const animation = function(currentTime){
//             if (startTime === null) startTime = currentTime;
//             const timeElapsed = currentTime - startTime;
//             const run = ease(timeElapsed, startPosition, targetPosition, duration);
//             window.scrollTo(0,run);
//             if (timeElapsed < duration) requestAnimationFrame(animation);
//         };
//         requestAnimationFrame(animation);

//     };

//     const scrollTo = function () {
//         const links = document.querySelectorAll('.js-scroll');
//         links.forEach(each => {
//             each.addEventListener('click', function () {
//                 const currentTarget = this.getAttribute('href');
//                 smoothScroll(currentTarget, 50);
//             });
//         });
//     };
//     scrollTo();
// }());
