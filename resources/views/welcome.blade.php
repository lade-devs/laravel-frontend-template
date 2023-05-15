<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Frontend Template</title>

        <!-- Fonts -->
        @vite(['resources/css/app.css','resources/js/app.js'])
    </head>
    <body>
    <div class="px-5 sm:px-4">
        <div class="container flex-wrap items-center justify-between px-3 mx-auto px: md:px-0">
            <nav id="navbar" class="fixed top-0 left-0 z-20 w-full bg-white shadow-lime-500/10 dark:bg-gray-900">
                <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-5 py-4 mx-auto">
                    <a href="" class="flex items-center">
                        <span class="self-center hidden text-sm font-semibold md:block whitespace-nowrap dark:text-white">Laravel Frontend Template</span>
                    </a>
                    <div class="flex md:order-2">
                        <a href="#started" class="btn border hover:text-white hover:border-white border-primary text-primary p-3 text-[13px] rounded-[100px]">
                            Get Started
                        </a>
                        <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                        </button>
                    </div>
                    <div class="items-center space-x-2 justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                        <ul class="flex flex-col p-4 mt-4 font-light border border-gray-100 rounded-lg md:p-0 bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white ">
                            <li>
                                <a href="#home" class="block py-2 pl-3 pr-4 text-gray-900 rounde md:bg-transparent md:hover:text-primary md:p-0" aria-current="page">Home</a>
                            </li>
                            <li>
                                <a href="#aboutUs" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary md:p-0">About</a>
                            </li>
                            <li>
                                <a href="#services" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary md:p-0">Services</a>
                            </li>
                            <li>
                                <a href="#contact" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary md:p-0">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- For Image: object-contain rounded md:max-w-lg --->
    </body>
</html>
