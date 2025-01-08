    // script.js
    let cartCount = 0;

    document.getElementById("add-to-cart-btn").addEventListener("click", function() {
        alert("Product added to cart!");
        cartCount++;
        updateCartCount();
        displayCart("cart-dis.php"); // Update the cart display
    });
    
    function updateCartCount() {
        document.getElementById("cart-count").innerText = cartCount + " item" + (cartCount !== 1 ? "s" : "") + " in cart";
    }
    
    function displayCart() {
        const cartItems = document.getElementById("cart-items");
        const newItem = document.createElement("li");
        newItem.textContent = "Product Name"; // Replace with actual product name
        cartItems.appendChild(newItem);
    }
    