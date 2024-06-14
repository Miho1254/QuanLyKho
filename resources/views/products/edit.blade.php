@extends('layouts.app')

@section('content')
    <div class="flex h-full w-full mb-10">
        @include('layouts.sidebar')
        <form action="#" class="w-full px-5">
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mã sản phẩm</label>
                    <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="" required="">
                </div>
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tên sản phẩm</label>
                    <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="" required="">
                </div>
                <div>
                    <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Thương hiệu</label>
                    <input type="text" name="brand" id="brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="" required="">
                </div>
                <div>
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Giá tiền</label>
                    <div class="relative mt-2 rounded-md shadow-sm">
                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                            <span class="text-gray-500 sm:text-sm">₫</span>
                        </div>
                        <input type="text" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 pl-7 pr-12 text-right dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="0" aria-describedby="price-currency">
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                            <span class="text-gray-500 sm:text-sm" id="price-currency">VNĐ</span>
                        </div>
                    </div>
                </div>
                
                <script>
                    const priceInput = document.getElementById('price');
                
                    // Function to format input value to VNĐ without the currency symbol
                    function formatInputValue(value) {
                        // Check if value is empty or not a number
                        if (!value || isNaN(value)) {
                            return '';
                        }
                
                        // Format number to VNĐ format without the currency symbol
                        let formattedValue = new Intl.NumberFormat('vi-VN').format(value);
                        return formattedValue.replace(/\u200B/g, ''); // Remove zero-width space if present
                    }
                
                    // Function to get current caret position in input field
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
                
                    // Function to set caret position in input field
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
                
                    // Event listener for input event
                    priceInput.addEventListener('input', function(event) {
                        let value = priceInput.value.replace(/[^\d]/g, ''); // Remove non-numeric characters
                        let formattedValue = formatInputValue(value);
                        
                        // Get current caret position
                        let caretPosition = event.target.selectionStart;
                        
                        // Update input value with formatted VNĐ value
                        priceInput.value = formattedValue;
                
                        // Set caret position back to where it was before formatting
                        let newCaretPosition = caretPosition + (formattedValue.length - value.length);
                        priceInput.setSelectionRange(newCaretPosition, newCaretPosition);
                    });
                
                    // Event listener for blur event
                    priceInput.addEventListener('blur', function(event) {
                        let value = priceInput.value.replace(/[^\d]/g, ''); // Remove non-numeric characters
                        let formattedValue = formatInputValue(value);
                        priceInput.value = formattedValue;
                    });
                
                    // Initialize input value on DOMContentLoaded
                    document.addEventListener('DOMContentLoaded', function() {
                        let value = priceInput.value.replace(/[^\d]/g, ''); // Remove non-numeric characters
                        let formattedValue = formatInputValue(value);
                        priceInput.value = formattedValue;
                    }); 
                </script>
                
                
                
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Danh mục sản phẩm</label>
                    <div class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" style="max-height: 95px; overflow-y: auto;">
                        <div class="flex items-center mb-2">
                            <input type="checkbox" id="category-TV" name="category" value="TV" class="mr-2">
                            <label for="category-TV">TV</label>
                        </div>
                        <div class="flex items-center mb-2">
                            <input type="checkbox" id="category-PC" name="category" value="PC" class="mr-2">
                            <label for="category-PC">Máy vi tính</label>
                        </div>
                        <div class="flex items-center mb-2">
                            <input type="checkbox" id="category-GA" name="category" value="GA" class="mr-2">
                            <label for="category-GA">Gaming/Máy chơi game</label>
                        </div>
                        <div class="flex items-center mb-2">
                            <input type="checkbox" id="category-PH" name="category" value="PH" class="mr-2">
                            <label for="category-PH">Điện thoại</label>
                        </div>
                        <div class="flex items-center mb-2">
                            <input type="checkbox" id="category-PH" name="category" value="PH" class="mr-2">
                            <label for="category-PH">Laptop</label>
                        </div>
                        <div class="flex items-center mb-2">
                            <input type="checkbox" id="category-PH" name="category" value="PH" class="mr-2">
                            <label for="category-PH">Phụ kiện</label>
                        </div>
                        <!-- Thêm các mục checkbox khác nếu cần -->
                    </div>
                </div>
                
                <div class="col-span-2">
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mô tả sản phẩm</label>
                    <textarea id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Mô tả..."></textarea>
                </div>

                <div class="col-span-1 flex flex-col items-center justify-center w-full">
                    <label for="name" class="block mb-2 text-sx font-medium text-gray-900 dark:text-white">Hình ảnh</label>
                    <div id="dropzone-container" class="flex items-center justify-center w-full">
                        <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                            <div id="dropzone-content" class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Bấm vào để đăng tải</span> hoặc kéo thả ảnh</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                            </div>
                            <input id="dropzone-file" type="file" class="hidden" accept="image/*" />
                        </label>
                    </div>
                
                    <div id="image-preview" class="flex items-center justify-center mt-4">
                        <img id="selected-image" class="hidden" />
                    </div>
                
                    <div id="crop-buttons" class="flex items-center justify-center mt-4 hidden">
                        <button id="change-image" class="bg-yellow-500 text-white py-2 px-4 rounded mr-2">Đổi ảnh</button>
                        <button id="delete-image" class="bg-red-500 text-white py-2 px-4 rounded">Xóa ảnh</button>
                    </div>
                </div>
                
                <!-- Modal for cropping image -->
                <div id="cropper-modal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
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
                    const imagePreview = document.getElementById('image-preview');
                    const selectedImage = document.getElementById('selected-image');
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
                            width: 800,
                            height: 800,
                        });
                
                        // Display cropped image
                        selectedImage.src = canvas.toDataURL();
                        selectedImage.classList.remove('hidden');
                        
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
                        selectedImage.classList.add('hidden');
                        cropButtons.classList.add('hidden');
                        dropzoneContent.style.display = 'flex';
                        dropzoneFileInput.value = '';
                    });
                
                    document.getElementById('delete-image').addEventListener('click', function() {
                        selectedImage.src = '';
                        selectedImage.classList.add('hidden');
                        cropButtons.classList.add('hidden');
                        dropzoneContent.style.display = 'flex';
                        dropzoneFileInput.value = '';
                    });
                });
                </script>
                
                
                
                
                

            <div id="cropped-result" class="col-span-1 flex items-center justify-center mt-4" style="height: 350px; width: 350px"></div>
            </div>
            <div class="flex justify-end">
                <div class="flex items-center space-x-4">
                    <button type="submit" class="text-primary-700 inline-flex items-center border-2 border-primary-700 hover:bg-primary-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-primary-600 dark:hover:bg-primary-600 dark:hover:text-white dark:focus:ring-primary-800">
                        <svg class="mr-1 -ml-1 w-6 h-6 text-primary-700 dark:text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"></path>
                        </svg>
                        Lưu sản phẩm
                    </button>
                    
                    
                    <button type="submit" class="text-red-500 inline-flex items-center border-2 border-red-500 hover:bg-red-600 hover:border-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-red-600 dark:hover:bg-red-700 dark:hover:border-red-700 dark:focus:ring-red-800">
                        <svg class="mr-1 -ml-1 w-6 h-6 text-red-500 dark:text-red-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6"/>
                        </svg>
                        Xóa sản phẩm
                    </button>
                </div>
                
            </div>
            
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
            croppedResult.innerHTML = `<img src="${canvas.toDataURL()}" class="max-w-full h-auto rounded-lg shadow-lg"/>`;
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
