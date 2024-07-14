<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sản phẩm tại {{ $warehouse->name }}</title>
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

        /* CSS cho hình ảnh và thông tin sản phẩm */
        .product-info {
            display: flex;
            align-items: center;
        }
        .product-info img {
            width: 80px;
            height: 60px;
            object-fit: cover;
            border-radius: 4px;
            margin-right: 10px;
        }
        .product-info .details {
            display: flex;
            flex-direction: column;
        }
    </style>
</head>

@extends('layouts.app')

@section('content')
    <div style="height: 100%; width: 100%;">
        <div style="height: 60%; width: 100%;">
            <div style="height: 100%; width: 100%; display: flex">
                @include('layouts.sidebar')
                <div class="content w-full dark:bg-gray-900">
                    <div class="relative shadow-md sm:rounded-lg">
                        <div class="flex items-center justify-between flex-column md:flex-row flex-wrap space-y-4 md:space-y-0 py-4 bg-white dark:bg-gray-900">
                            <h1 class="text-xl font-semibold ml-5 text-gray-900 whitespace-nowrap dark:text-white">Sản phẩm tại {{ $warehouse->name }}</h1>
                        </div>

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
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <td class="w-4 p-4">
                                            <div class="flex items-center">
                                                <input id="checkbox-table-search-{{ $product->id }}" type="checkbox"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="checkbox-table-search-{{ $product->id }}"
                                                    class="sr-only">checkbox</label>
                                            </div>
                                        </td>
                                        <th scope="row"
                                        class="flex items-center px-6 py-7 text-gray-900 whitespace-nowrap dark:text-white">
                                        <img class="w-20 h-14 rounded -left-1 product-image"
                                            src="{{ asset($product->image_path) }}"
                                            alt="{{ $product->name }} image">
                                        <div class="ps-3">
                                            <div class="text-base font-semibold product">{{ $product->name }}</div>
                                            <div class="font-normal text-gray-500">{{ $product->brand }}</div>
                                        </div>
                                    </th>
                                    <td class="px-6 py-4">
                                            {{ $product->quantity }}
                                        </td>
                                        <td class="px-6 py-4 font-bold">
                                            {{ number_format($product->price, 0, ',', '.') }}đ
                                        </td>
                                        <td class="px-6 py-4">
                                            @if ($product->quantity > 0)
                                                <span class="text-sm text-green-500">Còn hàng</span>
                                            @else
                                                <span class="text-sm text-red-500">Hết hàng</span>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

</html>
