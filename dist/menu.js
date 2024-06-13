
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
  
  document.addEventListener('DOMContentLoaded', (event) => {
    const carouselItems = document.querySelectorAll('.carousel-item');
    let currentIndex = 0;
    const intervalTime = 5000; // 5 seconds
  
    // Function to show the next image
    function showNextImage() {
        carouselItems[currentIndex].classList.add('hidden');
        carouselItems[currentIndex].classList.remove('block');
        currentIndex = (currentIndex + 1) % carouselItems.length;
        carouselItems[currentIndex].classList.add('block');
        carouselItems[currentIndex].classList.remove('hidden');
    }
  
    // Function to show the previous image
    function showPrevImage() {
        carouselItems[currentIndex].classList.add('hidden');
        carouselItems[currentIndex].classList.remove('block');
        currentIndex = (currentIndex - 1 + carouselItems.length) % carouselItems.length;
        carouselItems[currentIndex].classList.add('block');
        carouselItems[currentIndex].classList.remove('hidden');
    }
  
    // Function to start the slider
    function startSlider() {
        setInterval(showNextImage, intervalTime);
    }
  
    // Add event listeners for buttons
    document.getElementById('next').addEventListener('click', showNextImage);
    document.getElementById('prev').addEventListener('click', showPrevImage);
  
    // Start the slider
    startSlider();
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
  
  
  
  