<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chỉnh sửa kho</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

@extends('layouts.app')

@section('content')
    <div class="flex h-full w-full mb-10">
        @include('layouts.sidebar')
        <div class="content w-full dark:bg-gray-900">
            <form action="{{ route('warehouses.update', $warehouse->id) }}" method="POST" class="w-full px-5">
                @csrf
                @method('PUT')
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="id" id="id"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " value="{{ $warehouse->id }}" required />
                    <label for="id"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">ID
                        Kho</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="name" id="name"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " value="{{ $warehouse->name }}" required />
                    <label for="name"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tên
                        kho</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="location" id="location"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " value="{{ $warehouse->location }}" required />
                    <label for="location"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Vị
                        trí</label>
                </div>

                <div class="flex justify-end">
                    <div class="flex items-center space-x-4">
                        <button type="submit"
                            class="text-primary-700 inline-flex items-center border-2 border-primary-700 hover:bg-primary-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-primary-600 dark:hover:bg-primary-600 dark:hover:text-white dark:focus:ring-primary-800">
                            <svg class="mr-1 -ml-1 w-6 h-6 text-primary-700 dark:text-primary-600" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z">
                                </path>
                            </svg>
                            Lưu kho
                        </button>
                        <button type="button"
                            class="text-red-500 inline-flex items-center border-2 border-red-500 hover:bg-red-600 hover:border-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-red-600 dark:hover:bg-red-700 dark:hover:border-red-700 dark:focus:ring-red-800" onclick="confirmDelete()">
                            <svg class="mr-1 -ml-1 w-6 h-6 text-red-500 dark:text-red-600" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18 17.94 6M18 18 6.06 6" />
                            </svg>
                            Xóa kho
                        </button>
                    </div>
                </div>
            </form>
            <form id="deleteForm" action="{{ route('warehouses.destroy', $warehouse->id) }}" method="POST" style="display: none;">
                @csrf
                @method('DELETE')
            </form>
            
        </div>
    </div>
    <script>
        function confirmDelete() {
            if (confirm('Bạn có chắc chắn muốn xóa kho này không?')) {
                document.getElementById('deleteForm').submit();
            }
        }
    </script>
    
@endsection

</html>
