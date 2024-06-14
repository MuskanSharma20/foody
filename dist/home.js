
//navbar 
function onToggleMenu() {
    const menu = document.getElementById('menu');
    const openIcon = document.querySelector('.open-icon');
    const closeIcon = document.querySelector('.close-icon');
  
    if (menu.classList.contains('hidden')) {
        menu.classList.remove('hidden');
        menu.classList.add('block');
        openIcon.classList.add('hidden');
        closeIcon.classList.remove('hidden');
    } else {
        menu.classList.remove('block');
        menu.classList.add('hidden');
        openIcon.classList.remove('hidden');
        closeIcon.classList.add('hidden');
    }
  }
  
  
  //carousel
  
  document.addEventListener("DOMContentLoaded", function() {
    const prevButton = document.getElementById('prev');
    const nextButton = document.getElementById('next');
    const carousel = document.getElementById('carousel');
    const slides = carousel.querySelectorAll('.carousel-item');
    let currentSlide = 0;

    // Function to move to the next slide
    function moveToNextSlide() {
      if (currentSlide < slides.length - 1) {
        currentSlide++;
      } else {
        currentSlide = 0;
      }
      updateCarousel();
    }

    // Function to move to the previous slide
    function moveToPrevSlide() {
      if (currentSlide > 0) {
        currentSlide--;
      } else {
        currentSlide = slides.length - 1;
      }
      updateCarousel();
    }

    // Function to update carousel display based on currentSlide
    function updateCarousel() {
      slides.forEach((slide, index) => {
        if (index === currentSlide) {
          slide.classList.remove('hidden');
          slide.classList.add('block');
        } else {
          slide.classList.add('hidden');
          slide.classList.remove('block');
        }
      });
    }

    // Event listeners for previous and next buttons
    prevButton.addEventListener('click', moveToPrevSlide);
    nextButton.addEventListener('click', moveToNextSlide);
  });
  
  
  
  
  // image slider
  document.addEventListener('DOMContentLoaded', function () {
    const cardContainer = document.getElementById('card-container');
    const prevButton = document.getElementById('prev-btn');
    const nextButton = document.getElementById('next-btn');
    
    const cardWidth = cardContainer.children[0].offsetWidth + 16; // includes gap
    let scrollPosition = 0;
    
    // Function to update button states based on scroll position
    function updateButtonState() {
        if (scrollPosition <= 0) {
            prevButton.setAttribute('disabled', 'disabled');
            prevButton.classList.add('bg-gray-300', 'cursor-not-allowed');
        } else {
            prevButton.removeAttribute('disabled');
            prevButton.classList.remove('bg-gray-300', 'cursor-not-allowed');
        }
        
        if (scrollPosition >= cardContainer.scrollWidth - cardContainer.clientWidth) {
            nextButton.setAttribute('disabled', 'disabled');
            nextButton.classList.add('bg-gray-300', 'cursor-not-allowed');
        } else {
            nextButton.removeAttribute('disabled');
            nextButton.classList.remove('bg-gray-300', 'cursor-not-allowed');
        }
    }
    
    // Initial button state setup
    updateButtonState();
    
    prevButton.addEventListener('click', function () {
        if (scrollPosition > 0) {
            scrollPosition -= cardWidth;
            cardContainer.scrollTo({
                left: scrollPosition,
                behavior: 'smooth'
            });
            updateButtonState();
        }
    });
    
    nextButton.addEventListener('click', function () {
        if (scrollPosition < cardContainer.scrollWidth - cardContainer.clientWidth) {
            scrollPosition += cardWidth;
            cardContainer.scrollTo({
                left: scrollPosition,
                behavior: 'smooth'
            });
            updateButtonState();
        }
    });
    
    // Update button states on scroll
    cardContainer.addEventListener('scroll', function () {
        scrollPosition = cardContainer.scrollLeft;
        updateButtonState();
    });
  });
  
  
  
  