<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cập nhật sản phẩm</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* CSS tùy chỉnh cho thanh cuộn */
        .overflow-auto::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }

        .overflow-auto::-webkit-scrollbar-track {
            background: #333;
        }

        .overflow-auto::-webkit-scrollbar-thumb {
            background-color: #555;
            border-radius: 3px;
        }

        .overflow-auto::-webkit-scrollbar-thumb:hover {
            background-color: #777;
        }
    </style>
</head>

@extends('layouts.app')

@section('content')
    <div class="flex h-full w-full mb-10">
        @include('layouts.sidebar')
        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data"
            class="w-full px-5">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-2 gap-4 mb-4">
                <!-- Form Fields -->
                <div>
                    <label for="id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mã sản
                        phẩm</label>
                    <input type="text" name="id" id="id" value="{{ $product->id }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="" required readonly>
                </div>
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tên sản
                        phẩm</label>
                    <input type="text" name="name" id="name" value="{{ $product->name }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="" required>
                </div>
                <div>
                    <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Thương
                        hiệu</label>
                    <input type="text" name="brand" id="brand" value="{{ $product->brand }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="" required>
                </div>
                <div class="mb-4">
                    <label for="price" class="block text-sm font-medium text-gray-700">Giá</label>
                    <div class="relative mt-2 rounded-md shadow-sm">
                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                            <span class="text-gray-500 sm:text-sm">₫</span>
                        </div>
                        <input type="hidden" name="price_numeric" id="price_numeric"
                            value="{{ old('price_numeric', $product->price) }}">
                        <input type="text" name="price" id="price" value="{{ number_format($product->price) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 pl-7 pr-12 text-right dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="0" aria-describedby="price-currency" required>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                            <span class="text-gray-500 sm:text-sm" id="price-currency">VNĐ</span>
                        </div>
                    </div>
                    @error('price')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-span-2">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Danh mục sản phẩm</label>
                    <div class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white overflow-auto"
                        style="max-height: 125px;">
                        <div class="grid grid-cols-2 gap-4 mb-2">
                            @foreach ($categories as $category)
                                <div class="flex items-center mb-2">
                                    <input type="checkbox" id="category-{{ $category->id }}" name="category[]"
                                        value="{{ $category->id }}"
                                        {{ $product->categories->contains($category->id) ? 'checked' : '' }} class="mr-2">
                                    <label for="category-{{ $category->id }}">{{ $category->name }}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mô tả sản
                        phẩm</label>
                    <textarea id="description" name="description" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Mô tả...">{{ $product->description }}</textarea>
                </div>
                <div class="col-span-2">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Chọn kho</label>
                    <div class="grid grid-cols-2 gap-4 mb-2">
                        @foreach ($warehouses as $warehouse)
                            <div class="mb-4">
                                <label
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ $warehouse->name }}</label>
                                <?php
                                $inventory = $warehouses_inventory->where('warehouse_id', $warehouse->id)->first();
                                $quantity = $inventory ? $inventory->quantity : 0;
                                ?>
                                <input type="number" name="warehouse_quantity[{{ $warehouse->id }}]"
                                    id="warehouse_quantity_{{ $warehouse->id }}" value="{{ $quantity }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Số lượng">
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="mb-4">
                    <label for="image_path" class="block text-sm font-medium text-gray-900 dark:text-white">Hình ảnh</label>
                    <input type="file" name="image_path" id="image_path"
                        class="mt-1 block w-full text-sm text-gray-500 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500">
                    <div id="image-preview" class="mt-2">
                        <p id="new-image-message" style="display: none;"
                            class="mt-10 block text-sm font-medium text-gray-900 dark:text-white">Ảnh mới</p>
                        <img id="preview" style="display: none; max-width: 200px;" />
                    </div>
                    <p id="message" class="text-red-500 text-sm mt-2"></p>
                    @if ($product->image_path)
                        <div class="mt-2">
                            <p class="mt-10 block text-sm font-medium text-gray-900 dark:text-white">Ảnh cũ</p>
                            <img src="{{ asset($product->image_path) }}" alt="Product Image" class="mt-2"
                                style="max-width: 200px;">
                        </div>
                    @endif
                    @error('image_path')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <button type="submit"
                class="text-primary-700 inline-flex items-center border-2 border-primary-700 hover:bg-primary-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-primary-500 dark:text-primary-500 dark:hover:text-white dark:hover:bg-primary-600 dark:focus:ring-primary-800">
                <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"></path>
                </svg>
                Cập nhật sản phẩm
            </button>
            <button type="button"
                class="text-red-500 inline-flex items-center border-2 border-red-500 hover:bg-red-600 hover:border-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-red-600 dark:hover:bg-red-700 dark:hover:border-red-700 dark:focus:ring-red-800"
                onclick="confirmDelete()">
                <svg class="mr-1 -ml-1 w-6 h-6 text-red-500 dark:text-red-600" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                    viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M6 18 17.94 6M18 18 6.06 6" />
                </svg>
                Xóa sản phẩm
            </button>

        </form>
        <form id="deleteForm" action="{{ route('products.destroy', $product->id) }}" method="POST"
            style="display: none;">
            @csrf
            @method('DELETE')
        </form>

    </div>

    <!-- Cropper.js -->
    <link rel="stylesheet" href="https://unpkg.com/cropperjs/dist/cropper.min.css">
    <script src="https://unpkg.com/cropperjs/dist/cropper.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const priceInput = document.getElementById('price');
            const priceNumericInput = document.getElementById('price_numeric');

            function formatInputValue(value) {
                if (!value || isNaN(value)) {
                    return '';
                }
                return new Intl.NumberFormat('vi-VN').format(value);
            }

            function parseFormattedValue(value) {
                return value.replace(/[^\d]/g, '');
            }

            priceInput.addEventListener('input', function() {
                let value = parseFormattedValue(priceInput.value);
                priceNumericInput.value = value;
                priceInput.value = formatInputValue(value);
            });

            priceInput.addEventListener('blur', function() {
                let value = priceNumericInput.value;
                priceInput.value = formatInputValue(value);
            });

            let value = priceNumericInput.value;
            priceInput.value = formatInputValue(value);
        });

        document.addEventListener('DOMContentLoaded', function() {
            const imageInput = document.getElementById('image_path');
            const previewImage = document.getElementById('preview');
            const message = document.getElementById('message');
            const newImageMessage = document.getElementById('new-image-message');

            imageInput.addEventListener('change', function() {
                const file = imageInput.files[0];
                if (file) {
                    const reader = new FileReader();

                    reader.onload = function(event) {
                        const img = new Image();
                        img.src = event.target.result;
                        img.onload = function() {
                            const width = img.width;
                            const height = img.height;

                            if (width === height) {
                                previewImage.src = img.src;
                                previewImage.style.display = 'block';
                                message.textContent = '';
                                newImageMessage.style.display = 'block';

                            } else {
                                message.textContent = 'Ảnh không phải tỷ lệ 1:1';
                                previewImage.style.display =
                                'none'; // Hide the preview if not 1:1 ratio
                                imageInput.value = ''; // Clear the input value
                                newImageMessage.style.display = 'none';
                            }
                        };
                    };

                    reader.readAsDataURL(file);
                }
            });
        });
        function confirmDelete() {
            if (confirm('Bạn có chắc chắn muốn xóa loại sản phẩm này không?')) {
                document.getElementById('deleteForm').submit();
            }
        }

    </script>
@endsection

</html>
