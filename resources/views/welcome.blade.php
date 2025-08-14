@extends('includes.inc')
@section('content')
<!-- Hero Banner with Fade-in Animation -->
<div
    class="w-full overflow-hidden"
    x-data="{ slide: 1, interval: null, isMobile: window.innerWidth < 768 }"
    x-init="
        // Check if mobile on init
        isMobile = window.innerWidth < 768;
        
        // Update on resize
        window.addEventListener('resize', () => {
            isMobile = window.innerWidth < 768;
        });
        
        // Slideshow interval
        interval = setInterval(() => {
            slide = slide === 5 ? 1 : slide + 1
        }, 3500);
        $watch('slide', () => {
            clearInterval(interval);
            interval = setInterval(() => {
                slide = slide === 5 ? 1 : slide + 1
            }, 3500);
        });
    ">
    <div class="relative w-full">
        <!-- Desktop Slides -->
        <template x-if="!isMobile">
            <div>
                <img
                    x-show="slide === 1"
                    src="{{ asset('img/banners/BANNER-01.png') }}"
                    alt="Welcome 1"
                    class="absolute inset-0 w-full h-auto object-cover"
                    x-transition:enter="transition-opacity duration-1000"
                    x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="transition-opacity duration-1000"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0">
                <img
                    x-show="slide === 2"
                    src="{{ asset('img/banners/BANNER-02.png') }}"
                    alt="Welcome 2"
                    class="absolute inset-0 w-full h-auto object-cover"
                    x-transition:enter="transition-opacity duration-1000"
                    x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="transition-opacity duration-1000"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0">
                <img
                    x-show="slide === 3"
                    src="{{ asset('img/banners/BANNER-05.png') }}"
                    alt="Welcome 3"
                    class="absolute inset-0 w-full h-auto object-cover"
                    x-transition:enter="transition-opacity duration-1000"
                    x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="transition-opacity duration-1000"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0">

                <img
                    x-show="slide === 4"
                    src="{{ asset('img/banners/BANNER-06.png') }}"
                    alt="Welcome 3"
                    class="absolute inset-0 w-full h-auto object-cover"
                    x-transition:enter="transition-opacity duration-1000"
                    x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="transition-opacity duration-1000"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0">
                <!-- Maintain aspect ratio for desktop -->
                <div class="pt-[35%]">

                    <img
                        x-show="slide === 5"
                        src="{{ asset('img/banners/BANNER-07.png') }}"
                        alt="Welcome 3"
                        class="absolute inset-0 w-full h-auto object-cover"
                        x-transition:enter="transition-opacity duration-1000"
                        x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100"
                        x-transition:leave="transition-opacity duration-1000"
                        x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0">

                </div>
        </template>

        <!-- Mobile Slides -->
        <template x-if="isMobile">
            <div class="relative">
                <img
                    x-show="slide === 1"
                    src="{{ asset('img/banners/BANNER-MOB-01.png') }}"
                    alt="Welcome 1"
                    class="w-full h-auto object-cover"
                    x-transition:enter="transition-opacity duration-1000"
                    x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="transition-opacity duration-1000"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0">
                <img
                    x-show="slide === 2"
                    src="{{ asset('img/banners/BANNER-MOB-02.png') }}"
                    alt="Welcome 2"
                    class="w-full h-auto object-cover"
                    x-transition:enter="transition-opacity duration-1000"
                    x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="transition-opacity duration-1000"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0">
                <img
                    x-show="slide === 3"
                    src="{{ asset('img/banners/BANNER-MOB-03.png') }}"
                    alt="Welcome 3"
                    class="w-full h-auto object-cover"
                    x-transition:enter="transition-opacity duration-1000"
                    x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="transition-opacity duration-1000"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0">
                <img
                    x-show="slide === 4"
                    src="{{ asset('img/banners/BANNER-MOB-04.png') }}"
                    alt="Welcome 3"
                    class="w-full h-auto object-cover"
                    x-transition:enter="transition-opacity duration-1000"
                    x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="transition-opacity duration-1000"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0">
                <img
                    x-show="slide === 5"
                    src="{{ asset('img/banners/BANNER-MOB-06.png') }}"
                    alt="Welcome 3"
                    class="w-full h-auto object-cover"
                    x-transition:enter="transition-opacity duration-1000"
                    x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="transition-opacity duration-1000"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0">
            </div>
        </template>

        <!-- Dots only -->
        <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2 z-10">
            <button @click="slide = 1" :class="slide === 1 ? 'bg-primary' : 'bg-white/70'" class="w-3 h-3 rounded-full"></button>
            <button @click="slide = 2" :class="slide === 2 ? 'bg-primary' : 'bg-white/70'" class="w-3 h-3 rounded-full"></button>
            <button @click="slide = 3" :class="slide === 3 ? 'bg-primary' : 'bg-white/70'" class="w-3 h-3 rounded-full"></button>
            <button @click="slide = 4" :class="slide === 4 ? 'bg-primary' : 'bg-white/70'" class="w-3 h-3 rounded-full"></button>
            <button @click="slide = 5" :class="slide === 5 ? 'bg-primary' : 'bg-white/70'" class="w-3 h-3 rounded-full"></button>
        </div>
    </div>
