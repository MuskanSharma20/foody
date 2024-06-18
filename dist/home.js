
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

const slides = [
  {
      url: 'https://images.unsplash.com/photo-1486427944299-d1955d23e34d?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
  },
  {
      url: 'https://images.unsplash.com/photo-1513104890138-7c749659a591?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
  },
  {
      url: 'https://images.unsplash.com/photo-1541658016709-82535e94bc69?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
  },
  {
      url: 'https://images.unsplash.com/photo-1615837197154-2e801f4bd294?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
  },
  {
      url: 'https://images.unsplash.com/photo-1619535860434-ba1d8fa12536?q=80&w=1796&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
  },
];

let currentIndex = 0;

const slider = document.getElementById('slider');
const prevSlideButton = document.getElementById('prevSlide');
const nextSlideButton = document.getElementById('nextSlide');
const dotsContainer = document.getElementById('dots');

const updateSlide = () => {
    slider.style.backgroundImage = `url(${slides[currentIndex].url})`;
    updateDots();
};

const prevSlide = () => {
    currentIndex = currentIndex === 0 ? slides.length - 1 : currentIndex - 1;
    updateSlide();
};

const nextSlide = () => {
    currentIndex = currentIndex === slides.length - 1 ? 0 : currentIndex + 1;
    updateSlide();
};

const goToSlide = (slideIndex) => {
    currentIndex = slideIndex;
    updateSlide();
};

const updateDots = () => {
    const dots = dotsContainer.children;
    for (let i = 0; i < dots.length; i++) {
        dots[i].classList.remove('active');
    }
    dots[currentIndex].classList.add('active');
};

slides.forEach((slide, slideIndex) => {
    const dot = document.createElement('div');
    dot.className = 'text-2xl cursor-pointer';
  
    dot.onclick = () => goToSlide(slideIndex);
    dotsContainer.appendChild(dot);
});

prevSlideButton.onclick = prevSlide;
nextSlideButton.onclick = nextSlide;

// Initialize the first slide
updateSlide();

// Add automatic slide change
setInterval(nextSlide, 5000); // 5000ms = 5s
 
  

  
  
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
  
  
  
  