const slider = document.querySelector('.slider');
      const slides = document.querySelectorAll('.slide');
      let currentIndex = 0;
    
      function goToSlide(index) {
        if (index < 0) {
          index = slides.length - 1;
        } else if (index >= slides.length) {
          index = 0;
        }
        slider.style.transform = `translateX(-${index * 100}%)`;
        currentIndex = index;
      }
    
      function nextSlide() {
        goToSlide(currentIndex + 1);
      }
    
      function prevSlide() {
        goToSlide(currentIndex - 1);
      }
    
      // Automatically change slide every 5 seconds
      setInterval(nextSlide, 5000);

      //Add basic styles for active tabs
$('.accordion__item-label').on('click', function() {
    $(this).addClass('blue');
    $(this).parent('.accordion__item').siblings().find('.accordion__item-label').removeClass('blue');
  });

  
