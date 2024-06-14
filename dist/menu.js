
//nav
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





// add to cart 
    // Function to handle increment button
    function incrementQuantity(inputField) {
        var currentValue = parseInt(inputField.value);
        inputField.value = currentValue + 1;
    }

    // Function to handle decrement button
    function decrementQuantity(inputField) {
        var currentValue = parseInt(inputField.value);
        if (currentValue > 0) {
            inputField.value = currentValue - 1;
        }
    }

    // Function to add item to cart and store in JSON format
    function addToCart(itemName, price, quantity) {
        var item = {
            name: itemName,
            price: price,
            quantity: quantity
        };

        // Fetch existing cart items from localStorage
        var cartItems = localStorage.getItem('cartItems');
        if (!cartItems) {
            cartItems = [];
        } else {
            cartItems = JSON.parse(cartItems);
        }

        // Add new item to cart
        cartItems.push(item);

        // Store updated cartItems back into localStorage
        localStorage.setItem('cartItems', JSON.stringify(cartItems));

        // Optional: You can display a confirmation message or update UI here
        console.log('Item added to cart:', item);
    }


