function onToggleMenu() {
    const menu = document.getElementById('menu');
    const openIcon = document.querySelector('.open-icon');
    const closeIcon = document.querySelector('.close-icon');

    if (menu.classList.contains('hidden')) {
        menu.classList.remove('hidden');
        menu.classList.add('block');
        openIcon.style.display = 'none';
        closeIcon.style.display = 'block';
    } else {
        menu.classList.remove('block');
        menu.classList.add('hidden');
        openIcon.style.display = 'block';
        closeIcon.style.display = 'none';
    }
}

//coupon slider 
document.addEventListener('DOMContentLoaded', function() {
    const prevBtn = document.getElementById('coupon-prev-btn');
    const nextBtn = document.getElementById('coupon-next-btn');
    const cardContainer = document.getElementById('coupon-card-container');

    if (prevBtn && nextBtn && cardContainer) {
        // Initial check to disable prev button if at the start
        if (cardContainer.scrollLeft === 0) {
            prevBtn.disabled = true;
        }

        // Add event listener to next button
        nextBtn.addEventListener('click', function() {
            cardContainer.scrollTo({
                left: cardContainer.scrollLeft + 300,
                behavior: 'smooth'
            });

            // Enable prev button when scroll position changes
            prevBtn.disabled = false;
            prevBtn.classList.remove('disabled:bg-gray-300');
        });

        // Add event listener to prev button
        prevBtn.addEventListener('click', function() {
            cardContainer.scrollTo({
                left: cardContainer.scrollLeft - 300,
                behavior: 'smooth'
            });

            // Disable prev button again if scrolled to the start
            if (cardContainer.scrollLeft <= 0) {
                prevBtn.disabled = true;
                prevBtn.classList.add('disabled:bg-gray-300');
            }
        });

        // Listen to scroll events to enable/disable buttons dynamically
        cardContainer.addEventListener('scroll', function() {
            // Check scroll position to enable/disable buttons
            if (cardContainer.scrollLeft > 0) {
                prevBtn.disabled = false;
                prevBtn.classList.remove('disabled:bg-gray-300');
            } else {
                prevBtn.disabled = true;
                prevBtn.classList.add('disabled:bg-gray-300');
            }

            // Check if scrolled to the end (considering floating point error)
            if (Math.ceil(cardContainer.scrollLeft) >= cardContainer.scrollWidth - cardContainer.offsetWidth) {
                nextBtn.disabled = true;
                nextBtn.classList.add('disabled:bg-gray-300');
            } else {
                nextBtn.disabled = false;
                nextBtn.classList.remove('disabled:bg-gray-300');
            }
        });
    } else {
        console.error('One or more elements not found.');
    }
});




//add to cartt 
document.addEventListener('DOMContentLoaded', function () {
    const cards = document.querySelectorAll('.card');
    
    cards.forEach(card => {
        const decrementButton = card.querySelector('.decrement');
        const incrementButton = card.querySelector('.increment');
        const quantityInput = card.querySelector('.quantity');
        const addToCartButton = card.querySelector('.add-to-cart');

        decrementButton.addEventListener('click', function () {
            let quantity = parseInt(quantityInput.value);
            if (quantity > 1) {
                quantityInput.value = quantity - 1;
            }
        });

        incrementButton.addEventListener('click', function () {
            let quantity = parseInt(quantityInput.value);
            quantityInput.value = quantity + 1;
        });

        addToCartButton.addEventListener('click', function () {
            const itemName = card.querySelector('h5').innerText;
            const itemDescription = card.querySelector('p').innerText;
            const itemPrice = card.querySelector('h6').innerText;
            const itemQuantity = quantityInput.value;

            const cartItem = {
                name: itemName,
                description: itemDescription,
                price: itemPrice,
                quantity: itemQuantity
            };

            console.log(JSON.stringify(cartItem));
           
        });
    });
});


//  slider cards
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

