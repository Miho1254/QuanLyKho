<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chỉnh sửa người dùng</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

@extends('layouts.app')

@section('content')
    <div class="flex h-full w-full mb-10">
        @include('layouts.sidebar')
        <form action="{{ route('admins.update', $user->id) }}" method="POST" class="w-full px-5"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="fullname" id="fullname"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " value="{{ $user->fullname }}" required />
                    <label for="fullname"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Họ
                        và tên
                    </label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="name" id="name"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " value="{{ $user->name }}" required />
                    <label for="name"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tên
                        người dùng</label>
                </div>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="email" name="email" id="email"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " value="{{ $user->email }}" required />
                <label for="email"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Địa
                    chỉ email</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="password" name="password" id="password"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " />
                <label for="password"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Mật
                    khẩu (để trống nếu không thay đổi)</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="password" name="password_confirmation" id="password_confirmation"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " />
                <label for="password_confirmation"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Xác
                    nhận mật khẩu</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <label class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">Vai trò</label>
                <label class="inline-flex items-center">
                    <input type="radio" name="role" value="admin" class="form-radio text-primary-600" {{ $user->role == 'admin' ? 'checked' : '' }} required>
                    <span class="ml-2 text-sm text-gray-900 dark:text-gray-300">Admin</span>
                </label>
                <label class="inline-flex items-center ml-6">
                    <input type="radio" name="role" value="user" class="form-radio text-primary-600" {{ $user->role == 'user' ? 'checked' : '' }}>
                    <span class="ml-2 text-sm text-gray-900 dark:text-gray-300">User</span>
                </label>
            </div>
            
            <div class="relative z-0 w-full mb-5 group">
                <input class="form-control" name="image_path" type="file" id="image_path">
                @if ($user->image_path)
                    <img src="{{ asset($user->image_path) }}" alt="Current Image" class="mt-2 w-32 h-32">
                @endif
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
                        Lưu người dùng
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
                        Xóa người dùng
                    </button>
                </div>
            </div>
        </form>

        <form id="deleteForm" action="{{ route('admins.destroy', $user->id) }}" method="POST" style="display: none;">
            @csrf
            @method('DELETE')
        </form>
    </div>
    <script>
        function confirmDelete() {
            if (confirm('Bạn có chắc chắn muốn xóa người dùng này không?')) {
                document.getElementById('deleteForm').submit();
            }
        }
    </script>
@endsection

</html>