</div>

<!-- Main Heading with Staggered Animation -->
<div class="text-center mt-8 md:mt-12 mb-8 md:mb-16 px-4">
    <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-semibold text-primary mb-4 animate-floatIn">
        Where Medical Insight Meets
        <span class="block">Mattress Innovation</span>
    </h2>

    <div class="px-4 sm:px-6 lg:px-8 max-w-3xl mx-auto">
        <h3 class="text-lg sm:text-xl md:text-2xl font-normal text-gray-700 mb-6 animate-floatIn delay-100 leading-relaxed space-y-2">
            <span class="block">Doctor Mattress supports spinal health and enhances sleep quality for all ages.</span>
            <span class="block">Its adaptive layers ease pressure and encourage natural alignment.</span>
            <span class="block">Sleep better. Live better.</span>
        </h3>
    </div>





    <!-- Feature Icons with Hover Effects - Responsive Grid -->
    <div class="grid grid-cols-2 md:flex md:flex-row justify-center items-center gap-6 sm:gap-8 md:gap-10 lg:gap-12 mb-8 md:mb-12">
        <!-- Improves Sleep Quality -->
        <div class="flex flex-col items-center group transform transition-all duration-500 hover:scale-110">
            <div class="relative h-20 w-20 sm:h-24 sm:w-24 md:h-28 md:w-28 lg:h-32 lg:w-32 mb-2 sm:mb-3 md:mb-4 animate-bounceIn delay-100">
                <img src="{{ asset('img/icons/ICONS-01.svg') }}" alt="Medical Insight"
                    class="absolute inset-0 transition-opacity duration-300 group-hover:opacity-0 h-full w-full">
                <img src="{{ asset('img/icons/ICONS-05.svg') }}" alt="Medical Insight Hover"
                    class="absolute inset-0 opacity-0 transition-opacity duration-300 group-hover:opacity-100 h-full w-full">
            </div>
            <span class="text-gray-700 font-medium text-sm sm:text-base md:text-lg transition-colors duration-300 group-hover:text-primary">
                Improves Sleep
                <span class="block">Quality</span>
            </span>
        </div>

        <!-- Spine Alignment Support -->
        <div class="flex flex-col items-center group transform transition-all duration-500 hover:scale-110">
            <div class="relative h-20 w-20 sm:h-24 sm:w-24 md:h-28 md:w-28 lg:h-32 lg:w-32 mb-2 sm:mb-3 md:mb-4 animate-bounceIn delay-200">
                <img src="{{ asset('img/icons/ICONS-02.svg') }}" alt="Innovation"
                    class="absolute inset-0 transition-opacity duration-300 group-hover:opacity-0 h-full w-full">
                <img src="{{ asset('img/icons/ICONS-06.svg') }}" alt="Innovation Hover"
                    class="absolute inset-0 opacity-0 transition-opacity duration-300 group-hover:opacity-100 h-full w-full">
            </div>
            <span class="text-gray-700 font-medium text-sm sm:text-base md:text-lg transition-colors duration-300 group-hover:text-primary">
                Spine Alignment
                <span class="block">Support</span>
            </span>
        </div>

        <!-- Enhances Posture Over Time -->
        <div class="flex flex-col items-center group transform transition-all duration-500 hover:scale-110">
            <div class="relative h-20 w-20 sm:h-24 sm:w-24 md:h-28 md:w-28 lg:h-32 lg:w-32 mb-2 sm:mb-3 md:mb-4 animate-bounceIn delay-300">
                <img src="{{ asset('img/icons/ICONS-03.svg') }}" alt="Comfort"
                    class="absolute inset-0 transition-opacity duration-300 group-hover:opacity-0 h-full w-full">
                <img src="{{ asset('img/icons/ICONS-07.svg') }}" alt="Comfort Hover"
                    class="absolute inset-0 opacity-0 transition-opacity duration-300 group-hover:opacity-100 h-full w-full">
            </div>
            <span class="text-gray-700 font-medium text-sm sm:text-base md:text-lg transition-colors duration-300 group-hover:text-primary">
                Enhances Posture
                <span class="block">Over Time</span>
            </span>
        </div>

        <!-- Reduces Joint and Muscle Pain -->
        <div class="flex flex-col items-center group transform transition-all duration-500 hover:scale-110">
            <div class="relative h-20 w-20 sm:h-24 sm:w-24 md:h-28 md:w-28 lg:h-32 lg:w-32 mb-2 sm:mb-3 md:mb-4 animate-bounceIn delay-400">
                <img src="{{ asset('img/icons/ICONS-04.svg') }}" alt="Quality"
                    class="absolute inset-0 transition-opacity duration-300 group-hover:opacity-0 h-full w-full">
                <img src="{{ asset('img/icons/ICONS-08.svg') }}" alt="Quality Hover"
                    class="absolute inset-0 opacity-0 transition-opacity duration-300 group-hover:opacity-100 h-full w-full">
            </div>
            <span class="text-gray-700 font-medium text-sm sm:text-base md:text-lg transition-colors duration-300 group-hover:text-primary">
                Reduces Joint and
                <span class="block">Muscle Pain</span>
            </span>
        </div>
    </div>
