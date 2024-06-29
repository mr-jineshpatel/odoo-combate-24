<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin-top: 0;
            margin-bottom: 20px;
            font-size: 24px;
        }
        .tabs {
            margin-bottom: 20px;
        }
        .tab {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border-radius: 5px 5px 0 0;
            cursor: pointer;
            margin-right: 10px;
        }
        .tab.active {
            background-color: #0056b3;
        }
        .tab-content {
            display: none;
        }
        .tab-content.active {
            display: block;
        }
        input[type="text"],
        input[type="number"],
        textarea,
        button,
        select,
        input[type="file"] {
            display: block;
            width: calc(100% - 16px);
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
        }
        button:hover {
            background-color: #0056b3;
        }
        #message {
            margin-top: 20px;
            padding: 10px;
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            border-radius: 5px;
            display: none;
            font-size: 16px;
        }
        @media screen and (max-width: 600px) {
            .container {
                margin: 20px auto;
                padding: 10px;
            }
            input[type="text"],
            input[type="number"],
            textarea,
            button,
            select,
            input[type="file"] {
                width: 100%;
                font-size: 14px;
            }
        }
        #productDetailsList {
            list-style-type: none;
            padding: 0;
        }
        #productDetailsList li {
            background-color: #fff;
            margin-bottom: 20px;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        #productDetailsList li ul {
            list-style-type: none;
            padding: 0;
        }
        #productDetailsList li ul li {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Admin Panel</h2>
        <div class="tabs">
            <div class="tab active" data-tab="add">Add Product</div>
            <div class="tab" data-tab="update">Update Product</div>
            <div class="tab" data-tab="delete">Delete Product</div>
            <div class="tab" data-tab="details">Product Details</div>
        </div>

        <div class="tab-content active" id="tab-add">
            <form id="addProductForm" enctype="multipart/form-data" method="post">
                <input type="text" name="name" placeholder="Product Title" required>
                <input type="number" name="price" placeholder="Product Price" required>
                <textarea name="description" placeholder="Product Description" required></textarea>
                <input type="file" name="image" accept="image/*" required>
                <button type="submit">Add Product</button>
            </form>
        </div>

        <div class="tab-content" id="tab-update">
            <form id="updateProductForm">
                <select id="productList" title="Select Product" onchange="fetchProductDetails()>
                    <!-- Options will be populated dynamically using JavaScript -->
                </select>
                <input type="text" id="updateTitle" placeholder="Product Title">
                <input type="number" id="updatePrice" placeholder="Product Price">
                <textarea id="updateDescription" placeholder="Product Description"></textarea>
                <input type="file" id="updateImage" accept="image/*">
                <button type="button" onclick="updateProduct()" title="Update Product">Update Product</button>
                <button type="submit" title="Go to Home"><a href="homepage.php" id="go-home-button">Go to Home</a></button>
            </form>
        </div>


        <div class="tab-content" id="tab-delete">
            <form id="deleteProductForm">
                <select id="deleteProductList"></select>
                <button type="button" onclick="deleteProduct()">Delete Product</button>
            </form>
        </div>

        <div class="tab-content" id="tab-details">
            <ul id="productDetailsList"></ul>
            <button onclick="fetchProductDetails()">Refresh</button>
        </div>

        <div id="message"></div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tabs = document.querySelectorAll('.tab');
            const tabContents = document.querySelectorAll('.tab-content');

            tabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    tabs.forEach(t => t.classList.remove('active'));
                    tab.classList.add('active');

                    const target = tab.getAttribute('data-tab');
                    tabContents.forEach(tc => {
                        tc.classList.remove('active');
                        if (tc.id === `tab-${target}`) {
                            tc.classList.add('active');
                        }
                    });
                });
            });

            fetchProductOptions();
        });

        function fetchProductOptions() {
            fetch('fetch_product_details.php')
                .then(response => response.json())
                .then(data => {
                    const productList = document.getElementById('productList');
                    const deleteProductList = document.getElementById('deleteProductList');
                    productList.innerHTML = '';
                    deleteProductList.innerHTML = '';
                    data.forEach(product => {
                        const option = document.createElement('option');
                        option.value = product.id;
                        option.textContent = product.name;
                        productList.appendChild(option);
                        deleteProductList.appendChild(option.cloneNode(true));
                    });
                })
                .catch(error => console.error('Error fetching product options:', error));
        }

        function fetchProductDetails() {
            fetch('fetch_product_details.php')
                .then(response => response.json())
                .then(data => {
                    const productDetailsList = document.getElementById('productDetailsList');
                    productDetailsList.innerHTML = '';
                    data.forEach(product => {
                        const li = document.createElement('li');
                        const img = document.createElement('img');
                        img.src = `image/${product.image}`;
                        img.alt = product.name;
                        img.style.maxWidth = '100px';
                        img.style.maxHeight = '100px';
                        li.appendChild(img);

                        const detailsDiv = document.createElement('div');
                        detailsDiv.classList.add('details');

                        const ul = document.createElement('ul');

                        const nameLi = document.createElement('li');
                        nameLi.textContent = `Name: ${product.name}`;
                        ul.appendChild(nameLi);

                        const priceLi = document.createElement('li');
                        priceLi.textContent = `Price: ${product.price}`;
                        ul.appendChild(priceLi);

                        const descriptionLi = document.createElement('li');
                        descriptionLi.textContent = `Description: ${product.description}`;
                        ul.appendChild(descriptionLi);

                        detailsDiv.appendChild(ul);
                        li.appendChild(detailsDiv);

                        productDetailsList.appendChild(li);
                    });
                })
                .catch(error => {
                    console.error('Error fetching product details:', error);
                    const productDetailsList = document.getElementById('productDetailsList');
                    productDetailsList.innerHTML = `<li>Error: ${error.message}</li>`;
                });
        }

        function updateProduct() {
    const productId = document.getElementById('productList').value;

    fetch(`fetch_product_details.php?id=${productId}`)
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            console.log('Received product data:', data); // Log received data
            document.getElementById('updateTitle').value = data.name;
            document.getElementById('updatePrice').value = data.price;
            document.getElementById('updateDescription').value = data.description;

            document.getElementById('message').textContent = 'Product details fetched successfully.';
            document.getElementById('message').style.display = 'block';
        })
        .catch(error => {
            console.error('Error fetching product details:', error);
            document.getElementById('message').textContent = 'Error fetching product details.';
            document.getElementById('message').style.display = 'block';
        });
}


        function updateProductDetails() {
            const productId = document.getElementById('productList').value;
            const formData = new FormData(document.getElementById('updateProductForm'));
            formData.append('id', productId);

            fetch('updateprod.php', {
                method: 'POST',
                body: formData
            })
                .then(response => response.json())
                .then(data => {
                    document.getElementById('message').textContent = 'Update successful!';
                    document.getElementById('message').style.display = 'block';
                })
                .catch(error => {
                    console.error('Error updating product:', error);
                    document.getElementById('message').textContent = 'Error updating product.';
                    document.getElementById('message').style.display = 'block';
                });
        }




        function deleteProduct() {
            const productId = document.getElementById('deleteProductList').value;

            fetch('deleteprod.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: `id=${productId}`
            })
            .then(response => response.text())
            .then(data => {
                document.getElementById('message').textContent = 'Delete successful!';
                document.getElementById('message').style.display = 'block';
                fetchProductOptions();
                fetchProductDetails();
            })
            .catch(error => {
                console.error('Error deleting product:', error);
                document.getElementById('message').textContent = 'Error deleting product.';
                document.getElementById('message').style.display = 'block';
            });
        }

        document.getElementById('addProductForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const formData = new FormData(this);

            fetch('addprod.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                document.getElementById('message').textContent = 'Product added successfully!';
                document.getElementById('message').style.display = 'block';
                fetchProductOptions();
                fetchProductDetails();
            })
            .catch(error => {
                console.error('Error adding product:', error);
                document.getElementById('message').textContent = 'Error adding product.';
                document.getElementById('message').style.display = 'block';
            });
        });
    </script>
</body>
</html>
