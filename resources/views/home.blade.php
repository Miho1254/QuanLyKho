<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang chủ</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>


@extends('layouts.app')
@section('content')
    <div style="height: 100%; width: 100%;">
        <div class="" style="height: 60%; width: 100%;">
            <div class="" style="height: 100%; width: 100%; display: flex">
                @include('layouts.sidebar')
                <div class=" content w-full text-center dark:bg-gray-900">

                    <section class="bg-white dark:bg-gray-900">
                        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-12">
                            <img src="./images/hinh01.jpg" alt=""
                                class="mx-auto mb-8 rounded-lg shadow-lg max-w-full h-auto w-1/4">
                            <h1
                                class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                                CLB DOANH NHÂN THỜI ĐẠI MỚI </h1>
                            <p
                                class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">
                                chúng tôi tập trung vào các thị trường nơi công nghệ, đổi mới và vốn có thể mang lại giá trị
                                lâu dài và thúc đẩy tăng trưởng kinh tế.</p>
                            <div
                                class="flex flex-col mb-8 lg:mb-16 space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                                <a href="#"
                                    class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                                    Tìm Hiểu Thêm
                                    <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </a>

                            </div>

                        </div>
                    </section>
                </div>

            </div>
        </div>
    </div>
@endsection

</html>