</div>

<!-- Second Banner with Parallax Effect -->
<div class="bg-img h-96 bg-fixed bg-cover">
</div>

<!-- Product Showcase with Staggered Animations -->
<section class="bg-gradient-to-b from-gray-100 to-white py-20 relative overflow-hidden">
    <div class="absolute top-0 left-0 right-0 h-20 bg-gradient-to-b from-white to-transparent z-10"></div>
    <div class="container mx-auto px-4 relative z-20">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-semibold mb-4 animate-fadeInUp">
                Our <span class="text-primary">Premium Collection</span>
            </h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto animate-fadeInUp delay-100">
                Explore our range of doctor-approved mattresses designed for every sleep need.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Product 1 -->
            <div class="product-card bg-white rounded-xl overflow-hidden transform transition-all duration-500 hover:-translate-y-2 animate-slideInLeft delay-100 shadow-md hover:shadow-lg w-full max-w-xs sm:max-w-sm md:max-w-md mx-auto">
                <!-- Image Section -->
                <div class="h-48 sm:h-56 md:h-64 bg-blue-50 flex items-center justify-center relative overflow-hidden group">
                    <img src="https://images.unsplash.com/photo-1654064550858-c62b971a378a?q=80&w=1032&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="OrthoCare Mattress"
                        class="h-full w-full object-cover transition duration-700 ease-in-out group-hover:scale-110">
                    <div class="absolute top-4 right-4 bg-red-500 text-white text-xs font-bold px-3 py-1 rounded-full transform transition duration-300 hover:scale-110">
                        BESTSELLER
                    </div>
                    <div class="absolute bottom-4 left-4 bg-white/90 text-blue-800 font-bold px-3 py-1 rounded-full transform transition duration-300 hover:scale-105">
                        -20% OFF
                    </div>
                </div>

                <!-- Colored Bottom Section -->
                <div class="bg-primary p-6 text-white">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-xl font-bold">OrthoCare Pro</h3>
                        <span class="bg-white/20 text-white text-xs px-2 py-1 rounded-full">Medical Grade</span>
                    </div>
                    <p class="text-white/80 mb-4">Advanced orthopedic support for chronic back pain sufferers.</p>
                    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                        <div>
                            <span class="text-white font-bold text-lg">₹24,999</span>
                            <span class="text-white/60 text-sm line-through ml-2">₹29,999</span>
                        </div>
                        <button class="bg-white text-[#2E3192] hover:bg-gray-100 font-medium py-2 px-4 rounded-full text-sm transition-all duration-300 transform hover:scale-105 flex items-center w-full sm:w-auto justify-center">
                            <i class="fas fa-shopping-cart mr-2"></i> Add to Cart
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="product-card bg-white rounded-xl overflow-hidden transform transition-all duration-500 hover:-translate-y-2 animate-slideInLeft delay-100 shadow-md hover:shadow-lg w-full max-w-xs sm:max-w-sm md:max-w-md mx-auto">
                <!-- Image Section -->
                <div class="h-48 sm:h-56 md:h-64 bg-blue-50 flex items-center justify-center relative overflow-hidden group">
                    <img src="https://images.unsplash.com/photo-1616627561839-074385245ff6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1790&q=80"
                        alt="MemoryFoam Elite"
                        class="h-full w-full object-cover transition duration-700 ease-in-out group-hover:scale-110">
                    <div class="absolute top-4 right-4 bg-red-500 text-white text-xs font-bold px-3 py-1 rounded-full transform transition duration-300 hover:scale-110">
                        NEW
                    </div>
                    <div class="absolute bottom-4 left-4 bg-white/90 text-blue-800 font-bold px-3 py-1 rounded-full transform transition duration-300 hover:scale-105">
                        -15% OFF
                    </div>
                </div>

                <!-- Colored Bottom Section -->
                <div class="bg-primary p-6 text-white">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-xl font-bold">MemoryFoam Elite</h3>
                        <span class="bg-white/20 text-white text-xs px-2 py-1 rounded-full">Cooling Tech</span>
                    </div>
                    <p class="text-white/80 mb-4">Premium memory foam that contours to your body perfectly.</p>
                    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                        <div>
                            <span class="text-white font-bold text-lg">₹32,999</span>
                            <span class="text-white/60 text-sm line-through ml-2">₹38,999</span>
                        </div>
                        <button class="bg-white text-[#2E3192] hover:bg-gray-100 font-medium py-2 px-4 rounded-full text-sm transition-all duration-300 transform hover:scale-105 flex items-center w-full sm:w-auto justify-center">
                            <i class="fas fa-shopping-cart mr-2"></i> Add to Cart
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="product-card bg-white rounded-xl overflow-hidden transform transition-all duration-500 hover:-translate-y-2 animate-slideInLeft delay-100 shadow-md hover:shadow-lg w-full max-w-xs sm:max-w-sm md:max-w-md mx-auto">
                <!-- Image Section -->
                <div class="h-48 sm:h-56 md:h-64 bg-blue-50 flex items-center justify-center relative overflow-hidden group">
                    <img src="https://images.unsplash.com/photo-1617325247661-675ab4b64ae2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1790&q=80"
                        alt="MemoryFoam Elite"
                        class="h-full w-full object-cover transition duration-700 ease-in-out group-hover:scale-110">
                    <div class="absolute top-4 right-4 bg-red-500 text-white text-xs font-bold px-3 py-1 rounded-full transform transition duration-300 hover:scale-110">
                        NEW
                    </div>
                    <div class="absolute bottom-4 left-4 bg-white/90 text-blue-800 font-bold px-3 py-1 rounded-full transform transition duration-300 hover:scale-105">
                        -10% OFF
                    </div>
                </div>

                <!-- Colored Bottom Section -->
                <div class="bg-primary p-6 text-white">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-xl font-bold">Hybrid Luxe</h3>
                        <span class="bg-white/20 text-white text-xs px-2 py-1 rounded-full">Best of Both</span>
                    </div>
                    <p class="text-white/80 mb-4">Combination of springs and foam for balanced support.</p>
                    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                        <div>
                            <span class="text-white font-bold text-lg">₹28,999</span>
                            <span class="text-white/60 text-sm line-through ml-2">₹34,999</span>
                        </div>
                        <button class="bg-white text-[#2E3192] hover:bg-gray-100 font-medium py-2 px-4 rounded-full text-sm transition-all duration-300 transform hover:scale-105 flex items-center w-full sm:w-auto justify-center">
                            <i class="fas fa-shopping-cart mr-2"></i> Add to Cart
                        </button> 
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-16">
            <button class="bg-white hover:bg-gray-50 text-primary font-bold py-4 px-10 border-2 border-primary rounded-full text-lg transition-all duration-500 transform hover:scale-105 shadow-xl hover:shadow-2xl inline-flex items-center group">
                VIEW ALL PRODUCTS <i class="fas fa-arrow-right ml-3 transition-all duration-300 group-hover:translate-x-2"></i>
            </button>
        </div>
    </div>
    <div class="absolute bottom-0 left-0 right-0 h-20 bg-gradient-to-t from-white to-transparent z-10"></div>
