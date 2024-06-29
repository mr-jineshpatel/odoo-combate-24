<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wishlist</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        #wishlist-container {
            margin: 20px;
            padding: 20px;
        }

        .wishlist-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease-in-out;
            padding: 10px;
        }

        .wishlist-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .wishlist-item img {
            max-width: 120px;
            margin-right: 20px;
            border-radius: 5px;
        }

        .wishlist-item-info {
            flex-grow: 1;
            padding: 10px;
        }

        .wishlist-item h3 {
            margin-top: 0;
            margin-bottom: 10px;
            color: #333;
        }

        .wishlist-item p {
            margin: 0;
            color: #666;
        }

        .wishlist-item .remove-btn {
            background-color: #ff5f6d;
            color: #fff;
            border: none;
            padding: 8px 12px;
            border-radius: 50%;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .wishlist-item .remove-btn:hover {
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
        #previous-button {
            position: absolute;
            top: 20px;
            left: 20px;
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <button id="previous-button" onclick="window.history.back()">
        <i class="fa fa-arrow-left" aria-hidden="true"></i> </button>

    <h1 style="text-align: center; margin-top: 50px;">Wishlist</h1>
    <div id="wishlist-container"></div>
    <div class="popup" id="popup">Product removed from wishlist</div>

    <script>
        function removeFromWishlist(index) {
            const wishlistItems = JSON.parse(localStorage.getItem('wishlistItems')) || [];

            wishlistItems.splice(index, 1);

            localStorage.setItem('wishlistItems', JSON.stringify(wishlistItems));

            displayWishlistItems();

            const popup = document.getElementById('popup');
            popup.classList.add('show');
            setTimeout(function() {
                popup.classList.remove('show');
            }, 2000);
        }

        function displayWishlistItems() {
            const wishlistItems = JSON.parse(localStorage.getItem('wishlistItems')) || [];
            const wishlistContainer = document.getElementById('wishlist-container');
            wishlistContainer.innerHTML = '';
            if (wishlistItems.length === 0) {
                wishlistContainer.innerHTML = '<p style="text-align: center; color: #666;">Your wishlist is empty.</p>';
            } else {
                wishlistItems.forEach((item, index) => {
                    const wishlistItemDiv = document.createElement('div');
                    wishlistItemDiv.classList.add('wishlist-item');

                    const imageElement = document.createElement('img');
                    imageElement.src = item.image;
                    imageElement.alt = item.name;

                    const infoDiv = document.createElement('div');
                    infoDiv.classList.add('wishlist-item-info');

                    const nameHeading = document.createElement('h3');
                    nameHeading.textContent = item.name;

                    const descriptionPara = document.createElement('p');
                    descriptionPara.textContent = item.description;

                    const pricePara = document.createElement('p');
                    pricePara.textContent = 'Price: ₹' + item.price;

                    const removeButton = document.createElement('button');
                    removeButton.classList.add('remove-btn');
                    removeButton.innerHTML = '<i class="fa fa-trash" aria-hidden="true"></i>';
                    removeButton.onclick = function() {
                        removeFromWishlist(index);
                    };

                    infoDiv.appendChild(nameHeading);
                    infoDiv.appendChild(descriptionPara);
                    infoDiv.appendChild(pricePara);
                    wishlistItemDiv.appendChild(imageElement);
                    wishlistItemDiv.appendChild(infoDiv);
                    wishlistItemDiv.appendChild(removeButton);

                    wishlistContainer.appendChild(wishlistItemDiv);
                });
            }
        }

        window.onload = function() {
            displayWishlistItems();
        };
    </script>
</body>
</html>
