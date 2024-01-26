<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>stonk's Pizza</title>
    @include('components.header')
</head>
<body>

<section class="menu container mx-auto py-8">
    <h1 class="text-xl font-bold mb-8">All pizzas</h1>
    <div class="grid grid-cols-4 col-gap-12 row-gap-18">
        <div class="pizza-item text-center">
            <img class="h-40 mb-4 mx-auto" src="Photos\Pizzani-Pizza-3-600x477.jpg" alt="">
            <h2 class="mb-2 text-lg"></h2>
            <select class="size py-1 px-4 rounded-full uppercase text-xs">
               
                    <option value="small">Klein</option>
                    <option value="medium">Medium</option>
                    <option value="large">Groot</option>
            </select>
            <div class="flex items-center justify-center mt-4">
                <div class="price-and-cart flex items-center">
                    <span class="font-bold text-lg mr-4"></span>
                    <button class="add-to-cart py-1 px-6 rounded-full flex items-center font-bold" onclick="addToCart('Pizza 1', 0, 0)">
                        <span>+</span>
                        <span class="ml-2">Toevoegen</span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Repeat similar code for other pizza items -->

    </div>
</section>

<section class="cart container mx-auto py-8">
    <h2 class="text-xl font-bold mb-4">Shopping Cart</h2>
    <ul id="cart-list"></ul>
</section>

@include('components.footer')

<script>
    var cart = [];

    function addToCart(pizzaName, sizeIndex, price) {
        var selectedSize = getSize(sizeIndex);

        var selectedItem = {
            name: pizzaName,
            size: selectedSize,
            price: price
        };

        cart.push(selectedItem);

        // Update the cart display
        updateCartDisplay();

        alert(`Added to cart: ${pizzaName}, Size: ${selectedSize}, Price: ${price}`);
    }

    function getSize(sizeIndex) {
        const sizes = ["Small", "Medium", "Large"];
        return sizes[sizeIndex];
    }

    function updateCartDisplay() {
        var cartList = document.getElementById("cart-list");
        cartList.innerHTML = "";

        // Display each item in the cart
        cart.forEach(function(item) {
            var listItem = document.createElement("li");
            listItem.textContent = `${item.name} - Size: ${item.size} - Price: ${item.price}`;
            cartList.appendChild(listItem);
        });
    }
</script>

</body>
</html>