</section>

<!-- Third Banner with Zoom Effect -->
<div class="w-full overflow-hidden h-auto relative">
    <img src="{{ asset('img/banners/BANNER-03.png') }}" alt="Welcome"
        class="w-full h-full object-cover animate-zoomIn">
</div>

<!-- Second Product Showcase -->
<section class="bg-gradient-to-b from-gray-100 to-white py-20 relative overflow-hidden">
    <div class="container mx-auto px-4 relative z-20">
        <div class="grid md:grid-cols-3 gap-8 mb-10">
            <!-- Product 1 -->
            <div class="product-card bg-white rounded-xl overflow-hidden transform transition-all duration-500 hover:-translate-y-2 shadow-md hover:shadow-lg w-full max-w-xs sm:max-w-sm mx-auto">
                <!-- Image Section -->
                <div class="h-48 sm:h-56 md:h-64 bg-blue-50 flex items-center justify-center relative overflow-hidden group">
                    <img src="https://images.unsplash.com/photo-1688384452844-8364c3e2fc28?q=80&w=871&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="OrthoCare Mattress"
                        class="h-full w-full object-cover transition duration-700 ease-in-out group-hover:scale-110">
                    <div class="absolute top-3 sm:top-4 right-3 sm:right-4 bg-red-500 text-white text-xs font-bold px-2 sm:px-3 py-1 rounded-full transform transition duration-300 hover:scale-110">
                        BESTSELLER
                    </div>
                    <div class="absolute bottom-3 sm:bottom-4 left-3 sm:left-4 bg-white/90 text-blue-800 font-bold px-2 sm:px-3 py-1 rounded-full transform transition duration-300 hover:scale-105">
                        -20% OFF
                    </div>
                </div>
                <div class="p-4 sm:p-6">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-lg sm:text-xl font-bold">OrthoCare Pro</h3>
                        <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full">Medical Grade</span>
                    </div>
                    <p class="text-gray-600 text-sm sm:text-base mb-3 sm:mb-4">Advanced orthopedic support for chronic back pain sufferers.</p>
                    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-2 sm:gap-0">
                        <div class="mb-2 sm:mb-0">
                            <span class="text-primary font-bold text-base sm:text-lg">₹24,999</span>
                            <span class="text-gray-400 text-xs sm:text-sm line-through ml-2">₹29,999</span>
                        </div>
                        <button class="bg-primary hover:bg-blue-700 text-white py-1 sm:py-2 px-3 sm:px-4 rounded-full text-xs sm:text-sm transition-all duration-300 transform hover:scale-105 flex items-center justify-center w-full sm:w-auto">
                            <i class="fas fa-shopping-cart mr-1 sm:mr-2"></i> Add to Cart
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="product-card bg-white rounded-xl overflow-hidden transform transition-all duration-500 hover:-translate-y-2 shadow-md hover:shadow-lg w-full max-w-xs sm:max-w-sm mx-auto">
                <!-- Image Section -->
                <div class="h-48 sm:h-56 md:h-64 bg-blue-50 flex items-center justify-center relative overflow-hidden group">
                    <img src="https://images.unsplash.com/photo-1616627561839-074385245ff6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1790&q=80"
                        alt="MemoryFoam Elite"
                        class="h-full w-full object-cover transition duration-700 ease-in-out group-hover:scale-110">
                    <div class="absolute top-3 sm:top-4 right-3 sm:right-4 bg-red-500 text-white text-xs font-bold px-2 sm:px-3 py-1 rounded-full transform transition duration-300 hover:scale-110">
                        NEW
                    </div>
                    <div class="absolute bottom-3 sm:bottom-4 left-3 sm:left-4 bg-white/90 text-blue-800 font-bold px-2 sm:px-3 py-1 rounded-full transform transition duration-300 hover:scale-105">
                        -15% OFF
                    </div>
                </div>
                <div class="p-4 sm:p-6">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-lg sm:text-xl font-bold">MemoryFoam Elite</h3>
                        <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full">Cooling Tech</span>
                    </div>
                    <p class="text-gray-600 text-sm sm:text-base mb-3 sm:mb-4">Premium memory foam that contours to your body perfectly.</p>
                    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-2 sm:gap-0">
                        <div class="mb-2 sm:mb-0">
                            <span class="text-primary font-bold text-base sm:text-lg">₹32,999</span>
                            <span class="text-gray-400 text-xs sm:text-sm line-through ml-2">₹38,999</span>
                        </div>
                        <button class="bg-primary hover:bg-blue-700 text-white py-1 sm:py-2 px-3 sm:px-4 rounded-full text-xs sm:text-sm transition-all duration-300 transform hover:scale-105 flex items-center justify-center w-full sm:w-auto">
                            <i class="fas fa-shopping-cart mr-1 sm:mr-2"></i> Add to Cart
                        </button>
                    </div>
                </div>
            </div>


            <!-- Product 3 -->
            <div class="product-card bg-white rounded-xl overflow-hidden transform transition-all duration-500 hover:-translate-y-2 shadow-md hover:shadow-lg w-full max-w-xs sm:max-w-sm mx-auto">
                <!-- Image Section -->
                <div class="h-48 sm:h-56 md:h-64 bg-blue-50 flex items-center justify-center relative overflow-hidden group">
                    <img src="https://images.unsplash.com/photo-1617325247661-675ab4b64ae2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1790&q=80"
                        alt="MemoryFoam Elite"
                        class="h-full w-full object-cover transition duration-700 ease-in-out group-hover:scale-110">
                    <div class="absolute top-3 sm:top-4 right-3 sm:right-4 bg-red-500 text-white text-xs font-bold px-2 sm:px-3 py-1 rounded-full transform transition duration-300 hover:scale-110">
                        NEW
                    </div>
                    <div class="absolute bottom-3 sm:bottom-4 left-3 sm:left-4 bg-white/90 text-blue-800 font-bold px-2 sm:px-3 py-1 rounded-full transform transition duration-300 hover:scale-105">
                        -10% OFF
                    </div>
                </div>
                <div class="p-4 sm:p-6">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-lg sm:text-xl font-bold">Hybrid Luxe</h3>
                        <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full">Best of Both</span>
                    </div>
                    <p class="text-gray-600 text-sm sm:text-base mb-3 sm:mb-4">Combination of springs and foam for balanced support.</p>
                    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-2 sm:gap-0">
                        <div class="mb-2 sm:mb-0">
                            <span class="text-primary font-bold text-base sm:text-lg">₹28,999</span>
                            <span class="text-gray-400 text-xs sm:text-sm line-through ml-2">₹34,999</span>
                        </div>
                        <button class="bg-primary hover:bg-blue-700 text-white py-1 sm:py-2 px-3 sm:px-4 rounded-full text-xs sm:text-sm transition-all duration-300 transform hover:scale-105 flex items-center justify-center w-full sm:w-auto">
                            <i class="fas fa-shopping-cart mr-1 sm:mr-2"></i> Add to Cart
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid md:grid-cols-3 gap-8 mb-10">
            <!-- Product 1 -->
            <div class="product-card bg-white rounded-xl overflow-hidden transform transition-all duration-500 hover:-translate-y-2 shadow-md hover:shadow-lg w-full max-w-xs sm:max-w-sm mx-auto">
                <!-- Image Section -->
                <div class="h-48 sm:h-56 md:h-64 bg-blue-50 flex items-center justify-center relative overflow-hidden group">
                    <img src="https://plus.unsplash.com/premium_photo-1661595077028-9ff236368cb5?q=80&w=869&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="OrthoCare Mattress"
                        class="h-full w-full object-cover transition duration-700 ease-in-out group-hover:scale-110">
                    <div class="absolute top-3 sm:top-4 right-3 sm:right-4 bg-red-500 text-white text-xs font-bold px-2 sm:px-3 py-1 rounded-full transform transition duration-300 hover:scale-110">
                        BESTSELLER
                    </div>
                    <div class="absolute bottom-3 sm:bottom-4 left-3 sm:left-4 bg-white/90 text-blue-800 font-bold px-2 sm:px-3 py-1 rounded-full transform transition duration-300 hover:scale-105">
                        -20% OFF
                    </div>
                </div>
                <div class="p-4 sm:p-6">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-lg sm:text-xl font-bold">OrthoCare Pro</h3>
                        <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full">Medical Grade</span>
                    </div>
                    <p class="text-gray-600 text-sm sm:text-base mb-3 sm:mb-4">Advanced orthopedic support for chronic back pain sufferers.</p>
                    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-2 sm:gap-0">
                        <div class="mb-2 sm:mb-0">
                            <span class="text-primary font-bold text-base sm:text-lg">₹24,999</span>
                            <span class="text-gray-400 text-xs sm:text-sm line-through ml-2">₹29,999</span>
                        </div>
                        <button class="bg-primary hover:bg-blue-700 text-white py-1 sm:py-2 px-3 sm:px-4 rounded-full text-xs sm:text-sm transition-all duration-300 transform hover:scale-105 flex items-center justify-center w-full sm:w-auto">
                            <i class="fas fa-shopping-cart mr-1 sm:mr-2"></i> Add to Cart
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="product-card bg-white rounded-xl overflow-hidden transform transition-all duration-500 hover:-translate-y-2 shadow-md hover:shadow-lg w-full max-w-xs sm:max-w-sm mx-auto">
                <!-- Image Section -->
                <div class="h-48 sm:h-56 md:h-64 bg-blue-50 flex items-center justify-center relative overflow-hidden group">
                    <img src="https://images.unsplash.com/photo-1616627561839-074385245ff6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1790&q=80"
                        alt="MemoryFoam Elite"
                        class="h-full w-full object-cover transition duration-700 ease-in-out group-hover:scale-110">
                    <div class="absolute top-3 sm:top-4 right-3 sm:right-4 bg-red-500 text-white text-xs font-bold px-2 sm:px-3 py-1 rounded-full transform transition duration-300 hover:scale-110">
                        NEW
                    </div>
                    <div class="absolute bottom-3 sm:bottom-4 left-3 sm:left-4 bg-white/90 text-blue-800 font-bold px-2 sm:px-3 py-1 rounded-full transform transition duration-300 hover:scale-105">
                        -15% OFF
                    </div>
                </div>
                <div class="p-4 sm:p-6">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-lg sm:text-xl font-bold">MemoryFoam Elite</h3>
                        <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full">Cooling Tech</span>
                    </div>
                    <p class="text-gray-600 text-sm sm:text-base mb-3 sm:mb-4">Premium memory foam that contours to your body perfectly.</p>
                    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-2 sm:gap-0">
                        <div class="mb-2 sm:mb-0">
                            <span class="text-primary font-bold text-base sm:text-lg">₹32,999</span>
                            <span class="text-gray-400 text-xs sm:text-sm line-through ml-2">₹38,999</span>
                        </div>
                        <button class="bg-primary hover:bg-blue-700 text-white py-1 sm:py-2 px-3 sm:px-4 rounded-full text-xs sm:text-sm transition-all duration-300 transform hover:scale-105 flex items-center justify-center w-full sm:w-auto">
                            <i class="fas fa-shopping-cart mr-1 sm:mr-2"></i> Add to Cart
                        </button>
                    </div>
                </div>
            </div>


            <!-- Product 3 -->
            <div class="product-card bg-white rounded-xl overflow-hidden transform transition-all duration-500 hover:-translate-y-2 shadow-md hover:shadow-lg w-full max-w-xs sm:max-w-sm mx-auto">
                <!-- Image Section -->
                <div class="h-48 sm:h-56 md:h-64 bg-blue-50 flex items-center justify-center relative overflow-hidden group">
                    <img src="https://images.unsplash.com/photo-1617325247661-675ab4b64ae2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1790&q=80"
                        alt="MemoryFoam Elite"
                        class="h-full w-full object-cover transition duration-700 ease-in-out group-hover:scale-110">
                    <div class="absolute top-3 sm:top-4 right-3 sm:right-4 bg-red-500 text-white text-xs font-bold px-2 sm:px-3 py-1 rounded-full transform transition duration-300 hover:scale-110">
                        NEW
                    </div>
                    <div class="absolute bottom-3 sm:bottom-4 left-3 sm:left-4 bg-white/90 text-blue-800 font-bold px-2 sm:px-3 py-1 rounded-full transform transition duration-300 hover:scale-105">
                        -10% OFF
                    </div>
                </div>
                <div class="p-4 sm:p-6">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-lg sm:text-xl font-bold">Hybrid Luxe</h3>
                        <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full">Best of Both</span>
                    </div>
                    <p class="text-gray-600 text-sm sm:text-base mb-3 sm:mb-4">Combination of springs and foam for balanced support.</p>
                    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-2 sm:gap-0">
                        <div class="mb-2 sm:mb-0">
                            <span class="text-primary font-bold text-base sm:text-lg">₹28,999</span>
                            <span class="text-gray-400 text-xs sm:text-sm line-through ml-2">₹34,999</span>
                        </div>
                        <button class="bg-primary hover:bg-blue-700 text-white py-1 sm:py-2 px-3 sm:px-4 rounded-full text-xs sm:text-sm transition-all duration-300 transform hover:scale-105 flex items-center justify-center w-full sm:w-auto">
                            <i class="fas fa-shopping-cart mr-1 sm:mr-2"></i> Add to Cart
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-16">
            <button class="bg-white hover:bg-gray-50 text-primary font-bold py-4 px-10 border-2 border-primary rounded-full text-lg transition-all duration-500 transform hover:scale-105 shadow-xl hover:shadow-2xl inline-flex items-center group">
                VIEW ALL PRODUCTS <i class="fas fa-arrow-right ml-3 transition-all duration-300 group-hover:translate-x-2"></i>
            </button>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="container mx-auto px-4 border">
    <div class="text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-bold mb-4 animate-flipInX">
            What Our <span class="text-primary">Customers Say</span>
        </h2>
        <p class="text-lg text-gray-600 max-w-3xl mx-auto animate-flipInX delay-100">
            Don't just take our word for it - hear from people who've transformed their sleep with our mattresses.
        </p>
    </div>

    <div class="grid md:grid-cols-3 gap-8">
        <!-- Testimonial 1 -->
        <div class="testimonial-card bg-white p-8 rounded-xl transform transition-all duration-500 hover:scale-105 delay-100">
            <div class="flex mb-4">
                <i class="fas fa-star text-yellow-400"></i>
                <i class="fas fa-star text-yellow-400"></i>
                <i class="fas fa-star text-yellow-400"></i>
                <i class="fas fa-star text-yellow-400"></i>
                <i class="fas fa-star text-yellow-400"></i>
            </div>
            <p class="text-gray-600 mb-6 italic">"After years of back pain, my OrthoCare Pro mattress has been life-changing. I wake up refreshed and pain-free for the first time in a decade."</p>
            <div class="flex items-center">
                <div>
                    <h4 class="font-bold">Riya Sharma</h4>
                    <p class="text-gray-500 text-sm">Mumbai • 6 months ago</p>
                </div>
            </div>
        </div>

        <!-- Testimonial 2 -->
        <div class="testimonial-card bg-white p-8 rounded-xl transform transition-all duration-500 hover:scale-105 delay-200">
            <div class="flex mb-4">
                <i class="fas fa-star text-yellow-400"></i>
                <i class="fas fa-star text-yellow-400"></i>
                <i class="fas fa-star text-yellow-400"></i>
                <i class="fas fa-star text-yellow-400"></i>
                <i class="fas fa-star text-yellow-400"></i>
            </div>
            <p class="text-gray-600 mb-6 italic">"The cooling technology in the MemoryFoam Elite is incredible. No more night sweats, and my sleep quality has improved dramatically."</p>
            <div class="flex items-center">
                <div>
                    <h4 class="font-bold">Amit Patel</h4>
                    <p class="text-gray-500 text-sm">Bangalore • 3 months ago</p>
                </div>
            </div>
        </div>

        <!-- Testimonial 3 -->
        <div class="testimonial-card bg-white p-8 rounded-xl  transform transition-all duration-500 hover:scale-105 delay-300">
            <div class="flex mb-4">
                <i class="fas fa-star text-yellow-400"></i>
                <i class="fas fa-star text-yellow-400"></i>
                <i class="fas fa-star text-yellow-400"></i>
                <i class="fas fa-star text-yellow-400"></i>
                <i class="fas fa-star text-yellow-400"></i>
            </div>
            <p class="text-gray-600 mb-6 italic">"As a doctor, I recommend Ann Doctors Mattresses to my patients. The science behind their products is impressive and the results speak for themselves."</p>
            <div class="flex items-center">
                <div>
                    <h4 class="font-bold">Dr. Arjun Mehta</h4>
                    <p class="text-gray-500 text-sm">Delhi • Orthopedic Specialist</p>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection