<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            background-color: #f0f0f0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h1 {
            text-align: center;
        }

        .product-item {
            margin-bottom: 20px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f9f9f9;
            position: relative;
            display: flex;
            align-items: center;
        }

        .product-item img {
            border-radius: 4px;
            width: 200px;
            max-width: 100%;
            margin-right: 20px;
        }

        .product-details {
            flex: 1;
        }

        .checkout-button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            text-align: center;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .checkout-button:hover {
            background-color: #45a049;
        }

        .quantity-select {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Payment Page</h1>
        <div id="product-list">
           
        </div>
        <a href="checkout.php" id="checkoutButton" class="checkout-button">Proceed to Checkout</a>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const paymentItems = JSON.parse(sessionStorage.getItem('paymentItems')) || [];
            const detailsContainer = document.getElementById('product-list');
            const checkoutButton = document.getElementById('checkoutButton');

            if (paymentItems.length > 0) {
                paymentItems.forEach((product, index) => {
                    const productElement = document.createElement('div');
                    productElement.classList.add('product-item');
                    productElement.innerHTML = `
                        <div class="product-details">
                            <p>Name: ${product.name}</p>
                            <p>Description: ${product.description}</p>
                            <p>Price: ₹${product.price}</p>
                            <img src="image/${product.image}" alt="${product.name}" width="200">
                            <div class="quantity-select">
                                <label for="quantity-${index}">Quantity:</label>
                                <select id="quantity-${index}" onchange="updateQuantity(${index}, this.value)">
                                    ${generateQuantityOptions(product.quantity)}
                                </select>
                            </div>
                        </div>
                    `;
                    detailsContainer.appendChild(productElement);
                });
            } else {
                detailsContainer.innerHTML = '<p>No products added to payment.</p>';
                checkoutButton.style.display = 'none'; 
            }

            function generateQuantityOptions(selectedQuantity) {
                let options = '';
                for (let i = 1; i <= 10; i++) {
                    options += `<option value="${i}" ${selectedQuantity === i ? 'selected' : ''}>${i}</option>`;
                }
                return options;
            }

            function updateQuantity(index, quantity) {
                let paymentItems = JSON.parse(sessionStorage.getItem('paymentItems')) || [];

                if (index >= 0 && index < paymentItems.length) {
                    paymentItems[index].quantity = parseInt(quantity, 10);
                    sessionStorage.setItem('paymentItems', JSON.stringify(paymentItems));
                }
            }
        });
    </script>
</body>
</html>
