<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Xuất kho</title>
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
    <div style="height: 100%; width: 100%;">
        <div class="" style="height: 60%; width: 100%;">
            <div class="" style="height: 100%; width: 100%; display: flex">
                @include('layouts.sidebar')
                <div class=" content w-full dark:bg-gray-900">
                    <div class="relative shadow-md sm:rounded-lg">
                        <div
                            class="flex items-center justify-between flex-column md:flex-row flex-wrap space-y-4 md:space-y-0 py-4 bg-white dark:bg-gray-900">
                            <div class="ml-5">
                                <a href="{{ route('exports.create') }}">
                                    <button id="create-exports"
                                        class="inline-flex items-center text-white bg-blue-500 border border-gray-300 focus:outline-none hover:bg-blue-700 focus:ring-4 focus:ring-blue-100 font-medium rounded-lg text-sm px-3 py-1.5"
                                        type="button">
                                        Thêm phiếu xuất kho
                                    </button>
                                </a>
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

                        <table
                            class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 border-separate"
                            style="border-spacing: 0">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="p-4 border-b dark:border-gray-600">
                                        <div class="flex items-center">
                                            <input id="checkbox-all-search" type="checkbox"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3 border-b dark:border-gray-600">ID</th>
                                    <th scope="col" class="px-6 py-3 border-b dark:border-gray-600">Kho hàng</th>
                                    <th scope="col" class="px-6 py-3 border-b dark:border-gray-600">Nhập lúc</th>
                                    <th scope="col" class="px-6 py-3 border-b dark:border-gray-600">Cập nhật lúc</th>
                                    <th scope="col" class="px-6 py-3 border-b dark:border-gray-600">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($exports as $export)
                                    <tr
                                        class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600 border-b dark:border-gray-600">
                                        <td class="w-4 p-4 border-b dark:border-gray-600">
                                            <div class="flex items-center">
                                                <input id="checkbox-table-search-{{ $export->id }}" type="checkbox"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 border-b dark:border-gray-600">{{ $export->id }}</td>
                                        <td class="px-6 py-4 border-b dark:border-gray-600">{{ $export->warehouse->name }}</td>

                                        <td class="px-6 py-4 border-b dark:border-gray-600" data-timestamp="9876543210">
                                            {{ $export->created_at }}</td>
                                        <td class="px-6 py-4 border-b dark:border-gray-600" data-timestamp="1623456789">
                                            {{ $export->updated_at }}</td>
                                            <td class="px-6 py-4 border-b dark:border-gray-600">
                                                <form action="{{ route('exports.destroy', $export->id) }}" method="POST" onsubmit="return confirm('Bạn có chắc chắn muốn xóa phiếu xuất kho này không?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-white bg-red-500 hover:bg-red-700 focus:outline-none focus:ring-4 focus:ring-red-200 font-medium rounded-lg text-sm px-3 py-1.5">
                                                        Xóa
                                                    </button>
                                                </form>
                                            </td>
    
                                    </tr>
                            </tbody>
                            @endforeach
                        </table>
                        <!-- Pagination -->
                        <div class="flex justify-center mt-4">
                            {{ $exports->links() }}
                        </div>

                    </div>

                </div>

            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const currentDate = new Date();
                const oneYearAgo = new Date();
                oneYearAgo.setFullYear(currentDate.getFullYear() - 1);

                const formattedCurrentDate = currentDate.toLocaleDateString('vi-VN', {
                    day: '2-digit',
                    month: '2-digit',
                    year: 'numeric'
                });
                const formattedCurrentTime = currentDate.toLocaleTimeString('vi-VN', {
                    hour: '2-digit',
                    minute: '2-digit',
                    second: '2-digit'
                });
                const formattedCurrentDateTime = `${formattedCurrentDate} ${formattedCurrentTime}`;

                const formattedOneYearAgoDate = oneYearAgo.toLocaleDateString('vi-VN', {
                    day: '2-digit',
                    month: '2-digit',
                    year: 'numeric'
                });
                const formattedOneYearAgoTime = oneYearAgo.toLocaleTimeString('vi-VN', {
                    hour: '2-digit',
                    minute: '2-digit',
                    second: '2-digit'
                });
                const formattedOneYearAgoDateTime = `${formattedOneYearAgoDate} ${formattedOneYearAgoTime}`;

                // Update all rows
                const rows = document.querySelectorAll('tbody tr');
                rows.forEach(row => {
                    const dateCells = row.querySelectorAll('td[data-timestamp]');
                    if (dateCells.length === 2) {
                        dateCells[0].textContent = formattedOneYearAgoDateTime;
                        dateCells[1].textContent = formattedCurrentDateTime;
                    }
                });
            });
        </script>
    @endsection

</html>
