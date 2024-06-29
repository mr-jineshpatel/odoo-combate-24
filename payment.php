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

        .delete-button {
            position: absolute;
            top: 8px;
            right: 8px;
            padding: 8px;
            background-color: #f44336;
            color: white;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease, transform 0.1s ease;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            line-height: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 36px;
            height: 36px;
        }

        .delete-button:hover {
            background-color: #d32f2f;
            transform: scale(1.1);
        }

        .delete-button:focus {
            outline: none;
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

        /* Modal styles */
        .modal-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }

        .confirmation-modal {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
            text-align: center;
        }

        .confirmation-modal p {
            margin-bottom: 20px;
        }

        .confirmation-modal button {
            margin: 0 10px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s ease;
        }

        .confirmation-modal button:hover {
            background-color: #45a049;
        }

        .calendar-container {
            margin-top: 10px;
            padding: 10px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
        }

        .calendar-container label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .calendar-container input[type="text"] {
            padding: 8px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: calc(100% - 16px);
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Payment Page</h1>
        <div id="product-list">
            <!-- Product details will be dynamically added here -->
        </div>
        <a href="checkout.php" class="checkout-button">Proceed to Checkout</a>
    </div>

    <div id="modal-overlay" class="modal-overlay">
        <div class="confirmation-modal">
            <p id="modal-message"></p>
            <button id="modal-proceed-btn">Go to Payment</button>
            <button id="modal-close-btn">Stay Here</button>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const paymentItems = JSON.parse(sessionStorage.getItem('paymentItems')) || [];
            const modalOverlay = document.getElementById('modal-overlay');
            const modalMessage = document.getElementById('modal-message');
            const modalProceedBtn = document.getElementById('modal-proceed-btn');
            const modalCloseBtn = document.getElementById('modal-close-btn');

            const detailsContainer = document.getElementById('product-list');

            if (paymentItems.length > 0) {
                displayProducts(paymentItems);
            } else {
                detailsContainer.innerHTML = '<p>No products added to payment.</p>';
            }

            modalProceedBtn.addEventListener('click', redirectToPayment);
            modalCloseBtn.addEventListener('click', closeModal);

            function displayProducts(products) {
                detailsContainer.innerHTML = ''; // Clear previous content

                products.forEach((product, index) => {
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
                        <button class="delete-button" onclick="openDeleteConfirmation(${index})">X</button>
                        <div class="calendar-container">
                            <label for="datepicker-start-${index}">Select Start Date:</label>
                            <input type="text" id="datepicker-start-${index}" class="datepicker" placeholder="Select start date">
                            <label for="datepicker-end-${index}">Select End Date:</label>
                            <input type="text" id="datepicker-end-${index}" class="datepicker" placeholder="Select end date">
                        </div>
                    `;
                    detailsContainer.appendChild(productElement);

                    // Initialize datepicker for start and end dates
                    const datepickerStart = document.getElementById(`datepicker-start-${index}`);
                    const datepickerEnd = document.getElementById(`datepicker-end-${index}`);
                    initializeDateRangePicker(datepickerStart, datepickerEnd);
                });
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

            function openDeleteConfirmation(index) {
                modalOverlay.style.display = 'flex';
                modalMessage.textContent = `Are you sure you want to delete ${paymentItems[index].name}?`;

                modalProceedBtn.onclick = function () {
                    removeProduct(index);
                    closeModal();
                };
            }

            function closeModal() {
                modalOverlay.style.display = 'none';
            }

            function redirectToPayment() {
                window.location.href = 'payment.php';
            }

            function removeProduct(index) {
                let paymentItems = JSON.parse(sessionStorage.getItem('paymentItems')) || [];

                if (index >= 0 && index < paymentItems.length) {
                    paymentItems.splice(index, 1);
                    sessionStorage.setItem('paymentItems', JSON.stringify(paymentItems));
                    displayProducts(paymentItems); // Update display after removing
                }
            }

            function initializeDateRangePicker(startInput, endInput) {
                $(startInput).datepicker({
                    dateFormat: "dd/mm/yy",
                    minDate: 0,
                    onSelect: function (selected) {
                        const endDate = new Date(selected);
                        endDate.setDate(endDate.getDate() + 1);
                        $(endInput).datepicker("option", "minDate", endDate);
                    }
                });

                $(endInput).datepicker({
                    dateFormat: "dd/mm/yy",
                    minDate: 1
                });
            }
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
</body>
</html>

