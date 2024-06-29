<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        #navigation {
            position: fixed;
            top: 20px;
            left: 20px;
            z-index: 1000;
        }

        #navigation button {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }

        #cart-items {
            margin-top: 80px;
            padding: 20px;
        }

        .cart-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease-in-out;
        }

        .cart-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .cart-item img {
            max-width: 120px;
            margin-right: 50px;
            margin-left: 20px;
            border-radius: 5px;
        }

        .cart-item-info {
            flex-grow: 1;
            padding: 20px 0;
            
        }

        .cart-item h3 {
            margin-top: 0;
            margin-bottom: 10px;
            color: #333;
        }

        .cart-item p {
            margin: 0;
            color: #666;
        }

        .cart-item .remove-btn {
            background-color: #ff5f6d;
            color: #fff;
            border: none;
            margin: 0px 20px;
            padding: 8px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .cart-item .remove-btn:hover {
            background-color: #ff3f4d;
        }

        .popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.7);
            color: #fff;
            padding: 20px;
            border-radius: 5px;
            display: none;
            z-index: 1000;
        }

        .popup.show {
            display: block;
        }
    </style>
</head>

<body>
    <div id="navigation">
        <button onclick="window.history.back()">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
        </button>
    </div>

    <h1 style="text-align: center; margin-top: 50px;">Shopping Cart</h1>
    <div id="cart-items"></div>
    <div class="popup" id="popup">Product removed from cart</div>

    <script>
        function addToCart(id, name, price, description, image) {
            const cartItems = JSON.parse(sessionStorage.getItem('cartItems')) || [];

            cartItems.push({
                id: id,
                name: name,
                price: price,
                description: description,
                image: image 
            });

            sessionStorage.setItem('cartItems', JSON.stringify(cartItems));

            displayCartItems();
        }

        function removeFromCart(index) {
            const cartItems = JSON.parse(sessionStorage.getItem('cartItems')) || [];

            cartItems.splice(index, 1);

            sessionStorage.setItem('cartItems', JSON.stringify(cartItems));

            displayCartItems();

            const popup = document.getElementById('popup');
            popup.classList.add('show');
            setTimeout(function () {
                popup.classList.remove('show');
            }, 2000);
        }

        function displayCartItems() {
            const cartItems = JSON.parse(sessionStorage.getItem('cartItems')) || [];
            const cartItemsDiv = document.getElementById('cart-items');
            cartItemsDiv.innerHTML = '';
            if (cartItems.length === 0) {
                cartItemsDiv.innerHTML = '<p style="text-align: center; color: #666;">Your cart is empty.</p>';
            } else {
                cartItems.forEach((item, index) => {
                    const cartItemDiv = document.createElement('div');
                    cartItemDiv.classList.add('cart-item');

                    const imageElement = document.createElement('img');
                    imageElement.src = item.image;
                    imageElement.alt = item.name;

                    const infoDiv = document.createElement('div');
                    infoDiv.classList.add('cart-item-info');

                    const nameHeading = document.createElement('h3');
                    nameHeading.textContent = item.name;

                    const descriptionPara = document.createElement('p');
                    descriptionPara.textContent = item.description;

                    const pricePara = document.createElement('p');
                    pricePara.textContent = `Price: ₹${item.price}`;

                    const removeButton = document.createElement('button');
                    removeButton.classList.add('remove-btn');
                    removeButton.textContent = 'Remove';
                    removeButton.onclick = function () {
                        removeFromCart(index);
                    };

                    infoDiv.appendChild(nameHeading);
                    infoDiv.appendChild(descriptionPara);
                    infoDiv.appendChild(pricePara);
                    cartItemDiv.appendChild(imageElement); // Append image
                    cartItemDiv.appendChild(infoDiv);
                    cartItemDiv.appendChild(removeButton);

                    cartItemsDiv.appendChild(cartItemDiv);
                });
            }
        }

        window.onload = function () {
            displayCartItems();
        };
    </script>
</body>

</html>
