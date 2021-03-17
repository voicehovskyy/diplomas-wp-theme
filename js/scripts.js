 $(document).ready(function() {
     $('.multiple-items').slick({
         infinite: true,
         slidesToShow: 3,
         slidesToScroll: 1,
         nextArrow: '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-square slick-next" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm4.5 5.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/></svg>',
         prevArrow: '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-square slick-prev" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/></svg>',
         responsive: [{
                 breakpoint: 992,
                 settings: {
                     slidesToShow: 2,
                     slidesToScroll: 2,
                     infinite: true,
                     dots: false
                 }
             },
             {
                 breakpoint: 600,
                 settings: {
                     slidesToShow: 2,
                     slidesToScroll: 2
                 }
             },
             {
                 breakpoint: 480,
                 settings: {
                     slidesToShow: 1,
                     slidesToScroll: 1,
                     dots: false,
                     arrows: false,
                     centerMode: true,
                     centerPadding: '40px',
                 }
             }
         ]
     });
 });
 document.addEventListener('DOMContentLoaded', () => {
     const newTime = new Date('April 9 2021 00:00:00');

     const daysVal = document.querySelector('.time-count-days .time-count-val');
     const hoursVal = document.querySelector('.time-count-hours .time-count-val');
     const minsVal = document.querySelector('.time-count-mins .time-count-val');
     const secsVal = document.querySelector('.time-count-secs .time-count-val');

     const daysText = document.querySelector('.time-count-days .time-count-text');
     const hoursText = document.querySelector('.time-count-hours .time-count-text');
     const minsText = document.querySelector('.time-count-mins .time-count-text');
     const secsText = document.querySelector('.time-count-secs .time-count-text');

     const timeCount = () => {
         let now = new Date();
         console.log(now);
     }
     timeCount();
 });