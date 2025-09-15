<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Doctor Mattresses - Ortho Care</title>
    <link rel="shortcut icon" href="img/favicon.jpg" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Bitcount+Grid+Double:wght@100..900&family=Geist:wght@100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0053B7',
                        secondary: '#D61261',
                        accent: '#F8F9FA',
                    }
                }
            }
        }
    </script>


</head>


<body class="bg-gray-50">
    <!-- Top Blue Banner -->
    <div class="bg-primary text-white py-4 px-4">
        <div class="max-w-7xl mx-auto flex flex-col sm:flex-row items-center justify-between text-sm">
            <!-- First Row - Always visible -->
            <div class="flex items-center mb-2 sm:mb-0">
                <span class="flex items-center whitespace-nowrap">
                    <i class="fas fa-home w-4 h-4 mr-1 text-current"></i>
                    Get 30 Nights Free Trial on selected mattresses
                </span>
            </div>

            <!-- Second Row - Stacked on mobile, inline on sm+ -->
            <div class="hidden lg:flex flex-col lg:flex-row items-start lg:items-center space-y-1 lg:space-y-0 lg:space-x-4 w-full lg:w-auto">
                <a href="#" class="flex items-center whitespace-nowrap">
                    <i class="fas fa-store w-4 h-4 mr-1 text-current"></i>
                    Franchise Enquiry
                </a>
                <a href="#" class="flex items-center whitespace-nowrap">
                    <i class="fas fa-check-circle w-4 h-4 mr-1 text-current"></i>
                    Warranty Registration
                </a>
                <a href="#" class="flex items-center whitespace-nowrap">
                    <i class="fas fa-pen w-4 h-4 mr-1 text-current"></i>
                    Store Locator
                </a>
            </div>
        </div>
    </div>

    <!-- Main Header -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-full mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-18">
                <!-- Logo - Always visible -->
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <a href="/" class="flex items-center">
                            <img src="{{ asset('img/logo/DM-LOGO-01.png') }}" alt="Doctor Mattresses Logo" class="h-20 w-auto">
                        </a>
                    </div>
                </div>

                <!-- Search Bar - Hidden on mobile -->
                <div class="flex-1 max-w-xs hidden md:block">
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <span class="absolute h-full w-[100px] rounded-[25px] bg-primary-left-1"></span>
                            <i class="fas fa-search text-gray-400 text-sm z-10"></i>
                        </div>
                        <input type="text" placeholder="What are you looking for?" class="block w-full pl-10 pr-3 py-2 border-l-4 border-l-secondary border rounded-full focus:ring-primary focus:border-primary">
                    </div>
                </div>

                <!-- Navigation Menu - Hidden on mobile -->
                <nav class="hidden lg:flex space-x-8">
                    <div class="relative group">
                        <button class="nav-link flex items-center text-black hover:text-primary">
                            Mattress
                            <i class="fas fa-chevron-down ml-2 h-4 w-1 text-current"></i>
                        </button>
                        <div class="dropdown-menu absolute left-0 mt-2 w-56 bg-white rounded-md shadow-lg py-1 z-50">
                            <a href="#" class="dropdown-item block px-4 py-2 text-sm text-gray-700 hover:text-primary">Orthopedic Mattress</a>
                            <a href="#" class="dropdown-item block px-4 py-2 text-sm text-gray-700 hover:text-primary">Memory Foam Mattress</a>
                            <a href="#" class="dropdown-item block px-4 py-2 text-sm text-gray-700 hover:text-primary">Latex Mattress</a>
                            <a href="#" class="dropdown-item block px-4 py-2 text-sm text-gray-700 hover:text-primary">Spring Mattress</a>
                            <a href="#" class="dropdown-item block px-4 py-2 text-sm text-gray-700 hover:text-primary">All Mattresses</a>
                        </div>
                    </div>

                    <div class="relative group">
                        <button class="nav-link flex items-center text-black hover:text-primary">
                            Beds
                            <i class="fas fa-chevron-down ml-2 h-4 w-1 text-current"></i>
                        </button>
                        <div class="dropdown-menu absolute left-0 mt-2 w-56 bg-white rounded-md shadow-lg py-1 z-50">
                            <a href="#" class="dropdown-item block px-4 py-2 text-sm text-gray-700 hover:text-primary">Wooden Beds</a>
                            <a href="#" class="dropdown-item block px-4 py-2 text-sm text-gray-700 hover:text-primary">Metal Beds</a>
                            <a href="#" class="dropdown-item block px-4 py-2 text-sm text-gray-700 hover:text-primary">Storage Beds</a>
                            <a href="#" class="dropdown-item block px-4 py-2 text-sm text-gray-700 hover:text-primary">All Beds</a>
                        </div>
                    </div>

                    <div class="relative group">
                        <button class="nav-link flex items-center text-black hover:text-primary">
                            Combos
                            <i class="fas fa-chevron-down ml-2 h-4 w-1 text-current"></i>
                        </button>
                        <div class="dropdown-menu absolute left-0 mt-2 w-56 bg-white rounded-md shadow-lg py-1 z-50">
                            <a href="#" class="dropdown-item block px-4 py-2 text-sm text-gray-700 hover:text-primary">Mattress + Bed Combos</a>
                            <a href="#" class="dropdown-item block px-4 py-2 text-sm text-gray-700 hover:text-primary">Mattress + Pillow Combos</a>
                            <a href="#" class="dropdown-item block px-4 py-2 text-sm text-gray-700 hover:text-primary">Complete Sleep Solutions</a>
                        </div>
                    </div>

                    <div class="relative group">
                        <button class="nav-link flex items-center text-black hover:text-primary">
                            Pillows
                            <i class="fas fa-chevron-down ml-2 h-4 w-1 text-current"></i>
                        </button>
                        <div class="dropdown-menu absolute left-0 mt-2 w-56 bg-white rounded-md shadow-lg py-1 z-50">
                            <a href="#" class="dropdown-item block px-4 py-2 text-sm text-gray-700 hover:text-primary">Memory Foam Pillows</a>
                            <a href="#" class="dropdown-item block px-4 py-2 text-sm text-gray-700 hover:text-primary">Neck Pain Pillows</a>
                            <a href="#" class="dropdown-item block px-4 py-2 text-sm text-gray-700 hover:text-primary">Orthopedic Pillows</a>
                            <a href="#" class="dropdown-item block px-4 py-2 text-sm text-gray-700 hover:text-primary">All Pillows</a>
                        </div>
                    </div>

                    <a href="#" class="nav-link text-primary hover:text-blue-800 font-medium">Offers</a>
                 
                </nav>

                <!-- Right Side Icons - Only mobile menu button visible on mobile -->
                <div class="flex items-center space-x-4">
                    <!-- Search Icon (Mobile) - Hidden on mobile, shown on md -->
                    <button class="hidden md:block lg:hidden p-2 text-gray-600 hover:text-primary">
                        <i class="fas fa-search h-5 w-5 text-current"></i>
                    </button>

                    <!-- Cart - Hidden on mobile, shown on md -->
                    <button id="cart-button" class="hidden md:block relative p-2 text-gray-600 hover:text-primary">
                        <i class="fas fa-shopping-cart text-xl"></i>
                        <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">0</span>
                    </button>

                    <!-- User Account - Hidden on mobile, shown on md -->
                    <a href="" class="hidden md:block p-2 text-gray-600 hover:text-primary" title="User Account">
                        <i class="fas fa-user text-xl"></i>
                    </a>

                    <!-- Mobile Menu Button - Always visible -->
                    <button class="lg:hidden p-2 text-gray-600 hover:text-primary" onclick="toggleMobileMenu()">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobileMenu" class="hidden lg:hidden pb-4">
                <div class="px-2 pt-2 pb-3 space-y-1 border-t border-gray-200 mt-4">
                    <!-- Mobile Search -->
                    <div class="mb-4">
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>
                            <input type="text" placeholder="What are you looking for?" class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg focus:ring-primary focus:border-primary">
                        </div>
                    </div>

                    <a href="#" class="block px-3 py-2 text-gray-700 hover:bg-gray-50 hover:text-primary">Mattress</a>
                    <a href="#" class="block px-3 py-2 text-gray-700 hover:bg-gray-50 hover:text-primary">Beds</a>
                    <a href="#" class="block px-3 py-2 text-gray-700 hover:bg-gray-50 hover:text-primary">Combos</a>
                    <a href="#" class="block px-3 py-2 text-gray-700 hover:bg-gray-50 hover:text-primary">Pillows</a>
                    <a href="#" class="block px-3 py-2 text-red-600 hover:bg-gray-50 font-medium">Offers</a>
                    <a href="#" class="block px-3 py-2 text-gray-700 hover:bg-gray-50 hover:text-primary">Experience</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Cart Sidebar -->
    <div class="fixed inset-0 overflow-hidden z-50" style="display: none;">
        <div id="overlay" class="overlay fixed inset-0 bg-black bg-opacity-50"></div>
        
        <div id="cart-sidebar" class="cart-sidebar fixed top-0 right-0 max-w-md w-full h-full bg-white shadow-xl flex flex-col">
            <!-- Header -->
            <div class="flex items-center justify-between p-4 border-b">
                <h2 class="text-xl font-bold text-gray-800">Your Shopping Cart</h2>
                <button id="close-cart" class="text-gray-400 hover:text-gray-600 transition-colors">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>
            
            <!-- Cart Items -->
            <div class="flex-1 overflow-y-auto p-4">
                <div id="cart-items">
                </div>
            </div>
            
            <!-- Cart Summary -->
            <div class="border-t border-gray-200 p-4 bg-gray-50">
                <div class="space-y-2 mb-4">
                    <div class="flex justify-between">
                        <span class="text-gray-600">Subtotal</span>
                        <span id="subtotal" class="font-medium">$1,018.98</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Shipping</span>
                        <span class="font-medium text-green-600">Free</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Tax</span>
                        <span id="tax" class="font-medium">$81.52</span>
                    </div>
                    <div class="flex justify-between pt-2 border-t border-gray-300">
                        <span class="text-lg font-bold">Total</span>
                        <span id="total" class="text-lg font-bold text-blue-600">$1,100.50</span>
                    </div>
                </div>
                
                <div class="mb-4">
                    <div class="flex items-center">
                        <input type="text" id="promo-code" placeholder="Enter promo code" class="flex-1 px-4 py-2 border border-gray-300 rounded-l-md focus:ring-blue-500 focus:border-blue-500">
                        <button id="apply-promo" class="bg-gray-200 text-gray-700 px-4 py-2 rounded-r-md hover:bg-gray-300 transition-colors">Apply</button>
                    </div>
                    <p id="promo-message" class="text-sm mt-1 text-green-600 hidden">Promo code applied successfully!</p>
                </div>
                
                <button class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 px-4 rounded-md font-medium mb-3 transition-colors">
                    Proceed to Checkout
                </button>
                
                <div class="text-center">
                    <a href="#" class="text-blue-600 hover:text-blue-800 text-sm transition-colors">Continue shopping</a>
                </div>
            </div>
        </div>
    </div>

    @yield('content')
    <footer class="bg-white py-6 md:py-12">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Left Section - Contact Info (Wider column) -->
                <div class="lg:w-[40%] xl:w-[35%]">
                    <!-- Phone -->
                    <div class="flex items-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.548 4.035a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.035 1.548a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <span class="text-gray-700 text-sm font-medium">1800-121-9439</span>
                    </div>
                    <p class="text-gray-500 text-sm mb-6 leading-relaxed">
                        You can reach us 7 days a week. Chat with us or call our toll-free number between 10:00 am to 7:00 pm.
                    </p>

                    <!-- Email -->
                    <div class="flex items-center mb-6 md:mb-8">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <a href="mailto:support@doctormattress.com" class="text-gray-700 hover:text-primary transition-colors text-sm">
                            support@doctormattress.com
                        </a>
                    </div>

                    <!-- Newsletter Signup -->
                    <div class="mb-6 md:mb-8">
                        <h3 class="text-lg font-bold text-primary mb-3 md:mb-4">Sleep Made Simple</h3>
                        <form class="relative">
                            <input
                                type="email"
                                placeholder="Enter Your Email"
                                class="w-full px-4 py-2 md:py-3 pr-20 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 text-sm">
                            <button
                                type="submit"
                                class="absolute right-1 top-1 bottom-1 bg-primary hover:bg-primary-dark text-white px-3 md:px-4 rounded-md text-xs md:text-sm font-medium transition-colors">
                                Sign Up
                            </button>
                        </form>
                    </div>

                    <!-- Logo -->
                    <div class="mb-6 md:mb-8">
                        <img src="{{ asset('img/logo/DM-LOGO-01.png') }}" alt="Doctor Mattresses Logo" class="h-16 md:h-20 w-auto max-w-[200px] md:max-w-[240px]">
                    </div>
                </div>

                <!-- Right Section - Three equal columns -->
                <div class="lg:w-[60%] xl:w-[65%]">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">
                        <!-- Collapsible Sections for Mobile -->
                        <!-- Products & Mattress by Size Column -->
                        <div class="md:hidden">
                            <button class="footer-collapse-toggle w-full flex justify-between items-center py-3 border-t border-gray-200">
                                <h4 class="text-base font-bold text-primary">Products & Sizes</h4>
                                <svg class="h-5 w-5 text-gray-500 transform transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div class="footer-collapse-content hidden px-2 pb-4">
                                <h5 class="text-sm font-bold text-primary mb-3 mt-2">Products</h5>
                                <ul class="space-y-2 mb-4">
                                    <li><a href="#" class="text-gray-600 hover:text-primary text-sm transition-colors">Mattress</a></li>
                                    <li><a href="#" class="text-gray-600 hover:text-primary text-sm transition-colors">Beds</a></li>
                                    <li><a href="#" class="text-gray-600 hover:text-primary text-sm transition-colors">Pillows</a></li>
                                </ul>

                                <h5 class="text-sm font-bold text-primary mb-3">Customer's Pick</h5>
                                <ul class="space-y-2 mb-4">
                                    <li><a href="#" class="text-gray-600 text-sm hover:text-primary transition-colors">Pillows for Neck-Pain</a></li>
                                    <li><a href="#" class="text-gray-600 text-sm hover:text-primary transition-colors">Mattress for Back-Pain</a></li>
                                </ul>

                                <h5 class="text-sm font-bold text-primary mb-3">Mattress by Size</h5>
                                <ul class="space-y-2">
                                    <li><a href="#" class="text-gray-600 text-sm hover:text-primary transition-colors">King Size Mattress</a></li>
                                    <li><a href="#" class="text-gray-600 text-sm hover:text-primary transition-colors">Queen Size Mattress</a></li>
                                    <li><a href="#" class="text-gray-600 text-sm hover:text-primary transition-colors">Double Bed Mattress</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Mattress By Material & Beds Column -->
                        <div class="md:hidden">
                            <button class="footer-collapse-toggle w-full flex justify-between items-center py-3 border-t border-gray-200">
                                <h4 class="text-base font-bold text-primary">Materials & Beds</h4>
                                <svg class="h-5 w-5 text-gray-500 transform transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div class="footer-collapse-content hidden px-2 pb-4">
                                <h5 class="text-sm font-bold text-primary mb-3 mt-2">Mattress By Material</h5>
                                <ul class="space-y-2 mb-4">
                                    <li><a href="#" class="text-gray-600 text-sm hover:text-primary transition-colors">Orthopedic Mattress</a></li>
                                    <li><a href="#" class="text-gray-600 text-sm hover:text-primary transition-colors">Bounce Foam Mattress</a></li>
                                    <li><a href="#" class="text-gray-600 text-sm hover:text-primary transition-colors">Latex Mattress</a></li>
                                </ul>

                                <h5 class="text-sm font-bold text-primary mb-3">Beds By Material</h5>
                                <ul class="space-y-2 mb-4">
                                    <li><a href="#" class="text-gray-600 text-sm hover:text-primary transition-colors">Metal Beds</a></li>
                                    <li><a href="#" class="text-gray-600 text-sm hover:text-primary transition-colors">Wooden Beds</a></li>
                                </ul>

                                <h5 class="text-sm font-bold text-primary mb-3">Beds By Size</h5>
                                <ul class="space-y-2">
                                    <li><a href="#" class="text-gray-600 text-sm hover:text-primary transition-colors">Single Beds</a></li>
                                    <li><a href="#" class="text-gray-600 text-sm hover:text-primary transition-colors">Double Beds</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Shop by City & Company Column -->
                        <div class="md:hidden">
                            <button class="footer-collapse-toggle w-full flex justify-between items-center py-3 border-t border-gray-200">
                                <h4 class="text-base font-bold text-primary">Cities & Social</h4>
                                <svg class="h-5 w-5 text-gray-500 transform transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div class="footer-collapse-content hidden px-2 pb-4">
                                <h5 class="text-sm font-bold text-primary mb-3 mt-2">Shop by City</h5>
                                <ul class="space-y-2 mb-4">
                                    <li><a href="#" class="text-gray-600 text-sm hover:text-primary transition-colors">Mattress in Bangalore</a></li>
                                    <li><a href="#" class="text-gray-600 text-sm hover:text-primary transition-colors">Mattress in Chennai</a></li>
                                    <li><a href="#" class="text-gray-600 text-sm hover:text-primary transition-colors">Mattress in Mumbai</a></li>
                                </ul>

                                <h5 class="text-sm font-bold text-primary mb-3">Payment Options</h5>
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <div class="px-2 py-1">
                                        <img src="{{ asset('img/payment/PAYMENT-01.svg') }}" alt="Payment" class="h-6 w-auto">
                                    </div>
                                    <div class="px-2 py-1">
                                        <img src="{{ asset('img/payment/PAYMENT-02.svg') }}" alt="Payment" class="h-6 w-auto">
                                    </div>
                                    <div class="px-2 py-1">
                                        <img src="{{ asset('img/payment/PAYMENT-03.svg') }}" alt="Payment" class="h-6 w-auto">
                                    </div>
                                </div>

                                <h5 class="text-sm font-bold text-primary mb-3">Follow us on</h5>
                                <div class="flex space-x-4">
                                    <a href="#" class="text-gray-500 hover:text-gray-900 transition-colors" aria-label="X (Twitter)">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-5 w-5" viewBox="0 0 24 24">
                                            <path d="M21.543 2H17.4l-4.174 6.001L8.861 2H2l7.585 10.744L2.228 22h4.31l4.5-6.47L15.14 22H22l-7.917-11.212L21.543 2Z" />
                                        </svg>
                                    </a>
                                    <a href="#" class="text-gray-500 hover:text-blue-600 transition-colors" aria-label="Facebook">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-5 w-5" viewBox="0 0 24 24">
                                            <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" />
                                        </svg>
                                    </a>
                                    <a href="#" class="text-gray-500 hover:text-pink-600 transition-colors" aria-label="Instagram">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-5 w-5" viewBox="0 0 24 24">
                                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Desktop Versions (Hidden on mobile) -->
                        <!-- Products & Mattress by Size Column -->
                        <div class="hidden md:block">
                            <h4 class="text-base md:text-lg font-bold text-primary mb-2 md:mb-2">Products</h4>
                            <ul class="space-y-2 mb-6 md:mb-8">
                                <li><a href="#" class="text-gray-600 hover:text-primary text-sm transition-colors">Mattress</a></li>
                                <li><a href="#" class="text-gray-600 hover:text-primary text-sm transition-colors">Beds</a></li>
                                <li><a href="#" class="text-gray-600 hover:text-primary text-sm transition-colors">Pillows</a></li>
                            </ul>

                            <h4 class="text-base md:text-lg font-bold text-primary mb-2 md:mb-2">Customer's Pick</h4>
                            <ul class="space-y-2 mb-6 md:mb-8">
                                <li><a href="#" class="text-gray-600 text-sm hover:text-primary transition-colors">Pillows for Neck-Pain</a></li>
                                <li><a href="#" class="text-gray-600 text-sm hover:text-primary transition-colors">Mattress for Back-Pain</a></li>
                            </ul>

                            <h4 class="text-base md:text-lg font-bold text-primary mb-2 md:mb-2">Mattress by Size</h4>
                            <ul class="space-y-2">
                                <li><a href="#" class="text-gray-600 text-sm hover:text-primary transition-colors">King Size Mattress</a></li>
                                <li><a href="#" class="text-gray-600 text-sm hover:text-primary transition-colors">Queen Size Mattress</a></li>
                                <li><a href="#" class="text-gray-600 text-sm hover:text-primary transition-colors">Double Bed Mattress</a></li>
                            </ul>
                        </div>

                        <!-- Mattress By Material & Beds Column -->
                        <div class="hidden md:block">
                            <h4 class="text-base md:text-lg font-bold text-primary mb-2 md:mb-2">Mattress By Material</h4>
                            <ul class="space-y-2 mb-6 md:mb-8">
                                <li><a href="#" class="text-gray-600 text-sm hover:text-primary transition-colors">Orthopedic Mattress</a></li>
                                <li><a href="#" class="text-gray-600 text-sm hover:text-primary transition-colors">Bounce Foam Mattress</a></li>
                                <li><a href="#" class="text-gray-600 text-sm hover:text-primary transition-colors">Latex Mattress</a></li>
                            </ul>

                            <h4 class="text-base md:text-lg font-bold text-primary mb-2 md:mb-2">Beds By Material</h4>
                            <ul class="space-y-2 mb-6 md:mb-8">
                                <li><a href="#" class="text-gray-600 text-sm hover:text-primary transition-colors">Metal Beds</a></li>
                                <li><a href="#" class="text-gray-600 text-sm hover:text-primary transition-colors">Wooden Beds</a></li>
                            </ul>

                            <h4 class="text-base md:text-lg font-bold text-primary mb-2 md:mb-2">Beds By Size</h4>
                            <ul class="space-y-2">
                                <li><a href="#" class="text-gray-600 text-sm hover:text-primary transition-colors">Single Beds</a></li>
                                <li><a href="#" class="text-gray-600 text-sm hover:text-primary transition-colors">Double Beds</a></li>
                            </ul>
                        </div>

                        <!-- Shop by City & Company Column -->
                        <div class="hidden md:block">
                            <h4 class="text-base md:text-lg font-bold text-primary mb-2 md:mb-2">Shop by City</h4>
                            <ul class="space-y-2 mb-6 md:mb-8">
                                <li><a href="#" class="text-gray-600 text-sm hover:text-primary transition-colors">Mattress in Bangalore</a></li>
                                <li><a href="#" class="text-gray-600 text-sm hover:text-primary transition-colors">Mattress in Chennai</a></li>
                                <li><a href="#" class="text-gray-600 text-sm hover:text-primary transition-colors">Mattress in Mumbai</a></li>
                            </ul>

                            <h4 class="text-base md:text-lg font-bold text-primary mb-2 md:mb-2">Payment Options</h4>
                            <div class="flex flex-wrap gap-2">
                                <div class="px-2 py-1">
                                    <img src="{{ asset('img/payment/PAYMENT-01.svg') }}" alt="Payment" class="h-6 w-auto">
                                </div>
                                <div class="px-2 py-1">
                                    <img src="{{ asset('img/payment/PAYMENT-02.svg') }}" alt="Payment" class="h-6 w-auto">
                                </div>
                                <div class="px-2 py-1">
                                    <img src="{{ asset('img/payment/PAYMENT-03.svg') }}" alt="Payment" class="h-6 w-auto">
                                </div>
                            </div>

                            <h4 class="text-base md:text-lg font-bold text-primary mt-4 mb-3 md:mb-4">Follow us on</h4>
                            <div class="flex space-x-4">
                                <a href="#" class="text-gray-500 hover:text-gray-900 transition-colors" aria-label="X (Twitter)">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-5 w-5" viewBox="0 0 24 24">
                                        <path d="M21.543 2H17.4l-4.174 6.001L8.861 2H2l7.585 10.744L2.228 22h4.31l4.5-6.47L15.14 22H22l-7.917-11.212L21.543 2Z" />
                                    </svg>
                                </a>
                                <a href="#" class="text-gray-500 hover:text-blue-600 transition-colors" aria-label="Facebook">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-5 w-5" viewBox="0 0 24 24">
                                        <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" />
                                    </svg>
                                </a>
                                <a href="#" class="text-gray-500 hover:text-pink-600 transition-colors" aria-label="Instagram">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-5 w-5" viewBox="0 0 24 24">
                                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mobile footer collapse functionality
            const collapseToggles = document.querySelectorAll('.footer-collapse-toggle');

            collapseToggles.forEach(toggle => {
                toggle.addEventListener('click', function() {
                    const content = this.nextElementSibling;
                    const icon = this.querySelector('svg');

                    // Toggle content visibility
                    content.classList.toggle('hidden');

                    // Rotate icon
                    if (content.classList.contains('hidden')) {
                        icon.classList.remove('rotate-180');
                    } else {
                        icon.classList.add('rotate-180');
                    }
                });
            });
        });
    </script>


    <div class="bg-blue-900 py-3 px-2">
        <div class="max-w-6xl mx-auto">
            <p class="text-xs text-white/80 leading-relaxed">
                <span class="font-semibold text-white">Popular Categories</span><br class="md:hidden">
                <span class="inline-block">
                    Memory Foam Mattress|Orthopedic Mattress|Spring Mattress|Dual Bonded Mattress|Pillow Memory Foam|Foundation|Pocket Essential Oil Pillows|Pocketet|Adjustable Sleeper Base|
                </span>
                <span class="inline-block">
                    Mattress|Queen Size Mattress|Foam Size Mattress|Double Bed|Orthopedic Bed Orthopedic|Mattresses Bed Comb Firm|Soft Bed Mattress|Queen Size Mattress|Memory Foam Bed Mattress|Bounce Foam Mattress
                </span>
            </p>
        </div>
    </div>

    <!-- Pink Copyright Section -->
    <div class="bg-secondary py-2 px-4">
        <div class="max-w-6xl mx-auto">
            <p class="text-white text-sm text-center font-medium">
                Copyright © 2025 AnnDoctorMattress. All Rights Reserved.
            </p>
        </div>
    </div>

    <script>
        // Cart data
        const cartItems = [
            {
                id: 1,
                name: "Orthopedic Memory Foam Mattress",
                description: "Queen Size",
                price: 899.00,
                quantity: 1,
                image: "https://images.unsplash.com/photo-1517705008128-361805f42e86?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80"
            },
            {
                id: 2,
                name: "Memory Foam Pillow",
                description: "Standard",
                price: 59.99,
                quantity: 2,
                image: "https://images.unsplash.com/photo-1556228453-efd6c1ff04f6?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80"
            }
        ];

        // DOM elements
        const cartButton = document.getElementById('cart-button');
        const viewCartBtn = document.getElementById('view-cart-btn');
        const closeCart = document.getElementById('close-cart');
        const overlay = document.getElementById('overlay');
        const cartSidebar = document.getElementById('cart-sidebar');
        const cartContainer = document.querySelector('.fixed.inset-0.overflow-hidden.z-50');
        const cartItemsContainer = document.getElementById('cart-items');
        const cartCount = document.getElementById('cart-count');
        const itemCount = document.getElementById('item-count');
        const subtotalEl = document.getElementById('subtotal');
        const taxEl = document.getElementById('tax');
        const totalEl = document.getElementById('total');
        const applyPromo = document.getElementById('apply-promo');
        const promoMessage = document.getElementById('promo-message');

        // Initialize cart
        function initCart() {
            updateCartDisplay();
            renderCartItems();
        }

        // Render cart items
        function renderCartItems() {
            cartItemsContainer.innerHTML = '';
            
            cartItems.forEach(item => {
                const itemEl = document.createElement('div');
                itemEl.className = 'cart-item border-b pb-4 mb-4';
                itemEl.innerHTML = `
                    <div class="flex items-center">
                        <div class="w-20 h-20 bg-gray-200 rounded-md overflow-hidden flex-shrink-0">
                            <img src="${item.image}" alt="${item.name}" class="w-full h-full object-cover">
                        </div>
                        <div class="ml-4 flex-1">
                            <h3 class="text-sm font-medium text-gray-800">${item.name}</h3>
                            <p class="text-sm text-gray-500">${item.description}</p>
                            <div class="flex justify-between items-center mt-2">
                                <div class="flex items-center border rounded-md">
                                    <button class="quantity-btn px-2 py-1 text-gray-600 decrease-qty" data-id="${item.id}">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <span class="px-2 py-1 quantity">${item.quantity}</span>
                                    <button class="quantity-btn px-2 py-1 text-gray-600 increase-qty" data-id="${item.id}">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                                <div class="flex items-center">
                                    <span class="text-sm font-medium text-gray-800 item-total">$${(item.price * item.quantity).toFixed(2)}</span>
                                    <button class="remove-btn ml-3 text-gray-400 hover:text-red-500" data-id="${item.id}">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
                cartItemsContainer.appendChild(itemEl);
            });
            
            // Add event listeners to quantity buttons
            document.querySelectorAll('.increase-qty').forEach(button => {
                button.addEventListener('click', () => {
                    const id = parseInt(button.getAttribute('data-id'));
                    increaseQuantity(id);
                });
            });
            
            document.querySelectorAll('.decrease-qty').forEach(button => {
                button.addEventListener('click', () => {
                    const id = parseInt(button.getAttribute('data-id'));
                    decreaseQuantity(id);
                });
            });
            
            document.querySelectorAll('.remove-btn').forEach(button => {
                button.addEventListener('click', () => {
                    const id = parseInt(button.getAttribute('data-id'));
                    removeItem(id);
                });
            });
        }

        // Update cart totals and display
        function updateCartDisplay() {
            // Calculate totals
            const subtotal = cartItems.reduce((sum, item) => sum + (item.price * item.quantity), 0);
            const tax = subtotal * 0.08;
            const total = subtotal + tax;
            
            // Update DOM
            subtotalEl.textContent = `$${subtotal.toFixed(2)}`;
            taxEl.textContent = `$${tax.toFixed(2)}`;
            totalEl.textContent = `$${total.toFixed(2)}`;
            
            // Update item count
            const totalItems = cartItems.reduce((sum, item) => sum + item.quantity, 0);
            cartCount.textContent = totalItems;
            itemCount.textContent = totalItems;
        }

        // Increase item quantity
        function increaseQuantity(id) {
            const item = cartItems.find(item => item.id === id);
            if (item) {
                item.quantity++;
                updateCartDisplay();
                renderCartItems();
            }
        }

        // Decrease item quantity
        function decreaseQuantity(id) {
            const item = cartItems.find(item => item.id === id);
            if (item && item.quantity > 1) {
                item.quantity--;
                updateCartDisplay();
                renderCartItems();
            }
        }

        // Remove item from cart
        function removeItem(id) {
            const index = cartItems.findIndex(item => item.id === id);
            if (index !== -1) {
                cartItems.splice(index, 1);
                updateCartDisplay();
                renderCartItems();
                
                // Close cart if empty
                if (cartItems.length === 0) {
                    setTimeout(closeCartSidebar, 300);
                }
            }
        }

        // Open cart sidebar
        function openCart() {
            cartContainer.style.display = 'block';
            setTimeout(() => {
                cartSidebar.classList.add('open');
                overlay.classList.add('open');
            }, 10);
            document.body.style.overflow = 'hidden';
        }

        // Close cart sidebar
        function closeCartSidebar() {
            cartSidebar.classList.remove('open');
            overlay.classList.remove('open');
            setTimeout(() => {
                cartContainer.style.display = 'none';
            }, 300);
            document.body.style.overflow = 'auto';
        }

        // Event listeners
        document.addEventListener('DOMContentLoaded', initCart);
        
        cartButton.addEventListener('click', openCart);
        viewCartBtn.addEventListener('click', openCart);
        closeCart.addEventListener('click', closeCartSidebar);
        overlay.addEventListener('click', closeCartSidebar);
        
        // Promo code application
        applyPromo.addEventListener('click', () => {
            const promoCode = document.getElementById('promo-code').value;
            if (promoCode.toUpperCase() === 'SLEEP10') {
                // Apply 10% discount
                const currentTotal = parseFloat(totalEl.textContent.replace('$', ''));
                const discountedTotal = currentTotal * 0.9;
                totalEl.textContent = `$${discountedTotal.toFixed(2)}`;
                promoMessage.classList.remove('hidden');
                
                // Change promo button
                applyPromo.textContent = 'Applied';
                applyPromo.classList.add('bg-green-500', 'text-white');
                applyPromo.classList.remove('bg-gray-200', 'text-gray-700', 'hover:bg-gray-300');
            }
        });
        
        // Close cart with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') closeCartSidebar();
        });
    </script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>

