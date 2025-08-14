@extends('includes.inc')
@section('content')
<div class="bg-gray-100 min-h-screen">
    <!-- Banner Section -->
    <div class="relative h-auto sm:h-64 md:h-80 w-full overflow-hidden">
        <img src="{{asset('img/banners/Offer.png')}}" 
             alt="Special Offers Banner" 
             class="w-full h-full object-cover">
        <!-- <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
            <div class="text-center text-white px-4">
                <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-2 sm:mb-4">Exclusive Offers</h1>
                <p class="text-base sm:text-xl md:text-2xl max-w-2xl mx-auto">Discover our best deals on premium mattresses</p>
            </div>
        </div> -->
    </div>

    <!-- Offers Section -->
    <div class="container mx-auto px-4 sm:px-6 py-8 sm:py-12">
        <div class="text-center mb-8 sm:mb-12">
            <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-2">Current Promotions</h2>
            <div class="w-20 sm:w-24 h-1 bg-blue-600 mx-auto"></div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
            <!-- Product 1 -->
            <div class="bg-white rounded-xl overflow-hidden shadow-md sm:shadow-lg transform transition-all duration-300">
                <div class="relative h-48 sm:h-56 md:h-64 overflow-hidden group">
                    <img src="{{ asset('img/mattress/m10.avif') }}" 
                         class="w-full h-full object-cover transition duration-500 group-hover:scale-105">
                    <div class="absolute top-3 right-3 sm:top-4 sm:right-4 bg-red-500 text-white text-xs font-bold px-2 py-0.5 sm:px-3 sm:py-1 rounded-full">
                        BESTSELLER
                    </div>
                    <div class="absolute bottom-3 left-3 sm:bottom-4 sm:left-4 bg-white/90 text-blue-800 font-bold px-2 py-0.5 sm:px-3 sm:py-1 rounded-full text-xs sm:text-sm">
                        -20% OFF
                    </div>
                </div>
                <div class="p-4 sm:p-6">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-lg sm:text-xl font-bold">OrthoCare Pro</h3>
                        <span class="bg-blue-100 text-blue-800 text-xs px-2 py-0.5 rounded-full">Medical Grade</span>
                    </div>
                    <p class="text-gray-600 text-sm sm:text-base mb-3 sm:mb-4">Advanced orthopedic support for chronic back pain sufferers.</p>
                    <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-2 sm:gap-0">
                        <div class="flex flex-col sm:flex-row sm:items-center">
                            <span class="text-blue-600 font-bold text-base sm:text-lg">₹24,999</span>
                            <span class="text-gray-400 text-xs sm:text-sm line-through sm:ml-2">₹29,999</span>
                        </div>
                        <button class="bg-blue-600 hover:bg-blue-700 text-white py-1.5 sm:py-2 px-3 sm:px-4 rounded-full text-xs sm:text-sm transition-all duration-300">
                            <i class="fas fa-shopping-cart mr-1 sm:mr-2"></i> Add to Cart
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Product 2 -->
            <div class="bg-white rounded-xl overflow-hidden shadow-md sm:shadow-lg transform transition-all duration-300">
                <div class="relative h-48 sm:h-56 md:h-64 overflow-hidden group">
                    <img src="{{ asset('img/mattress/m11.avif') }}" 
                         class="w-full h-full object-cover transition duration-500 group-hover:scale-105">
                    <div class="absolute top-3 right-3 sm:top-4 sm:right-4 bg-green-500 text-white text-xs font-bold px-2 py-0.5 sm:px-3 sm:py-1 rounded-full">
                        NEW
                    </div>
                    <div class="absolute bottom-3 left-3 sm:bottom-4 sm:left-4 bg-white/90 text-blue-800 font-bold px-2 py-0.5 sm:px-3 sm:py-1 rounded-full text-xs sm:text-sm">
                        -15% OFF
                    </div>
                </div>
                <div class="p-4 sm:p-6">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-lg sm:text-xl font-bold">MemoryFoam Elite</h3>
                        <span class="bg-blue-100 text-blue-800 text-xs px-2 py-0.5 rounded-full">Cooling Tech</span>
                    </div>
                    <p class="text-gray-600 text-sm sm:text-base mb-3 sm:mb-4">Premium memory foam that contours to your body perfectly.</p>
                    <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-2 sm:gap-0">
                        <div class="flex flex-col sm:flex-row sm:items-center">
                            <span class="text-blue-600 font-bold text-base sm:text-lg">₹32,999</span>
                            <span class="text-gray-400 text-xs sm:text-sm line-through sm:ml-2">₹38,999</span>
                        </div>
                        <button class="bg-blue-600 hover:bg-blue-700 text-white py-1.5 sm:py-2 px-3 sm:px-4 rounded-full text-xs sm:text-sm transition-all duration-300">
                            <i class="fas fa-shopping-cart mr-1 sm:mr-2"></i> Add to Cart
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Product 3 -->
            <div class="bg-white rounded-xl overflow-hidden shadow-md sm:shadow-lg transform transition-all duration-300">
                <div class="relative h-48 sm:h-56 md:h-64 overflow-hidden group">
                    <img src="{{ asset('img/mattress/m12.avif') }}" 
                         class="w-full h-full object-cover transition duration-500 group-hover:scale-105">
                    <div class="absolute bottom-3 left-3 sm:bottom-4 sm:left-4 bg-white/90 text-blue-800 font-bold px-2 py-0.5 sm:px-3 sm:py-1 rounded-full text-xs sm:text-sm">
                        -10% OFF
                    </div>
                </div>
                <div class="p-4 sm:p-6">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-lg sm:text-xl font-bold">Hybrid Luxe</h3>
                        <span class="bg-blue-100 text-blue-800 text-xs px-2 py-0.5 rounded-full">Best of Both</span>
                    </div>
                    <p class="text-gray-600 text-sm sm:text-base mb-3 sm:mb-4">Combination of springs and foam for balanced support.</p>
                    <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-2 sm:gap-0">
                        <div class="flex flex-col sm:flex-row sm:items-center">
                            <span class="text-blue-600 font-bold text-base sm:text-lg">₹28,999</span>
                            <span class="text-gray-400 text-xs sm:text-sm line-through sm:ml-2">₹34,999</span>
                        </div>
                        <button class="bg-blue-600 hover:bg-blue-700 text-white py-1.5 sm:py-2 px-3 sm:px-4 rounded-full text-xs sm:text-sm transition-all duration-300">
                            <i class="fas fa-shopping-cart mr-1 sm:mr-2"></i> Add to Cart
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="bg-white rounded-xl overflow-hidden shadow-md sm:shadow-lg transform transition-all duration-300">
                <div class="relative h-48 sm:h-56 md:h-64 overflow-hidden group">
                    <img src="{{ asset('img/mattress/m6.jpg') }}" 
                         class="w-full h-full object-cover transition duration-500 group-hover:scale-105">
                    <div class="absolute top-3 right-3 sm:top-4 sm:right-4 bg-yellow-500 text-white text-xs font-bold px-2 py-0.5 sm:px-3 sm:py-1 rounded-full">
                        LIMITED
                    </div>
                    <div class="absolute bottom-3 left-3 sm:bottom-4 sm:left-4 bg-white/90 text-blue-800 font-bold px-2 py-0.5 sm:px-3 sm:py-1 rounded-full text-xs sm:text-sm">
                        -25% OFF
                    </div>
                </div>
                <div class="p-4 sm:p-6">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-lg sm:text-xl font-bold">Latex Comfort</h3>
                        <span class="bg-blue-100 text-blue-800 text-xs px-2 py-0.5 rounded-full">Natural</span>
                    </div>
                    <p class="text-gray-600 text-sm sm:text-base mb-3 sm:mb-4">100% natural latex mattress for eco-conscious sleepers.</p>
                    <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-2 sm:gap-0">
                        <div class="flex flex-col sm:flex-row sm:items-center">
                            <span class="text-blue-600 font-bold text-base sm:text-lg">₹36,999</span>
                            <span class="text-gray-400 text-xs sm:text-sm line-through sm:ml-2">₹49,999</span>
                        </div>
                        <button class="bg-blue-600 hover:bg-blue-700 text-white py-1.5 sm:py-2 px-3 sm:px-4 rounded-full text-xs sm:text-sm transition-all duration-300">
                            <i class="fas fa-shopping-cart mr-1 sm:mr-2"></i> Add to Cart
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 5 -->
            <div class="bg-white rounded-xl overflow-hidden shadow-md sm:shadow-lg transform transition-all duration-300">
                <div class="relative h-48 sm:h-56 md:h-64 overflow-hidden group">
                    <img src="{{ asset('img/mattress/m13.avif') }}" 
                         alt="Pillow Top Deluxe" 
                         class="w-full h-full object-cover transition duration-500 group-hover:scale-105">
                    <div class="absolute bottom-3 left-3 sm:bottom-4 sm:left-4 bg-white/90 text-blue-800 font-bold px-2 py-0.5 sm:px-3 sm:py-1 rounded-full text-xs sm:text-sm">
                        -18% OFF
                    </div>
                </div>
                <div class="p-4 sm:p-6">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-lg sm:text-xl font-bold">Pillow Top Deluxe</h3>
                        <span class="bg-blue-100 text-blue-800 text-xs px-2 py-0.5 rounded-full">Ultra Soft</span>
                    </div>
                    <p class="text-gray-600 text-sm sm:text-base mb-3 sm:mb-4">Luxurious pillow top for maximum comfort and softness.</p>
                    <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-2 sm:gap-0">
                        <div class="flex flex-col sm:flex-row sm:items-center">
                            <span class="text-blue-600 font-bold text-base sm:text-lg">₹27,499</span>
                            <span class="text-gray-400 text-xs sm:text-sm line-through sm:ml-2">₹33,499</span>
                        </div>
                        <button class="bg-blue-600 hover:bg-blue-700 text-white py-1.5 sm:py-2 px-3 sm:px-4 rounded-full text-xs sm:text-sm transition-all duration-300">
                            <i class="fas fa-shopping-cart mr-1 sm:mr-2"></i> Add to Cart
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 6 -->
            <div class="bg-white rounded-xl overflow-hidden shadow-md sm:shadow-lg transform transition-all duration-300">
                <div class="relative h-48 sm:h-56 md:h-64 overflow-hidden group">
                    <img src="{{ asset('img/mattress/m8.jpg') }}" 
                         alt="Adjustable Base" 
                         class="w-full h-full object-cover transition duration-500 group-hover:scale-105">
                    <div class="absolute top-3 right-3 sm:top-4 sm:right-4 bg-purple-500 text-white text-xs font-bold px-2 py-0.5 sm:px-3 sm:py-1 rounded-full">
                        SMART
                    </div>
                    <div class="absolute bottom-3 left-3 sm:bottom-4 sm:left-4 bg-white/90 text-blue-800 font-bold px-2 py-0.5 sm:px-3 sm:py-1 rounded-full text-xs sm:text-sm">
                        -12% OFF
                    </div>
                </div>
                <div class="p-4 sm:p-6">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-lg sm:text-xl font-bold">Smart Adjustable</h3>
                        <span class="bg-blue-100 text-blue-800 text-xs px-2 py-0.5 rounded-full">High-Tech</span>
                    </div>
                    <p class="text-gray-600 text-sm sm:text-base mb-3 sm:mb-4">Smart adjustable base with massage and zero-gravity features.</p>
                    <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-2 sm:gap-0">
                        <div class="flex flex-col sm:flex-row sm:items-center">
                            <span class="text-blue-600 font-bold text-base sm:text-lg">₹45,999</span>
                            <span class="text-gray-400 text-xs sm:text-sm line-through sm:ml-2">₹52,299</span>
                        </div>
                        <button class="bg-blue-600 hover:bg-blue-700 text-white py-1.5 sm:py-2 px-3 sm:px-4 rounded-full text-xs sm:text-sm transition-all duration-300">
                            <i class="fas fa-shopping-cart mr-1 sm:mr-2"></i> Add to Cart
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection