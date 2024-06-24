<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sản phẩm</title>
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
                        <div
                            class="flex items-center justify-between flex-column md:flex-row flex-wrap space-y-4 md:space-y-0 py-4 bg-white dark:bg-gray-900">
                            <div class="ml-5">
                                <button id="dropdownActionButton" data-dropdown-toggle="dropdownAction"
                                    class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                                    type="button">
                                    <span class="sr-only">Action button</span>
                                    Action
                                    <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg>
                                </button>
                                <a href="{{ route('products.create') }}">
                                    <button id="create-products"
                                        class="inline-flex items-center text-white bg-blue-500 border border-gray-300 focus:outline-none hover:bg-blue-700 focus:ring-4 focus:ring-blue-100 font-medium rounded-lg text-sm px-3 py-1.5"
                                        type="button">
                                        Thêm sản phẩm
                                    </button>
                                </a>
                                <!-- Dropdown menu -->
                                <div id="dropdownAction"
                                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="dropdownActionButton">
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Reward</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Promote</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Activate
                                                account</a>
                                        </li>
                                    </ul>
                                    <div class="py-1">
                                        <a href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete
                                            User</a>
                                    </div>
                                </div>
                            </div>
                            <label for="table-search" class="sr-only">Search</label>
                            <div class="relative">
                                <div
                                    class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                    </svg>
                                </div>
                                <input type="text" id="table-search-users"
                                    class="mr-5 block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Search for users">
                            </div>
                        </div>

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


                        <div class="overflow-auto" style="max-height: 600px">
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="p-4">
                                            <div class="flex items-center">
                                                <input id="checkbox-all-search" type="checkbox"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Tên Sản Phẩm / Hãng
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Số Lượng
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Giá
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Trạng Thái
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Chỉnh Sửa
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <td class="px-6 py-4">
                                            <div class="flex items-center">
                                                <input id="checkbox-item-1" type="checkbox"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="checkbox-item-1" class="sr-only">checkbox</label>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="flex items-center">
                                                <img class="w-20 h-14 rounded -left-1 product-image" src="{{ asset('images/upload/products/11.jpg') }}"
                                                    alt="Product Image">
                                                <div class="ps-3">
                                                    <div class="text-base font-semibold product">Sản phẩm 1</div>
                                                    <div class="font-normal text-gray-500 product-brand">Hãng A</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 Quantity">
                                            1
                                        </td>
                                        <td class="px-6 py-4 font-bold price">
                                            100đ
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="flex items-center">
                                                <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div>
                                                <span class="text-sm text-green-500">Đang Bán</span>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Chỉnh Sửa</a>
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <td class="px-6 py-4">
                                            <div class="flex items-center">
                                                <input id="checkbox-item-1" type="checkbox"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="checkbox-item-1" class="sr-only">checkbox</label>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="flex items-center">
                                                <img class="w-20 h-14 rounded -left-1 product-image" src="{{ asset('images/upload/products/11.jpg') }}"
                                                    alt="Product Image">
                                                <div class="ps-3">
                                                    <div class="text-base font-semibold product">Sản phẩm 1</div>
                                                    <div class="font-normal text-gray-500 product-brand">Hãng A</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 Quantity">
                                            1
                                        </td>
                                        <td class="px-6 py-4 font-bold price">
                                            100đ
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="flex items-center">
                                                <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div>
                                                <span class="text-sm text-green-500">Đang Bán</span>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Chỉnh Sửa</a>
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <td class="px-6 py-4">
                                            <div class="flex items-center">
                                                <input id="checkbox-item-1" type="checkbox"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="checkbox-item-1" class="sr-only">checkbox</label>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="flex items-center">
                                                <img class="w-20 h-14 rounded -left-1 product-image" src="{{ asset('images/upload/products/11.jpg') }}"
                                                    alt="Product Image">
                                                <div class="ps-3">
                                                    <div class="text-base font-semibold product">Sản phẩm 1</div>
                                                    <div class="font-normal text-gray-500 product-brand">Hãng A</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 Quantity">
                                            1
                                        </td>
                                        <td class="px-6 py-4 font-bold price">
                                            100đ
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="flex items-center">
                                                <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div>
                                                <span class="text-sm text-green-500">Đang Bán</span>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Chỉnh Sửa</a>
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <td class="px-6 py-4">
                                            <div class="flex items-center">
                                                <input id="checkbox-item-1" type="checkbox"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="checkbox-item-1" class="sr-only">checkbox</label>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="flex items-center">
                                                <img class="w-20 h-14 rounded -left-1 product-image" src="{{ asset('images/upload/products/11.jpg') }}"
                                                    alt="Product Image">
                                                <div class="ps-3">
                                                    <div class="text-base font-semibold product">Sản phẩm 1</div>
                                                    <div class="font-normal text-gray-500 product-brand">Hãng A</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 Quantity">
                                            1
                                        </td>
                                        <td class="px-6 py-4 font-bold price">
                                            100đ
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="flex items-center">
                                                <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div>
                                                <span class="text-sm text-green-500">Đang Bán</span>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Chỉnh Sửa</a>
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <td class="px-6 py-4">
                                            <div class="flex items-center">
                                                <input id="checkbox-item-1" type="checkbox"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="checkbox-item-1" class="sr-only">checkbox</label>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="flex items-center">
                                                <img class="w-20 h-14 rounded -left-1 product-image" src="{{ asset('images/upload/products/11.jpg') }}"
                                                    alt="Product Image">
                                                <div class="ps-3">
                                                    <div class="text-base font-semibold product">Sản phẩm 1</div>
                                                    <div class="font-normal text-gray-500 product-brand">Hãng A</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 Quantity">
                                            1
                                        </td>
                                        <td class="px-6 py-4 font-bold price">
                                            100đ
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="flex items-center">
                                                <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div>
                                                <span class="text-sm text-green-500">Đang Bán</span>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Chỉnh Sửa</a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                                                    </div>

                        <!-- Pagination -->
                        {{-- <div class="flex justify-center mt-4">
                            {{ $products->links() }}
                        </div>
 --}}

                        {{-- <!-- Hộp thoại nhập trang -->
                        <div id="page-input-dialog"
                            class="hidden fixed inset-0 flex items-center justify-center z-50 bg-gray-800 bg-opacity-75">
                            <div class="bg-white p-6 rounded-lg shadow-lg">
                                <label for="page-number" class="block text-sm font-medium text-gray-700">Enter page
                                    number</label>
                                <div class="mt-1">
                                    <input type="number" name="page-number" id="page-number"
                                        class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                </div>
                                <div class="mt-4 flex justify-end">
                                    <button id="page-input-cancel"
                                        class="mr-2 inline-flex justify-center py-2 px-4 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Cancel</button>
                                    <button id="page-input-go"
                                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Go</button>
                                </div>
                            </div>
                        </div> --}}


                        {{-- <style>
                            .relative.z-0.inline-flex a:nth-child(n+6):nth-child(-n+8) {
                                display: none;
                            }
                        </style>

                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const totalPages = 50;
                                let currentPage = 1;

                                const prevBtn = document.getElementById('prevBtn');
                                const nextBtn = document.getElementById('nextBtn');
                                let dotsShown = false; // Biến để theo dõi dấu ba chấm đã được hiển thị hay chưa
                                const pageInputDialog = document.getElementById('page-input-dialog');
                                const pageInputGo = document.getElementById('page-input-go');
                                const pageInputCancel = document.getElementById('page-input-cancel');
                                const pageNumberInput = document.getElementById('page-number');

                                // Function to generate pagination buttons
                                function generatePagination() {
                                    let pages = '';

                                    // Nút Previous
                                    pages += `<a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-gray-700 text-sm font-medium text-gray-400 hover:bg-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:hover:bg-gray-600">
                    <span class="sr-only">Previous</span>
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                        <path fill-rule="evenodd" d="M10 18a1 1 0 01-.707-.293l-7-7a1 1 0 010-1.414l7-7a1 1 0 011.414 1.414L4.414 10H17a1 1 0 110 2H4.414l6.293 6.293A1 1 0 0110 18z" clip-rule="evenodd" />
                    </svg>
                </a>`;

                                    // Các nút số trang
                                    for (let i = 1; i <= totalPages; i++) {
                                        if (i <= 3 || i >= totalPages - 2) {
                                            pages +=
                                                `<a href="#" class="page-number relative inline-flex items-center px-4 py-2 border border-gray-300 bg-gray-700 text-sm font-medium text-gray-400 hover:bg-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:hover:bg-gray-600">${i}</a>`;
                                        } else if (!dotsShown && (i === 4 || i === totalPages - 3)) {
                                            pages +=
                                                `<span id="dotsBtn" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-gray-700 text-sm font-medium text-gray-400 cursor-pointer">...</span>`;
                                            dotsShown = true; // Đánh dấu là đã hiển thị dấu ba chấm
                                        } else if (dotsShown && (i === 4 || i === totalPages - 3)) {
                                            // Không làm gì cả, để không hiển thị dấu ba chấm thứ hai
                                        } else {
                                            pages +=
                                                `<a href="#" class="page-number hidden relative inline-flex items-center px-4 py-2 border border-gray-300 bg-gray-700 text-sm font-medium text-gray-400 hover:bg-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:hover:bg-gray-600">${i}</a>`;
                                        }
                                    }

                                    // Nút Next
                                    pages += `<a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-gray-700 text-sm font-medium text-gray-400 hover:bg-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:hover:bg-gray-600">
                    <span class="sr-only">Next</span>
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                        <path fill-rule="evenodd" d="M10 2a1 1 0 01.707.293l7 7a1 1 0 01-1.414 1.414L15.586 10H3a1 1 0 110-2h12.586l-5.293-5.293A1 1 0 0110 2z" clip-rule="evenodd" />
                    </svg>
                </a>`;

                                    const pagination = document.querySelector('.relative.z-0.inline-flex');
                                    pagination.innerHTML = pages;

                                    // Add event listeners to new pagination buttons
                                    const pageNumbers = document.querySelectorAll('.page-number');
                                    pageNumbers.forEach((pageNumber) => {
                                        pageNumber.addEventListener('click', function() {
                                            currentPage = parseInt(pageNumber.textContent);
                                            console.log('Go to page:', currentPage);
                                            // Perform your page change action here (e.g., load new content)
                                        });
                                    });

                                    prevBtn.addEventListener('click', function() {
                                        if (currentPage > 1) {
                                            currentPage--;
                                            console.log('Go to page:', currentPage);
                                            // Perform your page change action here (e.g., load new content)
                                        }
                                    });

                                    nextBtn.addEventListener('click', function() {
                                        if (currentPage < totalPages) {
                                            currentPage++;
                                            console.log('Go to page:', currentPage);
                                            // Perform your page change action here (e.g., load new content)
                                        }
                                    });

                                    const dotsBtn = document.getElementById('dotsBtn');
                                    dotsBtn.addEventListener('click', function() {
                                        if (!pageInputDialog.classList.contains('hidden')) {
                                            pageInputDialog.classList.add('hidden');
                                        } else {
                                            pageInputDialog.classList.remove('hidden');
                                        }
                                    });

                                    pageInputCancel.addEventListener('click', function() {
                                        pageInputDialog.classList.add('hidden');
                                    });

                                    pageInputGo.addEventListener('click', function() {
                                        const pageNumber = parseInt(pageNumberInput.value, 10);
                                        if (pageNumber >= 1 && pageNumber <= totalPages) {
                                            currentPage = pageNumber;
                                            console.log('Go to page:', currentPage);
                                            pageInputDialog.classList.add('hidden');
                                            // Perform your page change action here (e.g., load new content)
                                        } else {
                                            alert('Invalid page number');
                                        }
                                    });
                                }

                                // Generate pagination on page load
                                generatePagination();
                            });
                        </script> --}}

                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
@endsection

</html>
