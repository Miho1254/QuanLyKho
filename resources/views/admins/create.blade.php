<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm người dùng</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

@extends('layouts.app')

@section('content')
    <div class="flex h-full w-full mb-10">
        @include('layouts.sidebar')
        <form action="#" class="w-full px-5">


            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="floating_first_name" id="floating_first_name"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required />
                    <label for="floating_first_name"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Họ và tên
                        </label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="floating_last_name" id="floating_last_name"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required />
                    <label for="floating_last_name"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tên người dùng</label>
                </div>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="email" name="floating_email" id="floating_email"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required />
                <label for="floating_email"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Địa chỉ email</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="password" name="floating_password" id="floating_password"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required />
                <label for="floating_password"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Mật khẩu</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="password" name="repeat_password" id="floating_repeat_password"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required />
                <label for="floating_repeat_password"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Xác nhận mật khẩu</label>
            </div>
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="col-span-1 flex flex-col items-center justify-center w-full">
                    <label for="name" class="block mb-2 text-sx font-medium text-gray-900 dark:text-white">Hình
                        ảnh</label>
                    <div id="dropzone-container" class="flex items-center justify-center w-full">
                        <label for="dropzone-file"
                            class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                            <div id="dropzone-content" class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Bấm vào
                                        để đăng tải</span> hoặc kéo thả ảnh</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)
                                </p>
                            </div>
                            <input id="dropzone-file" type="file" class="hidden" accept="image/*" />
                        </label>
                    </div>
                
                    <div id="cropped-image" class="flex items-center justify-center mt-4 hidden">
                        <img id="cropped-image-preview" style="width: 350px; height: 350px; object-fit: cover;" />
                    </div>
                
                    <div id="crop-buttons" class="flex items-center justify-center mt-4 hidden">
                        <button id="change-image" class="bg-yellow-500 text-white py-2 px-4 rounded mr-2">Đổi ảnh</button>
                        <button id="delete-image" class="bg-red-500 text-white py-2 px-4 rounded">Xóa ảnh</button>
                    </div>
                </div>
                
                <!-- Modal for cropping image -->
                <div id="cropper-modal"
                    class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
                    <div class="bg-white p-4 rounded-lg max-w-lg w-full">
                        <div class="text-center">
                            <img id="cropper-image" class="mb-4 max-w-full" />
                        </div>
                        <div class="flex items-center justify-center mt-4">
                            <button id="crop-image" class="bg-blue-500 text-white py-2 px-4 rounded mr-2">Cắt ảnh</button>
                            <button id="cancel-crop" class="bg-gray-500 text-white py-2 px-4 rounded">Hủy bỏ</button>
                        </div>
                    </div>
                </div>
                
                <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const dropzoneFileInput = document.getElementById('dropzone-file');
                        const dropzoneContent = document.getElementById('dropzone-content');
                        const croppedImageContainer = document.getElementById('cropped-image');
                        const croppedImagePreview = document.getElementById('cropped-image-preview');
                        const cropperModal = document.getElementById('cropper-modal');
                        const cropperImage = document.getElementById('cropper-image');
                        const cropButtons = document.getElementById('crop-buttons');
                        let cropper;
                
                        dropzoneFileInput.addEventListener('change', function(e) {
                            const file = e.target.files[0];
                            const reader = new FileReader();
                
                            reader.onload = function(e) {
                                cropperImage.src = e.target.result;
                                cropperModal.classList.remove('hidden');
                                initializeCropper();
                            };
                
                            reader.readAsDataURL(file);
                        });
                
                        function initializeCropper() {
                            cropper = new Cropper(cropperImage, {
                                aspectRatio: 1,
                                viewMode: 1,
                            });
                        }
                
                        document.getElementById('crop-image').addEventListener('click', function() {
                            // Get cropped image data
                            const canvas = cropper.getCroppedCanvas({
                                width: 350,
                                height: 350,
                            });
                
                            // Display cropped image
                            croppedImagePreview.src = canvas.toDataURL();
                            croppedImageContainer.classList.remove('hidden');
                
                            // Hide cropper modal
                            cropperModal.classList.add('hidden');
                
                            // Show crop buttons
                            cropButtons.classList.remove('hidden');
                
                            // Hide dropzone content
                            dropzoneContent.style.display = 'none';
                
                            // Destroy cropper instance
                            cropper.destroy();
                        });
                
                        document.getElementById('cancel-crop').addEventListener('click', function() {
                            cropper.destroy();
                            cropperModal.classList.add('hidden');
                        });
                
                        document.getElementById('change-image').addEventListener('click', function() {
                            croppedImageContainer.classList.add('hidden');
                            cropButtons.classList.add('hidden');
                            dropzoneContent.style.display = 'flex';
                            dropzoneFileInput.value = '';
                        });
                
                        document.getElementById('delete-image').addEventListener('click', function() {
                            croppedImagePreview.src = '';
                            croppedImageContainer.classList.add('hidden');
                            cropButtons.classList.add('hidden');
                            dropzoneContent.style.display = 'flex';
                            dropzoneFileInput.value = '';
                        });
                    });
                </script>
                
                



                <div id="cropped-result" class="col-span-1 flex items-center justify-center mt-4"
                    style="height: 350px; width: 350px"></div>
            </div>
            <button type="submit" class="text-primary-700 inline-flex items-center border-2 border-primary-700 hover:bg-primary-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-primary-600 dark:hover:bg-primary-600 dark:hover:text-white dark:focus:ring-primary-800">
                <svg class="mr-1 -ml-1 w-6 h-6 text-primary-700 dark:text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"></path>
                </svg>
                Thêm người dùng
            </button>

        </form>
    </div>

    <link rel="stylesheet" href="https://unpkg.com/cropperjs/dist/cropper.min.css">
    <script src="https://unpkg.com/cropperjs/dist/cropper.min.js"></script>
    <script>
        let cropper;

        document.getElementById('dropzone-file').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const imageElement = document.getElementById('selected-image');
                    const dropzoneContainer = document.getElementById('dropzone-container');
                    const cropButtons = document.getElementById('crop-buttons');

                    // Ẩn phần chọn ảnh
                    dropzoneContainer.classList.add('hidden');

                    // Hiển thị ảnh đã chọn
                    imageElement.src = e.target.result;
                    imageElement.classList.remove('hidden');
                    cropButtons.classList.remove('hidden');

                    // Khởi tạo Cropper.js
                    if (cropper) {
                        cropper.destroy();
                    }
                    cropper = new Cropper(imageElement, {
                        aspectRatio: 1,
                        viewMode: 1
                    });
                };
                reader.readAsDataURL(file);
            }
        });

        document.getElementById('crop-image').addEventListener('click', function() {
            const canvas = cropper.getCroppedCanvas();
            const croppedResult = document.getElementById('cropped-result');
            croppedResult.innerHTML =
                `<img src="${canvas.toDataURL()}" class="max-w-full h-auto rounded-lg shadow-lg"/>`;
        });

        document.getElementById('change-image').addEventListener('click', function() {
            document.getElementById('dropzone-file').value = '';
            document.getElementById('dropzone-container').classList.remove('hidden');
            document.getElementById('selected-image').classList.add('hidden');
            document.getElementById('crop-buttons').classList.add('hidden');
            document.getElementById('cropped-result').innerHTML = '';
            if (cropper) {
                cropper.destroy();
            }
        });

        document.getElementById('delete-image').addEventListener('click', function() {
            document.getElementById('dropzone-file').value = '';
            document.getElementById('dropzone-container').classList.remove('hidden');
            document.getElementById('selected-image').classList.add('hidden');
            document.getElementById('crop-buttons').classList.add('hidden');
            document.getElementById('cropped-result').innerHTML = '';
            if (cropper) {
                cropper.destroy();
            }
        });
    </script>
@endsection


</html>
