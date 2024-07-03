<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm phiếu nhập kho</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .product-table-container {
            height: 237px;
            /* Đặt chiều cao cố định cho phần Danh Sách Sản Phẩm */
            overflow-y: auto;
            /* Cho phép cuộn dọc khi vượt quá chiều cao */
        }
    </style>
</head>

@extends('layouts.app')
@section('content')
    <div style="height: 100%; width: 100%;">
        <div class="" style="height: 60%; width: 100%;">
            <div class="" style="height: 100%; width: 100%; display: flex">
                @include('layouts.sidebar')
                <div class="content w-full dark:bg-gray-900" style="height: 666px;">
                    <div class="relative shadow-md sm:rounded-lg" style="height: 100%;">

                        <div class="max-w mx-autop-8 rounded shadow" style="height: 100%;">
                            <h1 class="text-2xl font-bold mb-6 text-white px-5">Tạo Phiếu Nhập Kho</h1>
                            @if (session('success'))
                                <div class="bg-green-500 text-white p-4 mb-4">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <form id="warehouse-form" class="px-5" action="{{ route('imports.store') }}" method="POST">
                                @csrf
                                <div class="mb-4">
                                    <label for="receipt_id" class="block text-sm font-medium text-white">ID Phiếu</label>
                                    <input type="text" name="receipt_id" id="receipt_id"
                                        class="bg-gray-50 mt-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                </div>
                                <div class="mb-4">
                                    <label for="product_type" class="block text-sm font-medium text-white">Hành động</label>
                                    <p id="product_type"
                                        class="bg-gray-50 mt-2 border border-gray-300 text-gray-900 text-sm rounded-lg p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                                        Nhập kho</p>
                                </div>
                                <div class="mb-4">
                                    <label for="warehouse_id" class="block text-sm font-medium text-white">Chọn Kho</label>
                                    <select name="warehouse_id" id="warehouse_id"
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
                                            <select name="product_name" id="product_name"
                                                class="bg-gray-50 mr-2 mt-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                <option value="">Chọn sản phẩm</option>
                                                @foreach ($products as $product)
                                                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                                                @endforeach
                                            </select>
                                            <input type="number" id="product_quantity" placeholder="Số lượng"
                                                class="bg-gray-50 ml-2 mt-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                        </div>
                                    </div>
                                </div>
                                <button type="button" id="add-product"
                                    class="text-primary-700 inline-flex items-center border-2 border-primary-700 hover:bg-primary-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-primary-600 dark:hover:bg-primary-600 dark:hover:text-white dark:focus:ring-primary-800">
                                    <svg class="mr-1 -ml-1 w-6 h-6 text-primary-700 dark:text-primary-600" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
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
                                    Tạo phiếu
                                </button>
                                <!-- Ẩn input để lưu danh sách sản phẩm -->
                                <input type="hidden" name="products" id="products">
                            </form>
                            <div class="mt-6">
                                <h2 class="text-xl font-bold mb-4 text-white px-5">Danh Sách Sản Phẩm</h2>
                                <div class="product-table-container">
                                    <table
                                        class="px-5 w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 border-separate">
                                        <thead
                                            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>
                                                <th scope="col" class="px-6 py-3 border-b dark:border-gray-600">Tên Sản
                                                    Phẩm</th>
                                                <th scope="col" class="px-6 py-3 border-b dark:border-gray-600">Số Lượng
                                                </th>
                                                <th scope="col" class="px-6 py-3 border-b dark:border-gray-600">Thao Tác
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
    </div>
    <script>
        document.getElementById('add-product').addEventListener('click', function() {
            var productSelect = document.getElementById('product_name');
            var productName = productSelect.options[productSelect.selectedIndex].text;
            var productId = productSelect.value;
            var productQuantity = parseInt(document.getElementById('product_quantity').value);

            if (!productId || !productQuantity || productQuantity <= 0) {
                alert('Vui lòng nhập đầy đủ thông tin sản phẩm với số lượng hợp lệ.');
                return;
            }

            var tableBody = document.getElementById('product-table');
            var newRow = document.createElement('tr');

            newRow.innerHTML = `
            <td class="border px-4 py-2">${productName}</td>
            <td class="border px-4 py-2">${productQuantity}</td>
            <td class="border px-4 py-2">
                <button type="button" class="bg-red-500 text-white px-4 py-1 rounded" onclick="deleteProduct(this)">Xóa</button>
                <button type="button" class="bg-yellow-500 text-white px-4 py-1 rounded" onclick="editProduct(this)">Sửa</button>
            </td>
        `;
            tableBody.appendChild(newRow);

            updateProductList();

            // Reset các trường input sau khi thêm sản phẩm
            document.getElementById('product_name').value = '';
            document.getElementById('product_quantity').value = '';
        });

        function updateProductList() {
            var tableBody = document.getElementById('product-table');
            var products = [];
            for (var i = 0; i < tableBody.rows.length; i++) {
                var row = tableBody.rows[i];
                var productId = row.cells[0].getAttribute('data-id');
                var productQuantity = parseInt(row.cells[1].innerText);
                products.push({
                    id: productId,
                    quantity: productQuantity
                });
            }
            // Cập nhật danh sách sản phẩm trong thẻ input ẩn
            document.getElementById('products').value = JSON.stringify(products);
        }

        function deleteProduct(button) {
            var row = button.parentElement.parentElement;
            row.remove();
            updateProductList();
        }

        function editProduct(button) {
            var row = button.parentElement.parentElement;
            var productName = row.cells[0].innerText;
            var productQuantity = row.cells[1].innerText;

            // Đặt giá trị hiện tại vào các input
            document.getElementById('product_name').value = productName;
            document.getElementById('product_quantity').value = productQuantity;

            // Xóa hàng sản phẩm hiện tại
            row.remove();
            updateProductList();
        }
    </script>
@endsection

</html>
