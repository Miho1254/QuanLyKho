<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Xuất kho</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>

@extends('layouts.app')
@section('content')
    <div style="height: 100%; width: 100%;">
        <div class="" style="height: 60%; width: 100%;">
            <div class="" style="height: 100%; width: 100%; display: flex">
                @include('layouts.sidebar')
                <div class=" content w-full dark:bg-gray-900">
                    <div class="relative shadow-md sm:rounded-lg">

                        <div class="max-w mx-autop-8 rounded shadow">
                            <h1 class="text-2xl font-bold mb-6 text-white">Tạo Phiếu Nhập Kho</h1>
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
                                    <label for="product_type" class="block text-sm font-medium text-white">Loại Sản Phẩm</label>
                                    <select name="product_type" id="product_type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                        <option value="Loại sản phẩm 1">Loại sản phẩm 1</option>
                                        <option value="Loại sản phẩm 2">Loại sản phẩm 2</option>
                                        <option value="Loại sản phẩm 3">Loại sản phẩm 3</option>
                                        <!-- Thêm các loại sản phẩm khác vào đây -->
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label for="products" class="block text-sm font-medium text-white">Sản Phẩm</label>
                                    <div id="product-list">
                                        <div class="flex mb-2">
                                            <select name="product_name" id="product_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                <option value="Sản phẩm 1">Sản phẩm 1</option>
                                                <option value="Sản phẩm 2">Sản phẩm 2</option>
                                                <option value="Sản phẩm 3">Sản phẩm 3</option>
                                                <!-- Thêm các sản phẩm khác vào đây -->
                                            </select>
                                            <input type="number" id="product_quantity" placeholder="Số lượng" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                        </div> 
                                    </div>
                                </div>
                                <button type="button" id="add-product" class="ml-2 px-4 py-2 bg-blue-500 text-white rounded shadow">Thêm sản phẩm</button>
                                <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded shadow">Tạo Phiếu</button>
                            </form>
                            <div class="mt-6">
                                <h2 class="text-xl font-bold mb-4 text-white">Danh Sách Sản Phẩm</h2>
                                <table class="px-5 w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 border-separate">
                                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 border-b dark:border-gray-600">Loại Sản Phẩm</th>
                                            <th scope="col" class="px-6 py-3 border-b dark:border-gray-600">Tên Sản Phẩm</th>
                                            <th scope="col" class="px-6 py-3 border-b dark:border-gray-600">Số Lượng</th>
                                            <th scope="col" class="px-6 py-3 border-b dark:border-gray-600">Tổng Tiền</th>
                                            <th scope="col" class="px-6 py-3 border-b dark:border-gray-600">Thao Tác</th>
                                        </tr>
                                    </thead>
                                    <tbody id="product-table">
                                        <!-- Các sản phẩm sẽ được thêm vào đây -->
                                    </tbody>
                                </table>
                                <div class=" px-5 text-right mt-4 text-white">
                                    <strong>Tổng Tiền:</strong> <span id="total-amount">0</span> VND
                                </div>
                            </div>
                        </div>
                    
                        <script>
                            document.getElementById('add-product').addEventListener('click', function() {
                                var productName = document.getElementById('product_name').value;
                                var productQuantity = parseInt(document.getElementById('product_quantity').value);
                                var productType = document.getElementById('product_type').value;
                    
                                if (!productName || !productQuantity || productQuantity <= 0) {
                                    alert('Vui lòng nhập đầy đủ thông tin sản phẩm với số lượng hợp lệ.');
                                    return;
                                }
                    
                                var tableBody = document.getElementById('product-table');
                                var newRow = document.createElement('tr');
                    
                                newRow.innerHTML = `
                                    <td class="border px-4 py-2">${productType}</td>
                                    <td class="border px-4 py-2">${productName}</td>
                                    <td class="border px-4 py-2">${productQuantity}</td>
                                    <td class="border px-4 py-2"></td>
                                    <td class="border px-4 py-2">
                                        <button type="button" class="bg-blue-500 text-white px-4 py-1 rounded mr-2" onclick="editProduct(this)">Sửa</button>
                                        <button type="button" class="bg-red-500 text-white px-4 py-1 rounded" onclick="deleteProduct(this)">Xóa</button>
                                    </td>
                                `;
                                tableBody.appendChild(newRow);
                    
                                updateTotalAmount();
                    
                                // Clear the inputs after adding the product
                                document.getElementById('product_name').value = '';
                                document.getElementById('product_quantity').value = '';
                            });
                    
                            function updateTotalAmount() {
                                var tableBody = document.getElementById('product-table');
                                var rows = tableBody.getElementsByTagName('tr');
                                var totalAmount = 0;
                    
                                for (var i = 0; i < rows.length; i++) {
                                    var cells = rows[i].getElementsByTagName('td');
                                    var productTotal = parseFloat(cells[3].textContent);
                                    totalAmount += productTotal;
                                }
                    
                                document.getElementById('total-amount').textContent = totalAmount;
                            }
                    
                            function editProduct(button) {
                                var row = button.closest('tr');
                                var cells = row.getElementsByTagName('td');
                                var productType = cells[0].textContent;
                                var productName = cells[1].textContent;
                                var productQuantity = cells[2].textContent;
                    
                                // Populate form with selected product data
                                document.getElementById('product_type').value = productType;
                                document.getElementById('product_name').value = productName;
                                document.getElementById('product_quantity').value = productQuantity;
                    
                                // Remove the current row from table
                                row.remove();
                                updateTotalAmount();
                            }
                    
                            function deleteProduct(button) {
                                var row = button.closest('tr');
                                var cells = row.getElementsByTagName('td');
                                var productTotal = parseFloat(cells[3].textContent);
                    
                                // Remove the current row from table
                                row.remove();
                    
                                // Update total amount
                                var currentTotalAmount = parseFloat(document.getElementById('total-amount').textContent);
                                var newTotalAmount = currentTotalAmount - productTotal;
                                document.getElementById('total-amount').textContent = newTotalAmount;
                            }
                    
                            document.getElementById('warehouse-form').addEventListener('submit', function(event) {
                                // Add hidden inputs for each product to send with the form
                                var tableBody = document.getElementById('product-table');
                                var rows = tableBody.getElementsByTagName('tr');
                                var form = event.target;
                    
                                for (var i = 0; i < rows.length; i++) {
                                    var cells = rows[i].getElementsByTagName('td');
                                    var productType = cells[0].textContent;
                                    var productName = cells[1].textContent;
                                    var productQuantity = cells[2].textContent;
                    
                                    var productTypeInput = document.createElement('input');
                                    productTypeInput.type = 'hidden';
                                    productTypeInput.name = 'products[' + i + '][type]';
                                    productTypeInput.value = productType;
                    
                                    var productNameInput = document.createElement('input');
                                    productNameInput.type = 'hidden';
                                    productNameInput.name = 'products[' + i + '][name]';
                                    productNameInput.value = productName;
                    
                                    var productQuantityInput = document.createElement('input');
                                    productQuantityInput.type = 'hidden';
                                    productQuantityInput.name = 'products[' + i + '][quantity]';
                                    productQuantityInput.value = productQuantity;
                    
                                    form.appendChild(productTypeInput);
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
