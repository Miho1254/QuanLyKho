<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body style="height: 100%; width: 100%;" class="dark:bg-gray-900">
    {{-- Header --}}
    <div class="" style="height: 9%; width: 100%;">
        <nav class=" border-gray-200 dark:bg-gray-900">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                    <span
                        class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
                </a>
                <div class="flex md:order-2">
                    
                    <button data-collapse-toggle="navbar-search" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-search" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
            </div>
        </nav>
    </div>
    @yield('content')
    {{-- Footer --}}
    <div class="footer" style="height: 31%; width: 100%">
        <footer class="mt-5 bg-gray-900">
            <div class="mx-auto w-full max-w-screen-xl ">
                <div class="md:flex md:justify-between">
                    <div class="mb-6 md:mb-0">
                        <a href="https://flowbite.com/" class="flex items-center">
                            <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 me-3"
                                alt="FlowBite Logo" />
                            <span
                                class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
                                
                        </a>
                        
                    </div>
                    <div class="grid grid-cols-5 gap-8 sm:gap-4 sm:grid-cols-1">
                        <div>                         
                            
                              <ul class="text-gray-500 dark:text-gray-400 font-medium mt-1 ">
                                  <li class="mb-4">
                                    <p style="font-size:16px font-semibold " class=" mt-1">
                                        0778629133
                                    </p>
                                <p style="font-size:15px " class=" ">Địa Chỉ:Đường DC13, Sơn Kỳ, Tân Phú, Thành phố Hồ Chí Minh, Việt Nam</p>
                                  <p style="font-size:14px " class=" ">dinhhieu3051@gmail.com</p>
                             <div class="flex mt-2">  
    <!-- Facebook Icon -->
    <a href="https://www.facebook.com" target="_blank" class=" hover:text-gray-300 mr-2 ">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" stroke="none">
            <path d="M22.675 0H1.325C.593 0 0 .593 0 1.325v21.351C0 23.407.593 24 1.325 24H12.82v-9.294H9.692V11.41h3.127V8.575c0-3.1 1.894-4.788 4.659-4.788 1.325 0 2.463.099 2.794.143v3.24l-1.917.001c-1.504 0-1.796.715-1.796 1.763v2.31h3.59l-.467 3.296h-3.123V24h6.116c.732 0 1.325-.593 1.325-1.325V1.325C24 .593 23.407 0 22.675 0z"/>
        </svg>
    </a>

    <!-- YouTube Icon -->
    <a href="https://www.youtube.com" target="_blank" class=" hover:text-gray-300 mr-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" stroke="none">
            <path d="M23.498 6.186c-.27-1.017-1.072-1.815-2.09-2.09C19.945 3.696 12 3.696 12 3.696s-7.945 0-9.408.4c-1.017.27-1.82 1.073-2.09 2.09C0 7.649 0 12 0 12s0 4.351.502 5.814c.27 1.017 1.072 1.815 2.09 2.09C4.055 20.304 12 20.304 12 20.304s7.945 0 9.408-.4c1.017-.27 1.82-1.073 2.09-2.09C24 16.351 24 12 24 12s0-4.351-.502-5.814zM9.545 15.568V8.432l6.273 3.568-6.273 3.568z"/>
        </svg>
    </a>
<!-- Messenger Icon -->
    <a href="https://www.messenger.com" target="_blank" class=" hover:text-gray-300 mr-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" stroke="none">
            <path d="M12 2C6.486 2 2 6.486 2 12c0 3.805 2.224 7.112 5.595 8.841-.026.524-.069 1.315-.106 1.899-.165 2.559.992 2.572 1.886 1.846 1.215-.978 2.421-2.28 3.337-3.247.971-.02 1.929-.141 2.84-.354 3.372-1.273 5.448-4.633 5.448-8.232C22 6.486 17.514 2 12 2zm-.705 13.127l-2.13-2.248-5.373 2.248 6.973-7.877 2.155 2.25 5.346-2.25-6.971 7.877z"/>
        </svg>
    </a>

    <!-- Instagram Icon -->
    <a href="https://www.instagram.com" target="_blank" class=" hover:text-gray-300 mr-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" stroke="none">
            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.366.062 2.633.313 3.608 1.288.974.974 1.225 2.242 1.288 3.608.058 1.266.069 1.646.069 4.85s-.012 3.584-.07 4.85c-.062 1.366-.313 2.633-1.288 3.608-.974.974-2.242 1.225-3.608 1.288-1.266.058-1.646.069-4.85.069s-3.584-.012-4.85-.07c-1.366-.062-2.633-.313-3.608-1.288-.974-.974-1.225-2.242-1.288-3.608-.058-1.266-.069-1.646-.069-4.85s.012-3.584.07-4.85c.062-1.366.313-2.633 1.288-3.608.974-.974 2.242-1.225 3.608-1.288 1.266-.058 1.646-.069 4.85-.069zm0-2.163c-3.259 0-3.667.013-4.947.072-1.294.06-2.573.341-3.637 1.405-1.064 1.064-1.345 2.343-1.405 3.637-.059 1.28-.072 1.688-.072 4.947s.013 3.667.072 4.947c.06 1.294.341 2.573 1.405 3.637 1.064 1.064 2.343 1.345 3.637 1.405 1.28.059 1.688.072 4.947.072s3.667-.013 4.947-.072c1.294-.06 2.573-.341 3.637-1.405 1.064-1.064 1.345-2.343 1.405-3.637.059-1.28.072-1.688.072-4.947s-.013-3.667-.072-4.947c-.06-1.294-.341-2.573-1.405-3.637-1.064-1.064-2.343-1.345-3.637-1.405-1.28-.059-1.688-.072-4.947-.072zM12 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zm0 10.162a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 11-2.881 0 1.44 1.44 0 012.881 0z"/>
        </svg>
    </a>
</div>    
                              </ul>
                          </div>
                    </div>
                    <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                     
                        <div>
                           
                          <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">
                                Resources</h2>
                            <ul class="text-gray-500 dark:text-gray-400 font-medium">
                                <li class="mb-4">
                                    <a href="https://flowbite.com/" class="hover:underline">Flowbite</a>
                                </li>
                                <li>
<a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow
                                us</h2>
                            <ul class="text-gray-500 dark:text-gray-400 font-medium">
                                <li class="mb-4">
                                    <a href="https://github.com/themesberg/flowbite"
                                        class="hover:underline ">Github</a>
                                </li>
                                <li>
                                    <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal
                            </h2>
                            <ul class="text-gray-500 dark:text-gray-400 font-medium">
                                <li class="mb-4">
                                    <a href="#" class="hover:underline">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
                <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8">
                <div class="sm:flex sm:items-center sm:justify-between">
                  <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400 mx-auto">© 2023 <a
                          href="https://flowbite.com/" class="hover:underline">Mitoru</a>. All Rights
                      Reserved.
                  </span>
              </div>
              
            </div>
        </footer>
    </div>
</body>
</html>
