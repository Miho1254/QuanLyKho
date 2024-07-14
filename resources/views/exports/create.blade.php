<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm phiếu xuất kho</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
    @extends('layouts.app')

    @section('content')
        <div style="height: 100%; width: 100%;">
            <div class="" style="height: 60%; width: 100%;">
                <div class="" style="height: 100%; width: 100%; display: flex">
                    @include('layouts.sidebar')
                    <div class="content w-full dark:bg-gray-900" style="min-height: 666px;">
                        <div class="relative shadow-md sm:rounded-lg" style="height: 100%;">
                            <div class="max-w mx-autop-8 rounded shadow" style="height: 100%;">
                                <h1 class="text-2xl font-bold mb-6 text-white px-5">Tạo Phiếu Xuất Kho</h1>
                                @if (session('error'))
                                    <div class="bg-red-500 text-white p-4 mb-4">
                                        {{ session('error') }}
                                    </div>
                                @endif

                                @if (session('success'))
                                    <div class="bg-green-500 text-white p-4 mb-4">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <form id="exports-form" class="px-5" action="{{ route('exports.store') }}" method="POST">
                                    @csrf
                                    <div class="mb-4">
                                        <label for="id" class="block text-sm font-medium text-white">ID Phiếu</label>
                                        <input type="text" name="id" id="id"
                                            class="bg-gray-50 mt-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    </div>
                                    <div class="mb-4">
                                        <label for="product_type" class="block text-sm font-medium text-white">Hành
                                            động</label>
                                        <p id="product_type"
                                            class="bg-gray-50 mt-2 border border-gray-300 text-gray-900 text-sm rounded-lg p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                                            Xuất kho
                                        </p>
                                    </div>
                                    <div class="mb-4">
                                        <label for="warehouse_id" class="block text-sm font-medium text-white">Chọn
                                            Kho</label>
                                        <select id="warehouse" name="warehouse_id" required
                                            class="bg-gray-50 mt-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                            <option value="">Chọn kho</option>
                                            @foreach ($warehouses as $warehouse)
                                                <option value="{{ $warehouse->id }}">{{ $warehouse->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-4">
                                        <label for="products" class="block text-sm font-medium text-white">Sản Phẩm</label>
                                        <div id="product-list">
                                            <div class="flex mb-2">
                                                <select id="product"
                                                    class="bg-gray-50 mr-2 mt-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                    <option value="">Chọn sản phẩm</option>
                                                </select>
                                                <input type="number" id="product_quantity" placeholder="Số lượng"
                                                    class="bg-gray-50 ml-2 mt-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                            </div>
                                            <p id="product-quantity-info" class="text-white"></p>
                                        </div>
                                    </div>
                                    <button type="button" id="add-product"
                                        class="text-primary-700 inline-flex items-center border-2 border-primary-700 hover:bg-primary-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-primary-600 dark:hover:bg-primary-600 dark:hover:text-white dark:focus:ring-primary-800">
                                        <svg class="mr-1 -ml-1 w-6 h-6 text-primary-700 dark:text-primary-600"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z">
                                            </path>
                                        </svg>
                                        Thêm sản phẩm
                                    </button>
                                    <button type="submit"
                                        class="text-green-400 inline-flex items-center border-2 border-green-400 hover:bg-green-400 hover:text-white focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-green-400 dark:hover:bg-green-400 dark:hover:text-white dark:focus:ring-green-300">
                                        <svg class="mr-1 -ml-1 w-6 h-6 text-green-400 dark:text-green-400" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z">
                                            </path>
                                        </svg>
                                        Lưu
                                    </button>
                                    <!-- Ẩn input để lưu danh sách sản phẩm -->
                                    <input type="hidden" name="products" id="products">
                                </form>
                                <div class="mt-6 mb-6">
                                    <h2 class="text-xl font-bold mb-4 text-white px-5">Danh Sách Sản Phẩm</h2>
                                    <div class="product-table-container">
                                        <table
                                            class="px-5 w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 border-separate">
                                            <thead
                                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                                <tr>
                                                    <th scope="col" class="px-6 py-3 border-b dark:border-gray-600">ID
                                                        Sản Phẩm
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 border-b dark:border-gray-600">Tên
                                                        Sản Phẩm
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 border-b dark:border-gray-600">Số
                                                        Lượng
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 border-b dark:border-gray-600">Thao
                                                        Tác
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody id="product-table">
                                                <!-- Các sản phẩm sẽ được thêm vào đây -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const warehouseSelect = document.getElementById('warehouse');
                    const productSelect = document.getElementById('product');
                    const quantityInput = document.getElementById('product_quantity');
                    const quantityInfo = document.getElementById('product-quantity-info');
                    const addButton = document.getElementById('add-product');
                    const productTable = document.getElementById('product-table');
                    const productsInput = document.getElementById('products');
                    const exportsForm = document.getElementById('exports-form');
                    let products = [];

                    warehouseSelect.addEventListener('change', function() {
                        var warehouseId = this.value;

                        fetch(`/exports/warehouse/${warehouseId}/products`)
                            .then(response => response.json())
                            .then(data => {
                                console.log('Products data:', data); // Log the data for debugging
                                productSelect.innerHTML = '<option value="">Chọn sản phẩm</option>';
                                data.forEach(product => {
                                    var option = document.createElement('option');
                                    option.value = product.id;
                                    option.text = product.name; // Chỉ hiển thị tên sản phẩm
                                    option.dataset.quantity = product.quantity; // Lưu trữ số lượng dưới dạng dữ liệu tùy chỉnh
                                    productSelect.appendChild(option);
                                });
                            })
                            .catch(error => console.error('Error fetching products:', error));
                    });

                    productSelect.addEventListener('change', function() {
                        const selectedOption = productSelect.options[productSelect.selectedIndex];
                        const availableQuantity = selectedOption.dataset.quantity || 'Không xác định';
                        quantityInfo.textContent = `Số lượng có sẵn: ${availableQuantity}`;
                    });

                    addButton.addEventListener('click', function() {
                        const warehouseId = warehouseSelect.value;
                        const productId = productSelect.value;
                        const productName = productSelect.options[productSelect.selectedIndex].text;
                        const productQuantity = parseInt(quantityInput.value);
                        const availableQuantity = parseInt(productSelect.options[productSelect.selectedIndex].dataset.quantity);

                        if (!productId) {
                            alert('Vui lòng chọn sản phẩm.');
                            return;
                        }

                        if (productQuantity <= 0 || isNaN(productQuantity)) {
                            alert('Vui lòng nhập số lượng hợp lệ.');
                            return;
                        }

                        if (productQuantity > availableQuantity) {
                            alert('Số lượng nhập không được vượt quá số lượng có sẵn.');
                            return;
                        }

                        const existingProduct = products.find(product => product.product_id === productId);

                        if (existingProduct) {
                            alert('Sản phẩm đã tồn tại trong danh sách. Vui lòng chọn sản phẩm khác hoặc chỉnh sửa số lượng.');
                            return;
                        }

                        products.push({
                            product_id: productId,
                            name: productName,
                            quantity: productQuantity
                        });

                        renderProductTable();
                        updateProductsInput();

                        console.log('Products:', products);

                        // Reset product selection and quantity input
                        productSelect.value = '';
                        quantityInput.value = '';
                        quantityInfo.textContent = '';
                    });

                    function updateProductsInput() {
                        productsInput.value = JSON.stringify(products);
                        console.log('Hidden products input value:', productsInput.value);
                    }

                    function renderProductTable() {
                        productTable.innerHTML = '';
                        products.forEach(product => {
                            const row = document.createElement('tr');
                            row.innerHTML = `
                                <td class="px-6 py-3 border-b dark:border-gray-600">${product.product_id}</td>
                                <td class="px-6 py-3 border-b dark:border-gray-600">${product.name}</td>
                                <td class="px-6 py-3 border-b dark:border-gray-600">${product.quantity}</td>
                                <td class="px-6 py-3 border-b dark:border-gray-600">
                                    <button class="edit-product text-blue-500 hover:underline mr-2" data-product-id="${product.product_id}">Sửa</button>
                                    <button class="delete-product text-red-500 hover:underline" data-product-id="${product.product_id}">Xóa</button>
                                </td>
                            `;
                            productTable.appendChild(row);
                        });

                        const editButtons = document.querySelectorAll('.edit-product');
                        const deleteButtons = document.querySelectorAll('.delete-product');

                        editButtons.forEach(button => {
                            button.addEventListener('click', handleEditProduct);
                        });

                        deleteButtons.forEach(button => {
                            button.addEventListener('click', handleDeleteProduct);
                        });
                    }

                    function handleEditProduct(event) {
                        const productId = event.target.dataset.productId;
                        const product = products.find(product => product.product_id === productId);

                        if (product) {
                            productSelect.value = product.product_id;
                            quantityInput.value = product.quantity;

                            products = products.filter(product => product.product_id !== productId);

                            renderProductTable();
                            updateProductsInput();
                        }
                    }

                    function handleDeleteProduct(event) {
                        const productId = event.target.dataset.productId;

                        products = products.filter(product => product.product_id !== productId);

                        renderProductTable();
                        updateProductsInput();
                    }

                    exportsForm.addEventListener('submit', function(event) {
                        updateProductsInput();
                        console.log('Submitting form with products:', productsInput.value);
                    });
                });
            </script>
        </div>
    @endsection

</html>
