@extends('includes.inc')
@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 sm:py-8">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8">
        <!-- Product Images - Responsive -->
        <div class="space-y-3 sm:space-y-4">
            <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                <img id="mainImage" src="{{ asset('img/mattress/m3.avif') }}" 
                     alt="Ann Doctor Mattress" 
                     class="w-full h-48 sm:h-64 md:h-80 lg:h-96 object-cover">
            </div>
            <div class="flex space-x-2 overflow-x-auto py-2">
                <img src="{{ asset('img/mattress/m3.avif') }}" 
                     alt="Mattress view 1" 
                     class="w-16 h-12 sm:w-20 sm:h-16 object-cover rounded cursor-pointer border-2 border-secondary thumbnail" 
                     onclick="changeImage(this.src)">
                <img src="{{ asset('img/mattress/m2.jpg') }}" 
                     alt="Mattress view 2" 
                     class="w-16 h-12 sm:w-20 sm:h-16 object-cover rounded cursor-pointer border-2 border-gray-200 thumbnail" 
                     onclick="changeImage(this.src)">
                <img src="{{ asset('img/mattress/m1.jpg') }}" 
                     alt="Mattress view 3" 
                     class="w-16 h-12 sm:w-20 sm:h-16 object-cover rounded cursor-pointer border-2 border-gray-200 thumbnail" 
                     onclick="changeImage(this.src)">
                <img src="{{ asset('img/mattress/m4.jpg') }}" 
                     alt="Mattress view 3" 
                     class="w-16 h-12 sm:w-20 sm:h-16 object-cover rounded cursor-pointer border-2 border-gray-200 thumbnail" 
                     onclick="changeImage(this.src)">
            </div>
        </div>

        <!-- Product Details - Responsive -->
        <div class="space-y-4 sm:space-y-6">
            <div>
                <h1 class="text-2xl sm:text-3xl font-bold text-gray-900">Ann Doctor Mattress</h1>
                <p class="text-secondary text-base sm:text-lg font-semibold mt-1">Royal Top Classic</p>
                
                <!-- Rating -->
                <div class="flex items-center mt-2 sm:mt-3">
                    <div class="flex text-yellow-400 text-sm sm:text-base">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <span class="ml-2 text-gray-600 text-sm sm:text-base">(4,215)</span>
                </div>
                
                <p class="text-gray-600 mt-2 sm:mt-4 text-sm sm:text-base">Doctor-recommended orthopedic support for perfect spinal alignment.</p>
            </div>

            <!-- Financing Info -->
            <!-- <div class="bg-secondary p-3 sm:p-4 rounded-lg">
                <p class="text-xs sm:text-sm text-gray-700">Looking for basic orthopedic support? <a href="#" class="text-secondary">Switch to BasicCare®</a></p>
            </div> -->

            <!-- Price - Responsive -->
            <div class="border-t pt-4 sm:pt-6">
                <div class="flex items-baseline">
                    <span class="text-xs sm:text-sm text-gray-500">Offer Price:</span>
                    <span class="text-2xl sm:text-3xl font-bold text-gray-900 ml-2">Rs. 7,999</span>
                    <span class="text-gray-500 line-through ml-2 text-sm sm:text-base">Rs. 11,999</span>
                </div>
                <p class="text-xs sm:text-sm text-secondary mt-1">EMI from Rs. 667/month | 0% for 12 months</p>
                <div class="flex flex-wrap gap-x-4">
                    <p class="text-xs text-gray-500 mt-1">You Save Rs. 4,000 (33%)</p>
                    <p class="text-xs text-gray-500">Inclusive Taxes: Rs. 199</p>
                </div>
            </div>

            <!-- Payment Options - Responsive -->
            <!-- <div class="bg-primary text-white p-3 sm:p-4 rounded-lg">
                <p class="font-semibold text-sm sm:text-base">Complete your purchase by Sunday, 4 Aug 2024 to avail:</p>
                <div class="flex flex-col sm:flex-row items-start sm:items-center mt-1 sm:mt-2">
                    <span class="text-xl sm:text-2xl font-bold">8% EMI</span>
                    <span class="text-sm sm:text-base ml-0 sm:ml-2 mt-1 sm:mt-0">/ month + 31,419 EMI on 1st Month</span>
                </div>
            </div> -->

            <!-- Configuration Steps - Responsive Grid -->
            <div class="space-y-3 sm:space-y-4">
                <!-- Row 1: Size and Measurement -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-4">
                    <!-- Size Selection -->
                    <div>
                        <h3 class="text-base sm:text-lg font-semibold mb-1 sm:mb-2">1. Choose Size</h3>
                        <div class="flex flex-wrap gap-1 sm:gap-2">
                            <button class="size-btn px-2 sm:px-3 py-1 sm:py-1.5 border-2 border-primary bg-primary text-white rounded-lg font-medium text-xs sm:text-sm" 
                                    data-size="SINGLE">SINGLE</button>
                            <button class="size-btn px-2 sm:px-3 py-1 sm:py-1.5 border-2 border-gray-300 text-gray-700 rounded-lg font-medium text-xs sm:text-sm hover:border-primary" 
                                    data-size="DOUBLE">DOUBLE</button>
                            <button class="size-btn px-2 sm:px-3 py-1 sm:py-1.5 border-2 border-gray-300 text-gray-700 rounded-lg font-medium text-xs sm:text-sm hover:border-primary" 
                                    data-size="QUEEN">QUEEN</button>
                            <button class="size-btn px-2 sm:px-3 py-1 sm:py-1.5 border-2 border-gray-300 text-gray-700 rounded-lg font-medium text-xs sm:text-sm hover:border-primary" 
                                    data-size="KING">KING</button>
                        </div>
                    </div>

                    <!-- Measurements -->
                    <div>
                        <h3 class="text-base sm:text-lg font-semibold mb-1 sm:mb-2">2. Unit of Measurement</h3>
                        <select class="border border-gray-300 rounded-lg px-2 sm:px-3 py-1.5 sm:py-2 w-full text-xs sm:text-sm">
                            <option>Inches</option>
                            <option>Centimeters</option>
                        </select>
                    </div>
                </div>

                <!-- Row 2: Dimensions and Thickness -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-4">
                    <!-- Length & Width -->
                    <div>
                        <h3 class="text-base sm:text-lg font-semibold mb-1 sm:mb-2">3. Dimensions</h3>
                        <select class="border border-gray-300 rounded-lg px-2 sm:px-3 py-1.5 sm:py-2 w-full text-xs sm:text-sm">
                            <option>72" x 30"</option>
                            <option>72" x 36"</option>
                            <option>78" x 60"</option>
                            <option>78" x 72"</option>
                        </select>
                    </div>

                    <!-- Thickness -->
                    <div>
                        <h3 class="text-base sm:text-lg font-semibold mb-1 sm:mb-2">4. Thickness</h3>
                        <select class="border border-gray-300 rounded-lg px-2 sm:px-3 py-1.5 sm:py-2 w-full text-xs sm:text-sm">
                            <option>6 inch</option>
                            <option>8 inch</option>
                            <option>10 inch</option>
                        </select>
                    </div>
                </div>

                <!-- Row 3: Quantity -->
                <div>
                    <h3 class="text-base sm:text-lg font-semibold mb-1 sm:mb-2">5. Quantity</h3>
                    <div class="flex items-center space-x-2 w-full sm:w-1/2">
                        <button class="quantity-btn w-6 h-6 sm:w-8 sm:h-8 border border-gray-300 rounded flex items-center justify-center text-sm sm:text-base" 
                                onclick="changeQuantity(-1)">-</button>
                        <span id="quantity" class="px-3 sm:px-4 py-1 sm:py-2 border border-gray-300 rounded flex-grow text-center text-sm sm:text-base">1</span>
                        <button class="quantity-btn w-6 h-6 sm:w-8 sm:h-8 border border-gray-300 rounded flex items-center justify-center text-sm sm:text-base" 
                                onclick="changeQuantity(1)">+</button>
                    </div>
                </div>
            </div>

            <!-- Add to Cart - Responsive -->
            <button class="w-full bg-secondary text-white py-3 sm:py-4 rounded-lg font-semibold text-base sm:text-lg hover:bg-primary transition-colors mt-3 sm:mt-4"
                    onclick="addToCart()">
                ADD TO CART
            </button>

            <!-- Additional Info - Responsive -->
            <!-- <div class="space-y-1 sm:space-y-2 text-xs sm:text-sm text-gray-600 mt-3 sm:mt-4">
                <p class="flex items-center"><i class="fas fa-truck mr-2 text-primary text-sm sm:text-base"></i>Hassle-free Delivery</p>
                <p class="flex items-center"><i class="fas fa-shield-alt mr-2 text-primary text-sm sm:text-base"></i>For delivery within 7-10 business days</p>
                <p class="flex items-center"><i class="fas fa-headset mr-2 text-primary text-sm sm:text-base"></i>24x7 Customer Support</p>
            </div> -->

            <!-- Charged Mattress - Responsive -->
            <!-- <div class="mt-3 sm:mt-4">
                <p class="text-xs sm:text-sm text-gray-700">Looking for a custom orthopedic mattress?</p>
                <a href="#" class="text-primary text-xs sm:text-sm">WhatsApp us</a>
            </div> -->
        </div>
    </div>

    <!-- Product Tabs - Responsive -->
    <div class="mt-8 sm:mt-12">
        <div class="border-b overflow-x-auto">
            <nav class="flex space-x-4 sm:space-x-8 min-w-max">
                <button class="tab-btn py-2 px-1 border-b-2 border-primary text-secondary font-medium text-sm sm:text-base whitespace-nowrap" 
                        data-tab="description">Description</button>
                <button class="tab-btn py-2 px-1 border-b-2 border-transparent text-gray-500 hover:text-gray-700 font-medium text-sm sm:text-base whitespace-nowrap" 
                        data-tab="details">Details</button>
                <button class="tab-btn py-2 px-1 border-b-2 border-transparent text-gray-500 hover:text-gray-700 font-medium text-sm sm:text-base whitespace-nowrap" 
                        data-tab="reviews">Reviews</button>
                <button class="tab-btn py-2 px-1 border-b-2 border-transparent text-gray-500 hover:text-gray-700 font-medium text-sm sm:text-base whitespace-nowrap" 
                        data-tab="support">Support</button>
            </nav>
        </div>
        
        <div class="mt-4 sm:mt-6">
            <div id="description" class="tab-content">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6 md:gap-8">
                    <div class="space-y-3 sm:space-y-4">
                        <p class="text-gray-700 leading-relaxed text-sm sm:text-base">
                            The Ann Doctor Mattress OrthoCare™ is specially designed with medical-grade orthopedic support to provide perfect spinal alignment and pressure relief. Recommended by orthopedic specialists for those with back pain or seeking preventive care.
                        </p>
                        <p class="text-gray-700 leading-relaxed text-sm sm:text-base">
                            Our advanced multi-layer orthopedic foam technology provides targeted support to different pressure points while maintaining comfort throughout the night. The breathable fabric cover regulates temperature for optimal sleep conditions.
                        </p>
                    </div>
                    <div>
                        <img src="{{ asset('img/mattress/m16.jpg') }}" 
                             alt="Mattress comfort" 
                             class="w-full h-48 sm:h-64 md:h-80 object-cover rounded-lg">
                    </div>
                </div>
            </div>
            
            <div id="details" class="tab-content hidden">
                <div class="space-y-3 sm:space-y-4">
                    <h3 class="text-lg font-semibold">Product Specifications</h3>
                    <ul class="space-y-2 text-gray-700 text-sm sm:text-base">
                        <li class="flex items-start">
                            <span class="mr-2">•</span>
                            <span>Medical-grade orthopedic foam</span>
                        </li>
                        <li class="flex items-start">
                            <span class="mr-2">•</span>
                            <span>5-zone support system for spinal alignment</span>
                        </li>
                        <li class="flex items-start">
                            <span class="mr-2">•</span>
                            <span>Breathable, hypoallergenic fabric cover</span>
                        </li>
                        <li class="flex items-start">
                            <span class="mr-2">•</span>
                            <span>Anti-microbial treatment</span>
                        </li>
                        <li class="flex items-start">
                            <span class="mr-2">•</span>
                            <span>Available in multiple sizes and thicknesses</span>
                        </li>
                        <li class="flex items-start">
                            <span class="mr-2">•</span>
                            <span>12-year warranty</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div id="reviews" class="tab-content hidden">
                <div class="space-y-3 sm:space-y-4">
                    <h3 class="text-lg font-semibold">Customer Reviews</h3>
                    <div class="bg-gray-50 p-3 sm:p-4 rounded-lg">
                        <div class="flex items-center mb-1 sm:mb-2">
                            <div class="flex text-yellow-400 text-sm sm:text-base">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="ml-2 font-medium text-sm sm:text-base">Life-changing for my back pain!</span>
                        </div>
                        <p class="text-gray-700 text-sm sm:text-base">"After years of back pain, this mattress has made a remarkable difference. The orthopedic support is exactly what my doctor recommended."</p>
                    </div>
                </div>
            </div>
            
            <div id="support" class="tab-content hidden">
                <div class="space-y-3 sm:space-y-4">
                    <h3 class="text-lg font-semibold">Support & Warranty</h3>
                    <p class="text-gray-700 text-sm sm:text-base">
                        We offer comprehensive support for your Ann Doctor Mattress including specialized orthopedic consultation, delivery, setup, and extended warranty coverage.
                    </p>
                    <ul class="space-y-2 text-gray-700 text-sm sm:text-base">
                        <li class="flex items-start">
                            <span class="mr-2">•</span>
                            <span>Free orthopedic consultation with purchase</span>
                        </li>
                        <li class="flex items-start">
                            <span class="mr-2">•</span>
                            <span>White-glove delivery and setup</span>
                        </li>
                        <li class="flex items-start">
                            <span class="mr-2">•</span>
                            <span>120-night trial period</span>
                        </li>
                        <li class="flex items-start">
                            <span class="mr-2">•</span>
                            <span>12-year warranty</span>
                        </li>
                        <li class="flex items-start">
                            <span class="mr-2">•</span>
                            <span>24/7 orthopedic support hotline</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Image changing functionality
    function changeImage(src) {
        document.getElementById('mainImage').src = src;
        // Update thumbnail borders
        document.querySelectorAll('.thumbnail').forEach(thumb => {
            thumb.classList.remove('border-secondary');
            thumb.classList.add('border-gray-200');
            if(thumb.src === src) {
                thumb.classList.add('border-secondary');
                thumb.classList.remove('border-gray-200');
            }
        });
    }

    // Quantity adjustment
    function changeQuantity(change) {
        const quantityElement = document.getElementById('quantity');
        let quantity = parseInt(quantityElement.textContent);
        quantity += change;
        if(quantity < 1) quantity = 1;
        quantityElement.textContent = quantity;
    }

    // Tab switching
    document.querySelectorAll('.tab-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            // Update tab buttons
            document.querySelectorAll('.tab-btn').forEach(tab => {
                tab.classList.remove('border-secondary', 'text-secondary');
                tab.classList.add('border-transparent', 'text-gray-500');
            });
            this.classList.add('border-secondary', 'text-secondary');
            this.classList.remove('border-transparent', 'text-gray-500');
            
            // Show selected tab content
            const tabId = this.getAttribute('data-tab');
            document.querySelectorAll('.tab-content').forEach(content => {
                content.classList.add('hidden');
            });
            document.getElementById(tabId).classList.remove('hidden');
        });
    });

    // Size selection
    document.querySelectorAll('.size-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            document.querySelectorAll('.size-btn').forEach(sizeBtn => {
                sizeBtn.classList.remove('bg-secondary', 'text-white', 'border-secondary');
                sizeBtn.classList.add('border-gray-300', 'text-gray-700');
            });
            this.classList.add('bg-secondary', 'text-white', 'border-secondary');
            this.classList.remove('border-gray-300', 'text-gray-700');
        });
    });

    function addToCart() {
        // Add to cart functionality would go here
        alert('Added to cart!');
    }
</script>
@endsection