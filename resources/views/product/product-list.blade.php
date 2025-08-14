@extends('includes.inc')
@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <!-- Page Header -->
    <div class="mb-8 text-center">
        <h1 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-2">Ann Doctor Mattress Collection</h1>
        <p class="text-gray-600 max-w-3xl mx-auto">Doctor-recommended orthopedic mattresses for perfect spinal alignment and restful sleep</p>
    </div>

    <!-- Filters and Sorting - Responsive -->
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-8 gap-4">
        <div class="w-full sm:w-auto">
            <label for="sort" class="sr-only">Sort</label>
            <select id="sort" class="border border-gray-300 rounded-lg px-4 py-2 w-full sm:w-48 text-sm">
                <option>Sort by: Featured</option>
                <option>Price: Low to High</option>
                <option>Price: High to Low</option>
                <option>Customer Rating</option>
                <option>Newest Arrivals</option>
            </select>
        </div>
        <div class="flex items-center gap-2 text-sm w-full sm:w-auto">
            <span class="text-gray-600 whitespace-nowrap">24 Products</span>
            <div class="border-l border-gray-300 h-6"></div>
            <div class="flex gap-2 overflow-x-auto pb-2 sm:pb-0">
                <button class="px-3 py-1 bg-[#D61261] text-white rounded-full whitespace-nowrap text-xs sm:text-sm">All</button>
                <button class="px-3 py-1 bg-gray-100 hover:bg-gray-200 rounded-full whitespace-nowrap text-xs sm:text-sm transition">OrthoCare™</button>
                <button class="px-3 py-1 bg-gray-100 hover:bg-gray-200 rounded-full whitespace-nowrap text-xs sm:text-sm transition">BasicCare®</button>
                <button class="px-3 py-1 bg-gray-100 hover:bg-gray-200 rounded-full whitespace-nowrap text-xs sm:text-sm transition">Single</button>
                <button class="px-3 py-1 bg-gray-100 hover:bg-gray-200 rounded-full whitespace-nowrap text-xs sm:text-sm transition">Queen</button>
                <button class="px-3 py-1 bg-gray-100 hover:bg-gray-200 rounded-full whitespace-nowrap text-xs sm:text-sm transition">King</button>
            </div>
        </div>
    </div>

    <!-- Product Grid - Responsive -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 sm:gap-8">
        <!-- Product Card 1 -->
        <div class="product-card bg-white rounded-xl overflow-hidden shadow-lg transform transition-all duration-500 hover:-translate-y-2 hover:shadow-xl">
            <div class="h-48 sm:h-56 md:h-64 bg-[#F8E8EE] flex items-center justify-center relative overflow-hidden group">
                <img src="https://images.unsplash.com/photo-1616627561839-074385245ff6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1790&q=80" 
                     alt="OrthoCare Supreme" 
                     class="h-full w-full object-cover transition duration-700 ease-in-out group-hover:scale-110">
                <div class="absolute top-4 right-4 bg-[#D61261] text-white text-xs font-bold px-3 py-1 rounded-full transform transition duration-300 hover:scale-110">
                    NEW
                </div>
                <div class="absolute bottom-4 left-4 bg-white/90 text-[#D61261] font-bold px-3 py-1 rounded-full transform transition duration-300 hover:scale-105">
                    -15% OFF
                </div>
            </div>
            <div class="p-4 sm:p-6">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="text-lg sm:text-xl font-bold">OrthoCare Supreme</h3>
                    <span class="bg-[#2688D8]/10 text-[#2688D8] text-xs px-2 py-1 rounded-full">Cooling Tech</span>
                </div>
                <p class="text-gray-600 text-sm sm:text-base mb-4">Advanced orthopedic support with temperature regulation.</p>
                <div class="flex justify-between items-center">
                    <div>
                        <span class="text-[#D61261] font-bold text-lg">₹32,999</span>
                        <span class="text-gray-400 text-sm line-through ml-2">₹38,999</span>
                    </div>
                    <button class="bg-[#D61261] hover:bg-[#B20F54] text-white py-1 sm:py-2 px-3 sm:px-4 rounded-full text-xs sm:text-sm transition-all duration-300 transform hover:scale-105 flex items-center">
                        <i class="fas fa-shopping-cart mr-1 sm:mr-2 text-xs sm:text-sm"></i> Add
                    </button>
                </div>
            </div>
        </div>

        <!-- Product Card 2 -->
        <div class="product-card bg-white rounded-xl overflow-hidden shadow-lg transform transition-all duration-500 hover:-translate-y-2 hover:shadow-xl">
            <div class="h-48 sm:h-56 md:h-64 bg-[#F8E8EE] flex items-center justify-center relative overflow-hidden group">
                <img src="https://images.unsplash.com/photo-1631049035326-57414b20c93e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                     alt="BasicCare Plus" 
                     class="h-full w-full object-cover transition duration-700 ease-in-out group-hover:scale-110">
                <div class="absolute bottom-4 left-4 bg-white/90 text-[#D61261] font-bold px-3 py-1 rounded-full transform transition duration-300 hover:scale-105">
                    -10% OFF
                </div>
            </div>
            <div class="p-4 sm:p-6">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="text-lg sm:text-xl font-bold">BasicCare Plus</h3>
                    <span class="bg-[#2688D8]/10 text-[#2688D8] text-xs px-2 py-1 rounded-full">Eco-Friendly</span>
                </div>
                <p class="text-gray-600 text-sm sm:text-base mb-4">Essential orthopedic support at an affordable price.</p>
                <div class="flex justify-between items-center">
                    <div>
                        <span class="text-[#D61261] font-bold text-lg">₹22,999</span>
                        <span class="text-gray-400 text-sm line-through ml-2">₹25,999</span>
                    </div>
                    <button class="bg-[#D61261] hover:bg-[#B20F54] text-white py-1 sm:py-2 px-3 sm:px-4 rounded-full text-xs sm:text-sm transition-all duration-300 transform hover:scale-105 flex items-center">
                        <i class="fas fa-shopping-cart mr-1 sm:mr-2 text-xs sm:text-sm"></i> Add
                    </button>
                </div>
            </div>
        </div>

        <!-- Product Card 3 -->
        <div class="product-card bg-white rounded-xl overflow-hidden shadow-lg transform transition-all duration-500 hover:-translate-y-2 hover:shadow-xl">
            <div class="h-48 sm:h-56 md:h-64 bg-[#F8E8EE] flex items-center justify-center relative overflow-hidden group">
                <img src="https://images.unsplash.com/photo-1631049307264-da0ec9d70304?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1632&q=80" 
                     alt="OrthoCare Deluxe" 
                     class="h-full w-full object-cover transition duration-700 ease-in-out group-hover:scale-110">
                <div class="absolute top-4 right-4 bg-[#2688D8] text-white text-xs font-bold px-3 py-1 rounded-full transform transition duration-300 hover:scale-110">
                    BESTSELLER
                </div>
            </div>
            <div class="p-4 sm:p-6">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="text-lg sm:text-xl font-bold">OrthoCare Deluxe</h3>
                    <span class="bg-[#2688D8]/10 text-[#2688D8] text-xs px-2 py-1 rounded-full">5-Zone Support</span>
                </div>
                <p class="text-gray-600 text-sm sm:text-base mb-4">Premium orthopedic mattress with zoned support system.</p>
                <div class="flex justify-between items-center">
                    <div>
                        <span class="text-[#D61261] font-bold text-lg">₹45,999</span>
                        <span class="text-gray-400 text-sm line-through ml-2">₹52,999</span>
                    </div>
                    <button class="bg-[#D61261] hover:bg-[#B20F54] text-white py-1 sm:py-2 px-3 sm:px-4 rounded-full text-xs sm:text-sm transition-all duration-300 transform hover:scale-105 flex items-center">
                        <i class="fas fa-shopping-cart mr-1 sm:mr-2 text-xs sm:text-sm"></i> Add
                    </button>
                </div>
            </div>
        </div>

        <!-- Product Card 4 -->
        <div class="product-card bg-white rounded-xl overflow-hidden shadow-lg transform transition-all duration-500 hover:-translate-y-2 hover:shadow-xl">
            <div class="h-48 sm:h-56 md:h-64 bg-[#F8E8EE] flex items-center justify-center relative overflow-hidden group">
                <img src="https://images.unsplash.com/photo-1583845112203-29329902330b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                     alt="Kids OrthoCare" 
                     class="h-full w-full object-cover transition duration-700 ease-in-out group-hover:scale-110">
                <div class="absolute top-4 right-4 bg-[#D61261] text-white text-xs font-bold px-3 py-1 rounded-full transform transition duration-300 hover:scale-110">
                    NEW
                </div>
                <div class="absolute bottom-4 left-4 bg-white/90 text-[#D61261] font-bold px-3 py-1 rounded-full transform transition duration-300 hover:scale-105">
                    -20% OFF
                </div>
            </div>
            <div class="p-4 sm:p-6">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="text-lg sm:text-xl font-bold">Kids OrthoCare</h3>
                    <span class="bg-[#2688D8]/10 text-[#2688D8] text-xs px-2 py-1 rounded-full">Waterproof</span>
                </div>
                <p class="text-gray-600 text-sm sm:text-base mb-4">Orthopedic support mattress for growing children.</p>
                <div class="flex justify-between items-center">
                    <div>
                        <span class="text-[#D61261] font-bold text-lg">₹18,999</span>
                        <span class="text-gray-400 text-sm line-through ml-2">₹23,999</span>
                    </div>
                    <button class="bg-[#D61261] hover:bg-[#B20F54] text-white py-1 sm:py-2 px-3 sm:px-4 rounded-full text-xs sm:text-sm transition-all duration-300 transform hover:scale-105 flex items-center">
                        <i class="fas fa-shopping-cart mr-1 sm:mr-2 text-xs sm:text-sm"></i> Add
                    </button>
                </div>
            </div>
        </div>

        <!-- Product Card 5 -->
        <div class="product-card bg-white rounded-xl overflow-hidden shadow-lg transform transition-all duration-500 hover:-translate-y-2 hover:shadow-xl">
            <div class="h-48 sm:h-56 md:h-64 bg-[#F8E8EE] flex items-center justify-center relative overflow-hidden group">
                <img src="https://images.unsplash.com/photo-1583845112203-29329902330b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                     alt="Kids OrthoCare" 
                     class="h-full w-full object-cover transition duration-700 ease-in-out group-hover:scale-110">
                <div class="absolute top-4 right-4 bg-[#D61261] text-white text-xs font-bold px-3 py-1 rounded-full transform transition duration-300 hover:scale-110">
                    NEW
                </div>
                <div class="absolute bottom-4 left-4 bg-white/90 text-[#D61261] font-bold px-3 py-1 rounded-full transform transition duration-300 hover:scale-105">
                    -20% OFF
                </div>
            </div>
            <div class="p-4 sm:p-6">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="text-lg sm:text-xl font-bold">Kids OrthoCare</h3>
                    <span class="bg-[#2688D8]/10 text-[#2688D8] text-xs px-2 py-1 rounded-full">Waterproof</span>
                </div>
                <p class="text-gray-600 text-sm sm:text-base mb-4">Orthopedic support mattress for growing children.</p>
                <div class="flex justify-between items-center">
                    <div>
                        <span class="text-[#D61261] font-bold text-lg">₹18,999</span>
                        <span class="text-gray-400 text-sm line-through ml-2">₹23,999</span>
                    </div>
                    <button class="bg-[#D61261] hover:bg-[#B20F54] text-white py-1 sm:py-2 px-3 sm:px-4 rounded-full text-xs sm:text-sm transition-all duration-300 transform hover:scale-105 flex items-center">
                        <i class="fas fa-shopping-cart mr-1 sm:mr-2 text-xs sm:text-sm"></i> Add
                    </button>
                </div>
            </div>
        </div>

        <!-- Product Card 6 -->
        <div class="product-card bg-white rounded-xl overflow-hidden shadow-lg transform transition-all duration-500 hover:-translate-y-2 hover:shadow-xl">
            <div class="h-48 sm:h-56 md:h-64 bg-[#F8E8EE] flex items-center justify-center relative overflow-hidden group">
                <img src="https://images.unsplash.com/photo-1583845112203-29329902330b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                     alt="Kids OrthoCare" 
                     class="h-full w-full object-cover transition duration-700 ease-in-out group-hover:scale-110">
                <div class="absolute top-4 right-4 bg-[#D61261] text-white text-xs font-bold px-3 py-1 rounded-full transform transition duration-300 hover:scale-110">
                    NEW
                </div>
                <div class="absolute bottom-4 left-4 bg-white/90 text-[#D61261] font-bold px-3 py-1 rounded-full transform transition duration-300 hover:scale-105">
                    -20% OFF
                </div>
            </div>
            <div class="p-4 sm:p-6">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="text-lg sm:text-xl font-bold">Kids OrthoCare</h3>
                    <span class="bg-[#2688D8]/10 text-[#2688D8] text-xs px-2 py-1 rounded-full">Waterproof</span>
                </div>
                <p class="text-gray-600 text-sm sm:text-base mb-4">Orthopedic support mattress for growing children.</p>
                <div class="flex justify-between items-center">
                    <div>
                        <span class="text-[#D61261] font-bold text-lg">₹18,999</span>
                        <span class="text-gray-400 text-sm line-through ml-2">₹23,999</span>
                    </div>
                    <button class="bg-[#D61261] hover:bg-[#B20F54] text-white py-1 sm:py-2 px-3 sm:px-4 rounded-full text-xs sm:text-sm transition-all duration-300 transform hover:scale-105 flex items-center">
                        <i class="fas fa-shopping-cart mr-1 sm:mr-2 text-xs sm:text-sm"></i> Add
                    </button>
                </div>
            </div>
        </div>

        <!-- Product Card 7 -->
        <div class="product-card bg-white rounded-xl overflow-hidden shadow-lg transform transition-all duration-500 hover:-translate-y-2 hover:shadow-xl">
            <div class="h-48 sm:h-56 md:h-64 bg-[#F8E8EE] flex items-center justify-center relative overflow-hidden group">
                <img src="https://images.unsplash.com/photo-1583845112203-29329902330b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                     alt="Kids OrthoCare" 
                     class="h-full w-full object-cover transition duration-700 ease-in-out group-hover:scale-110">
                <div class="absolute top-4 right-4 bg-[#D61261] text-white text-xs font-bold px-3 py-1 rounded-full transform transition duration-300 hover:scale-110">
                    NEW
                </div>
                <div class="absolute bottom-4 left-4 bg-white/90 text-[#D61261] font-bold px-3 py-1 rounded-full transform transition duration-300 hover:scale-105">
                    -20% OFF
                </div>
            </div>
            <div class="p-4 sm:p-6">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="text-lg sm:text-xl font-bold">Kids OrthoCare</h3>
                    <span class="bg-[#2688D8]/10 text-[#2688D8] text-xs px-2 py-1 rounded-full">Waterproof</span>
                </div>
                <p class="text-gray-600 text-sm sm:text-base mb-4">Orthopedic support mattress for growing children.</p>
                <div class="flex justify-between items-center">
                    <div>
                        <span class="text-[#D61261] font-bold text-lg">₹18,999</span>
                        <span class="text-gray-400 text-sm line-through ml-2">₹23,999</span>
                    </div>
                    <button class="bg-[#D61261] hover:bg-[#B20F54] text-white py-1 sm:py-2 px-3 sm:px-4 rounded-full text-xs sm:text-sm transition-all duration-300 transform hover:scale-105 flex items-center">
                        <i class="fas fa-shopping-cart mr-1 sm:mr-2 text-xs sm:text-sm"></i> Add
                    </button>
                </div>
            </div>
        </div>
    </div>

    

    <!-- Benefits Section - Responsive -->
    <div class="mt-16 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8">
        <div class="bg-white p-6 rounded-xl shadow-sm flex items-start">
            <div class="bg-[#F8E8EE] p-3 rounded-full mr-4">
                <i class="fas fa-truck text-[#D61261] text-lg"></i>
            </div>
            <div>
                <h3 class="font-bold text-gray-900 mb-1">Free Shipping</h3>
                <p class="text-gray-600 text-sm">On all orders over ₹10,000</p>
            </div>
        </div>
        <div class="bg-white p-6 rounded-xl shadow-sm flex items-start">
            <div class="bg-[#F8E8EE] p-3 rounded-full mr-4">
                <i class="fas fa-undo text-[#D61261] text-lg"></i>
            </div>
            <div>
                <h3 class="font-bold text-gray-900 mb-1">120-Night Trial</h3>
                <p class="text-gray-600 text-sm">Try it risk-free at home</p>
            </div>
        </div>
        <div class="bg-white p-6 rounded-xl shadow-sm flex items-start">
            <div class="bg-[#F8E8EE] p-3 rounded-full mr-4">
                <i class="fas fa-shield-alt text-[#D61261] text-lg"></i>
            </div>
            <div>
                <h3 class="font-bold text-gray-900 mb-1">12-Year Warranty</h3>
                <p class="text-gray-600 text-sm">Doctor-approved durability</p>
            </div>
        </div>
        <div class="bg-white p-6 rounded-xl shadow-sm flex items-start">
            <div class="bg-[#F8E8EE] p-3 rounded-full mr-4">
                <i class="fas fa-headset text-[#D61261] text-lg"></i>
            </div>
            <div>
                <h3 class="font-bold text-gray-900 mb-1">24/7 Support</h3>
                <p class="text-gray-600 text-sm">Orthopedic experts available</p>
            </div>
        </div>
    </div>
</div>

<style>
    .product-card {
        animation: slideIn 0.5s ease-out forwards;
        opacity: 0;
    }
    
    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateX(-20px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
    
    .product-card:nth-child(1) { animation-delay: 0.1s; }
    .product-card:nth-child(2) { animation-delay: 0.2s; }
    .product-card:nth-child(3) { animation-delay: 0.3s; }
    .product-card:nth-child(4) { animation-delay: 0.4s; }
</style>

<script>
    // Product card hover effects
    document.querySelectorAll('.product-card').forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.querySelector('img').style.transform = 'scale(1.1)';
        });
        card.addEventListener('mouseleave', function() {
            this.querySelector('img').style.transform = 'scale(1)';
        });
    });
</script>
@endsection