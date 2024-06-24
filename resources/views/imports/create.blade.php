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
            height: 237px; /* Đặt chiều cao cố định cho phần Danh Sách Sản Phẩm */
            overflow-y: auto; /* Cho phép cuộn dọc khi vượt quá chiều cao */
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
                            @if(session('success'))
                                <div class="bg-green-500 text-white p-4 mb-4">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <form id="warehouse-form" class="px-5" action="#" method="POST">
                                @csrf
                                <div class="mb-4">
                                    <label for="receipt_id" class="block text-sm font-medium text-white">ID Phiếu</label>
                                    <input type="text" name="receipt_id" id="receipt_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                </div>
                                <div class="mb-4">  
                                    <label for="product_type" class="block text-sm font-medium text-white">Hành động</label>
                                    <p id="product_type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">Nhập kho</p>
                                </div>
                                <div class="mb-4">
                                    <label for="products" class="block text-sm font-medium text-white">Sản Phẩm</label>
                                    <div id="product-list">
                                        <div class="flex mb-2">
                                            <select name="product_name" id="product_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                <option value="">Chọn sản phẩm</option>
                                                <option value="Sản phẩm 1">Sản phẩm 1</option>
                                                <option value="Sản phẩm 2">Sản phẩm 2</option>
                                                <option value="Sản phẩm 3">Sản phẩm 3</option>
                                                <!-- Thêm các sản phẩm khác vào đây -->
                                            </select>
                                            <input type="number" id="product_quantity" placeholder="Số lượng" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                        </div> 
                                    </div>
                                </div>
                                <button type="submit" class="text-primary-700 inline-flex items-center border-2 border-primary-700 hover:bg-primary-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-primary-600 dark:hover:bg-primary-600 dark:hover:text-white dark:focus:ring-primary-800">
                                    <svg class="mr-1 -ml-1 w-6 h-6 text-primary-700 dark:text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"></path>
                                    </svg>
                                    Thêm sản phẩm
                                </button>                                
                                <button type="submit" class="text-green-400 inline-flex items-center border-2 border-green-400 hover:bg-green-400 hover:text-white focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-green-400 dark:hover:bg-green-400 dark:hover:text-white dark:focus:ring-green-300">
                                    <svg class="mr-1 -ml-1 w-6 h-6 text-green-400 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"></path>
                                    </svg>
                                    Tạo phiếu
                                </button>
                        </form>
                            <div class="mt-6">
                                <h2 class="text-xl font-bold mb-4 text-white px-5">Danh Sách Sản Phẩm</h2>
                                <div class="product-table-container">
                                    <table class="px-5 w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 border-separate">
                                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>
                                                <th scope="col" class="px-6 py-3 border-b dark:border-gray-600">Tên Sản Phẩm</th>
                                                <th scope="col" class="px-6 py-3 border-b dark:border-gray-600">Số Lượng</th>
                                                <th scope="col" class="px-6 py-3 border-b dark:border-gray-600">Thao Tác</th>
                                            </tr>
                                        </thead>
                                        <tbody id="product-table">
                                            <!-- Các sản phẩm sẽ được thêm vào đây -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    
                        <script>
                            document.getElementById('add-product').addEventListener('click', function() {
                                var productName = document.getElementById('product_name').value;
                                var productQuantity = parseInt(document.getElementById('product_quantity').value);
                    
                                if (!productName || !productQuantity || productQuantity <= 0) {
                                    alert('Vui lòng nhập đầy đủ thông tin sản phẩm với số lượng hợp lệ.');
                                    return;
                                }
                    
                                var tableBody = document.getElementById('product-table');
                                var newRow = document.createElement('tr');
                    
                                newRow.innerHTML = `
                                    <td class="border px-4 py-2">${productName}</td>
                                    <td class="border px-4 py-2">${productQuantity}</td>
                                    <td class="border px-4 py-2">
                                        <button type="button" class="bg-blue-500 text-white px-4 py-1 rounded mr-2" onclick="editProduct(this)">Sửa</button>
                                        <button type="button" class="bg-red-500 text-white px-4 py-1 rounded" onclick="deleteProduct(this)">Xóa</button>
                                    </td>
                                `;
                                tableBody.appendChild(newRow);
                    
                                // Sắp xếp lại bảng
                                sortTable();
                    
                                // Clear the inputs after adding the product
                                document.getElementById('product_name').value = '';
                                document.getElementById('product_quantity').value = '';
                            });
                    
                            function sortTable() {
                                var tableBody = document.getElementById('product-table');
                                var rows = Array.from(tableBody.rows);
                                rows.sort(function(a, b) {
                                    var productNameA = a.cells[0].innerText.toUpperCase();
                                    var productNameB = b.cells[0].innerText.toUpperCase();
                                    return (productNameA < productNameB) ? -1 : (productNameA > productNameB) ? 1 : 0;
                                });
                                rows.forEach(function(row) {
                                    tableBody.appendChild(row);
                                });
                            }
                    
                            function editProduct(button) {
                                var row = button.closest('tr');
                                var cells = row.getElementsByTagName('td');
                                var productName = cells[0].textContent;
                                var productQuantity = cells[1].textContent;
                    
                                // Populate form with selected product data
                                document.getElementById('product_name').value = productName;
                                document.getElementById('product_quantity').value = productQuantity;
                    
                                // Remove the current row from table
                                row.remove();
                            }
                    
                            function deleteProduct(button) {
                                var row = button.closest('tr');
                                row.remove();
                            }
                    
                            document.getElementById('warehouse-form').addEventListener('submit', function(event) {
                                // Add hidden inputs for each product to send with the form
                                var tableBody = document.getElementById('product-table');
                                var rows = tableBody.getElementsByTagName('tr');
                                var form = event.target;
                    
                                for (var i = 0; i < rows.length; i++) {
                                    var cells = rows[i].getElementsByTagName('td');
                                    var productName = cells[0].textContent;
                                    var productQuantity = cells[1].textContent;
                    
                                    var productNameInput = document.createElement('input');
                                    productNameInput.type = 'hidden';
                                    productNameInput.name = 'products[' + i + '][name]';
                                    productNameInput.value = productName;
                    
                                    var productQuantityInput = document.createElement('input');
                                    productQuantityInput.type = 'hidden';
                                    productQuantityInput.name = 'products[' + i + '][quantity]';
                                    productQuantityInput.value = productQuantity;
                    
                                    form.appendChild(productNameInput);
                                    form.appendChild(productQuantityInput);
                                }
                            });
                        </script>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

</html>
