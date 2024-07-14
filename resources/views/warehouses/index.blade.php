<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kho hàng</title>
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


    <style>
        .relative.z-0.inline-flex a:nth-child(n+6):nth-child(-n+8) {
            display: none;
        }
    </style>


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
                                <a href="{{ route('warehouses.create') }}">
                                    <button id="create-warehouses"
                                        class="inline-flex items-center text-white bg-blue-500 border border-gray-300 focus:outline-none hover:bg-blue-700 focus:ring-4 focus:ring-blue-100 font-medium rounded-lg text-sm px-3 py-1.5"
                                        type="button">
                                        Thêm kho hàng
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

                        <div class="overflow-auto" style="max-height: 600px">
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="p-4">
                                            <div class="flex items-center">
                                                <input id="checkbox-all-search" type="checkbox"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3">MÃ KHO</th>
                                        <th scope="col" class="px-6 py-3">TÊN KHO</th>
                                        <th scope="col" class="px-16 py-3">VỊ TRÍ</th>
                                        <!-- Increased width for Position column -->
                                        <th scope="col" class="px-12 py-3">DANH SÁCH SẢN PHẨM</th>
                                        <th scope="col" class="px-6 py-3">CHỈNH SỬA</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($warehouses as $warehouse)
                                        <tr
                                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <td class="px-4 py-4">
                                                <div class="flex items-center">
                                                    <input id="checkbox-table-search-{{ $warehouse->id }}" type="checkbox"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">{{ $warehouse->id }}</td>
                                            <td class="px-6 py-4">{{ $warehouse->name }}</td>
                                            <td class="px-16 py-4">{{ $warehouse->location }}</td>
                                            <!-- Increased width for Position column -->
                                            <td class="px-12 py-4">
                                                <a href="{{ route('warehouses.list_products', ['id' => $warehouse->id]) }}"
                                                    class="text-blue-600 dark:text-blue-400 hover:underline">Sản phẩm</a>
                                            </td>
                                                                                        <td class="px-6 py-4">
                                                <a href="{{ route('warehouses.edit', $warehouse->id) }}"
                                                    class="text-blue-600 dark:text-blue-400 hover:underline">Chỉnh sửa</a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>

                            <!-- Pagination -->
                            <div class="flex justify-center mt-4">
                                {{ $warehouses->links() }}
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

</html>
