<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm sản phẩm</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* CSS tùy chỉnh cho thanh cuộn */
        .overflow-auto::-webkit-scrollbar {
            width: 6px;
            /* Chiều rộng thanh cuộn */
            height: 6px;
            /* Chiều cao thanh cuộn */
        }

        .overflow-auto::-webkit-scrollbar-track {
            background: #333;
            /* Màu nền của track trong chủ đề tối */
        }

        .overflow-auto::-webkit-scrollbar-thumb {
            background-color: #555;
            /* Màu của thanh cuộn trong chủ đề tối */
            border-radius: 3px;
            /* Bo góc thành bo tròn */
        }

        .overflow-auto::-webkit-scrollbar-thumb:hover {
            background-color: #777;
            /* Màu của thanh cuộn khi hover trong chủ đề tối */
        }
    </style>
</head>

@extends('layouts.app')

@section('content')
    <div class="flex h-full w-full mb-10">
        @include('layouts.sidebar')
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="w-full px-5">
            @csrf
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div>
                    <label for="id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mã sản
                        phẩm</label>
                    <input type="text" name="id" id="id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="" required>
                </div>
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tên sản
                        phẩm</label>
                    <input type="text" name="name" id="name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="" required>
                </div>
                <div>
                    <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Thương
                        hiệu</label>
                    <input type="text" name="brand" id="brand"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="" required>
                </div>
                <div>
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Giá
                        tiền</label>
                    <div class="relative mt-2 rounded-md shadow-sm">
                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                            <span class="text-gray-500 sm:text-sm">₫</span>
                        </div>
                        <input type="text" name="price" id="price"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 pl-7 pr-12 text-right dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="0" aria-describedby="price-currency" required>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                            <span class="text-gray-500 sm:text-sm" id="price-currency">VNĐ</span>
                        </div>
                    </div>
                </div>

                <div class="col-span-2">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Danh mục sản phẩm</label>
                    <div class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white overflow-auto"
                        style="max-height: 125px;">
                        <div class="grid grid-cols-2 gap-4 mb-2">
                            @foreach ($categories as $category)
                                <div class="flex items-center mb-2">
                                    <input type="checkbox" id="category-{{ $category->id }}" name="category[]"
                                        value="{{ $category->id }}" class="mr-2">
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
                        placeholder="Mô tả..."></textarea>
                </div>

                <div class="col-span-2">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white mb-2">Chọn kho</label>
                    <div class="grid grid-cols-2 gap-4 mb-2">
                        @foreach ($warehouses as $warehouse)
                            <div class="mb-4 mr-4">
                                <div class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    {{ $warehouse->name }} <!-- Hiển thị tên kho -->
                                </div>
                                <input type="number" name="warehouse_quantity[{{ $warehouse->id }}]"
                                    id="warehouse_quantity_{{ $warehouse->id }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Số lượng">
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="relative z-0 w-full mb-5 group">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hình ảnh</label>
                    <input class="form-control" name="image_path" type="file" id="image_path" accept="image/*">
                    <div id="image-error" class="text-red-600 mt-2"></div>
                </div>

            </div>
            <button type="submit"
                class="text-primary-700 inline-flex items-center border-2 border-primary-700 hover:bg-primary-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-primary-600 dark:hover:bg-primary-600 dark:hover:text-white dark:focus:ring-primary-800">
                <svg class="mr-1 -ml-1 w-6 h-6 text-primary-700 dark:text-primary-600" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"></path>
                </svg>
                Thêm sản phẩm
            </button>
        </form>
    </div>

    <link rel="stylesheet" href="https://unpkg.com/cropperjs/dist/cropper.min.css">
    <script src="https://unpkg.com/cropperjs/dist/cropper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>

    <script>
        const priceInput = document.getElementById('price');

        function formatInputValue(value) {
            if (!value || isNaN(value)) {
                return '';
            }

            let formattedValue = new Intl.NumberFormat('vi-VN').format(value);
            return formattedValue.replace(/\u200B/g, '');
        }

        function getCaretPosition(input) {
            if (!input) return 0;
            if (input.selectionStart !== undefined) {
                return input.selectionStart;
            } else if (document.selection) {
                input.focus();
                var selection = document.selection.createRange();
                selection.moveStart('character', -input.value.length);
                return selection.text.length;
            }
            return 0;
        }

        function setCaretPosition(input, pos) {
            if (!input) return;
            if (input.setSelectionRange) {
                input.focus();
                input.setSelectionRange(pos, pos);
            } else if (input.createTextRange) {
                var range = input.createTextRange();
                range.collapse(true);
                range.moveEnd('character', pos);
                range.moveStart('character', pos);
                range.select();
            }
        }

        priceInput.addEventListener('input', function(event) {
            let value = priceInput.value.replace(/[^\d]/g, '');
            let formattedValue = formatInputValue(value);
            let caretPosition = event.target.selectionStart;
            priceInput.value = formattedValue;
            let newCaretPosition = caretPosition + (formattedValue.length - value.length);
            priceInput.setSelectionRange(newCaretPosition, newCaretPosition);
        });

        priceInput.addEventListener('blur', function(event) {
            let value = priceInput.value.replace(/[^\d]/g, '');
            let formattedValue = formatInputValue(value);
            priceInput.value = formattedValue;
        });

        document.addEventListener('DOMContentLoaded', function() {
            let value = priceInput.value.replace(/[^\d]/g, '');
            let formattedValue = formatInputValue(value);
            priceInput.value = formattedValue;
        });

        const imageInput = document.getElementById('image_path');
        const imageError = document.getElementById('image-error');

        imageInput.addEventListener('change', function(event) {
            // Clear previous error messages
            imageError.textContent = '';

            const file = event.target.files[0];
            if (!file) return;

            const reader = new FileReader();

            reader.onload = function(e) {
                const img = new Image();
                img.src = e.target.result;

                img.onload = function() {
                    const width = img.width;
                    const height = img.height;

                    // Check if the aspect ratio is 1:1
                    if (width !== height) {
                        imageError.textContent = 'Ảnh không phải tỉ lệ 1:1.';
                        // Optionally, you can clear the file input
                        imageInput.value = '';
                    }
                };
            };

            reader.readAsDataURL(file);
        });
    </script>
@endsection

</html>
