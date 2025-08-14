@extends('includes.inc')
@section('content')
<!-- Hero Section -->
<section class="relative text-white">
    <div class="">
        <img src="{{Asset('img/banners/ABOUT-US.png')}}" alt="">
    </div>
</section>

<!-- Our Mission -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <div class="grid md:grid-cols-2 gap-12 items-center">
        <div class="order-2 md:order-1">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">Our Mission</h2>
            <p class="text-lg text-gray-600 mb-6">At Doctor Mattress, we believe everyone deserves a good night's sleep. Our mission is to provide high-quality, affordable mattresses that help our customers wake up refreshed and ready to take on the day.</p>
            <p class="text-lg text-gray-600 mb-8">Founded in New York City in 1995, we've grown from a single storefront to one of America's most trusted mattress retailers, with locations in seven major cities.</p>
            <div class="flex flex-wrap gap-4">
                <div class="bg-blue-50 p-4 rounded-lg flex items-center">
                    <div class="bg-blue-100 w-12 h-12 rounded-full flex items-center justify-center mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <span class="font-medium text-gray-800">100+ Sleep Experts</span>
                </div>
                <div class="bg-green-50 p-4 rounded-lg flex items-center">
                    <div class="bg-green-100 w-12 h-12 rounded-full flex items-center justify-center mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <span class="font-medium text-gray-800">500,000+ Happy Customers</span>
                </div>
            </div>
        </div>
        <div class="order-1 md:order-2">
            <div class="relative rounded-xl overflow-hidden shadow-xl">
                <img src=""
                    alt="Our first store location"
                    class="w-full h-auto object-cover">
                <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-6">
                    <p class="text-white text-sm">Our original store location in Manhattan, 1995</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Values -->
<section class="bg-gray-50 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Our Core Values</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">These principles guide everything we do at Doctor Mattress</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Value 1 -->
            <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-shadow duration-300">
                <div class="bg-blue-100 w-16 h-16 rounded-xl flex items-center justify-center mx-auto mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-center text-gray-800 mb-3">Quality Sleep</h3>
                <p class="text-gray-600 text-center">We're obsessed with creating products that deliver truly restorative sleep, backed by science and customer feedback.</p>
            </div>

            <!-- Value 2 -->
            <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-shadow duration-300">
                <div class="bg-green-100 w-16 h-16 rounded-xl flex items-center justify-center mx-auto mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-center text-gray-800 mb-3">Customer Trust</h3>
                <p class="text-gray-600 text-center">We build relationships, not transactions. Our 100-night trial and 10-year warranty prove we stand behind our products.</p>
            </div>

            <!-- Value 3 -->
            <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-shadow duration-300">
                <div class="bg-purple-100 w-16 h-16 rounded-xl flex items-center justify-center mx-auto mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-center text-gray-800 mb-3">American Made</h3>
                <p class="text-gray-600 text-center">All our mattresses are crafted in the USA using sustainably sourced materials and ethical manufacturing practices.</p>
            </div>
        </div>
    </div>
</section>

<!-- Our Team -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <div class="text-center mb-12">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Meet Our Sleep Experts</h2>
        <p class="text-lg text-gray-600 max-w-3xl mx-auto">Our team combines decades of experience in sleep science with genuine care for our customers</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
        <!-- Team Member 1 -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
            <div class="h-64 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=1587&auto=format&fit=crop"
                    alt="Dr. Sarah Johnson"
                    class="w-full h-full object-cover hover:scale-105 transition duration-500">
            </div>
            <div class="p-6">
                <h3 class="text-xl font-bold text-gray-800 mb-1">Dr. Sarah Johnson</h3>
                <p class="text-blue-600 font-medium mb-3">Chief Sleep Scientist</p>
                <p class="text-gray-600 text-sm">PhD in Sleep Medicine with 15 years of research experience in sleep ergonomics.</p>
            </div>
        </div>

        <!-- Team Member 2 -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
            <div class="h-64 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?q=80&w=1587&auto=format&fit=crop"
                    alt="Michael Chen"
                    class="w-full h-full object-cover hover:scale-105 transition duration-500">
            </div>
            <div class="p-6">
                <h3 class="text-xl font-bold text-gray-800 mb-1">Michael Chen</h3>
                <p class="text-blue-600 font-medium mb-3">Product Development</p>
                <p class="text-gray-600 text-sm">Materials engineer specializing in pressure-relieving foam technologies.</p>
            </div>
        </div>

        <!-- Team Member 3 -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
            <div class="h-64 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=1587&auto=format&fit=crop"
                    alt="David Rodriguez"
                    class="w-full h-full object-cover hover:scale-105 transition duration-500">
            </div>
            <div class="p-6">
                <h3 class="text-xl font-bold text-gray-800 mb-1">David Rodriguez</h3>
                <p class="text-blue-600 font-medium mb-3">Customer Experience</p>
                <p class="text-gray-600 text-sm">20 years helping customers find their perfect mattress match.</p>
            </div>
        </div>

        <!-- Team Member 4 -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
            <div class="h-64 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?q=80&w=1661&auto=format&fit=crop"
                    alt="Lisa Thompson"
                    class="w-full h-full object-cover hover:scale-105 transition duration-500">
            </div>
            <div class="p-6">
                <h3 class="text-xl font-bold text-gray-800 mb-1">Lisa Thompson</h3>
                <p class="text-blue-600 font-medium mb-3">Retail Operations</p>
                <p class="text-gray-600 text-sm">Oversees our nationwide store network and customer service teams.</p>
            </div>
        </div>
    </div>
</section>

<!-- Our Process -->
<section class="bg-gray-900 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Our Craftsmanship</h2>
            <p class="text-lg text-gray-300 max-w-3xl mx-auto">Every Doctor Mattress product is built with care and precision</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Step 1 -->
            <div class="bg-gray-800 p-8 rounded-xl relative">
                <div class="absolute -top-5 -left-5 bg-blue-600 text-white w-10 h-10 rounded-full flex items-center justify-center font-bold text-lg">1</div>
                <h3 class="text-xl font-semibold mb-4">Material Selection</h3>
                <p class="text-gray-300">We source only premium materials - from organic cotton covers to temperature-regulating foams, each component is rigorously tested.</p>
            </div>

            <!-- Step 2 -->
            <div class="bg-gray-800 p-8 rounded-xl relative">
                <div class="absolute -top-5 -left-5 bg-blue-600 text-white w-10 h-10 rounded-full flex items-center justify-center font-bold text-lg">2</div>
                <h3 class="text-xl font-semibold mb-4">Precision Manufacturing</h3>
                <p class="text-gray-300">Our North Carolina factory combines state-of-the-art automation with hand-finishing by skilled craftspeople.</p>
            </div>

            <!-- Step 3 -->
            <div class="bg-gray-800 p-8 rounded-xl relative">
                <div class="absolute -top-5 -left-5 bg-blue-600 text-white w-10 h-10 rounded-full flex items-center justify-center font-bold text-lg">3</div>
                <h3 class="text-xl font-semibold mb-4">Quality Assurance</h3>
                <p class="text-gray-300">Every mattress undergoes 27-point inspection before leaving our facility, ensuring perfect comfort and durability.</p>
            </div>
        </div>

        <div class="mt-12 text-center">
            <a href="#" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-8 rounded-lg transition transform hover:-translate-y-1">
                Tour Our Factory
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </a>
        </div>
    </div>
</section>


<!-- Testimonials Carousel -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <div class="text-center mb-12">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">What Our Customers Say</h2>
        <p class="text-lg text-gray-600 max-w-3xl mx-auto">Don't just take our word for it - hear from people sleeping better thanks to Doctor Mattress</p>
    </div>

    <div x-data="{
        currentIndex: 0,
        itemsPerScreen: 1,
        testimonials: [
            {
                quote: 'After years of back pain, my Doctor Mattress has been life-changing. The sleep experts took time to understand my needs and recommended the perfect mattress. I wake up pain-free for the first time in a decade.',
                name: 'Emily R.',
                location: 'New York, NY',
                image: 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=1587&auto=format&fit=crop'
            },
            {
                quote: 'The delivery team was incredibly professional - they set up our king mattress in minutes and even removed our old one. Five years later, it\'s still as comfortable as day one.',
                name: 'James T.',
                location: 'Chicago, IL',
                image: 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=1587&auto=format&fit=crop'
            },
            {
                quote: 'As a hot sleeper, I was skeptical about memory foam. The cooling gel layer in my Doctor Mattress keeps me comfortable all night. Best sleep I\'ve had in years!',
                name: 'Maria G.',
                location: 'Los Angeles, CA',
                image: 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=1470&auto=format&fit=crop'
            },
            {
                quote: 'The adjustable base with massage feature is worth every penny. My wife and I have completely different preferences and we can both get the perfect setup.',
                name: 'David K.',
                location: 'Miami, FL',
                image: 'https://images.unsplash.com/photo-1544725176-7c40e5a71c5e?q=80&w=1587&auto=format&fit=crop'
            },
            {
                quote: 'Customer service went above and beyond when I needed to exchange for a firmer model. No hassle, just great service and an even better mattress.',
                name: 'Sarah L.',
                location: 'Seattle, WA',
                image: 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=1588&auto=format&fit=crop'
            },
            {
                quote: 'I was hesitant about the price at first, but the quality and comfort are unmatched. This mattress has improved my sleep quality tremendously.',
                name: 'Michael B.',
                location: 'Austin, TX',
                image: 'https://images.unsplash.com/photo-1566492031773-4f4e44671857?q=80&w=1587&auto=format&fit=crop'
            }
        ],
        next() {
            if (this.currentIndex < this.testimonials.length - this.itemsPerScreen) {
                this.currentIndex += 1;
            } else {
                this.currentIndex = 0;
            }
        },
        prev() {
            if (this.currentIndex > 0) {
                this.currentIndex -= 1;
            } else {
                this.currentIndex = this.testimonials.length - this.itemsPerScreen;
            }
        },
        goTo(index) {
            this.currentIndex = index;
        },
        updateItemsPerScreen() {
            if (window.innerWidth >= 1024) {
                this.itemsPerScreen = 3;
            } else if (window.innerWidth >= 768) {
                this.itemsPerScreen = 2;
            } else {
                this.itemsPerScreen = 1;
            }
            // Adjust currentIndex if it's out of bounds after resize
            if (this.currentIndex > this.testimonials.length - this.itemsPerScreen) {
                this.currentIndex = Math.max(0, this.testimonials.length - this.itemsPerScreen);
            }
        }
    }" x-init="updateItemsPerScreen(); window.addEventListener('resize', () => updateItemsPerScreen())" class="relative">
        <!-- Carousel container -->
        <div class="relative overflow-hidden">
            <div class="flex transition-transform duration-300 ease-in-out"
                 :style="`transform: translateX(-${currentIndex * (100 / itemsPerScreen)}%)`">
                <template x-for="(testimonial, index) in testimonials" :key="index">
                    <div class="flex-shrink-0 px-4" 
                         :class="{
                             'w-full': itemsPerScreen === 1,
                             'w-1/2': itemsPerScreen === 2,
                             'w-1/3': itemsPerScreen === 3
                         }">
                        <div class="bg-white p-8 rounded-xl shadow-md h-full">
                            <div class="flex items-center mb-4">
                                <div class="text-yellow-400 flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </div>
                            </div>
                            <blockquote class="text-gray-600 mb-6" x-text="testimonial.quote"></blockquote>
                            <div class="flex items-center">
                                <img :src="testimonial.image" 
                                     :alt="testimonial.name" 
                                     class="w-12 h-12 rounded-full object-cover mr-4">
                                <div>
                                    <p class="font-semibold text-gray-800" x-text="testimonial.name"></p>
                                    <p class="text-sm text-gray-500" x-text="testimonial.location"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
        </div>

        <!-- Navigation buttons -->
        <button @click="prev()" 
                class="absolute left-0 top-1/2 -translate-y-1/2 bg-white rounded-full p-2 shadow-md hover:bg-gray-100 focus:outline-none z-10"
                :class="{'opacity-50 cursor-not-allowed': currentIndex === 0}">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </button>
        <button @click="next()" 
                class="absolute right-0 top-1/2 -translate-y-1/2 bg-white rounded-full p-2 shadow-md hover:bg-gray-100 focus:outline-none z-10"
                :class="{'opacity-50 cursor-not-allowed': currentIndex >= testimonials.length - itemsPerScreen}">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </button>

        <!-- Indicators -->
        <div class="flex justify-center mt-8 space-x-2">
            <template x-for="(_, index) in Math.ceil(testimonials.length / itemsPerScreen)" :key="index">
                <button @click="goTo(index * itemsPerScreen)" 
                        class="w-3 h-3 rounded-full transition-colors duration-300"
                        :class="{
                            'bg-gray-800': currentIndex >= index * itemsPerScreen && currentIndex < (index + 1) * itemsPerScreen,
                            'bg-gray-300': currentIndex < index * itemsPerScreen || currentIndex >= (index + 1) * itemsPerScreen
                        }">
                    <span class="sr-only">Go to testimonial</span>
                </button>
            </template>
        </div>
    </div>
</section>


<!-- CTA Section -->
<section class="bg-gradient-to-r from-blue-600 to-blue-800 py-16 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready for Better Sleep?</h2>
        <p class="text-xl mb-8 max-w-3xl mx-auto">Visit one of our stores or schedule a virtual consultation with a sleep expert today.</p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="#" class="bg-white text-blue-600 hover:bg-gray-100 font-semibold py-3 px-8 rounded-lg transition transform hover:-translate-y-1">
                Find a Store
            </a>
            <a href="#" class="bg-transparent border-2 border-white hover:bg-white/10 font-semibold py-3 px-8 rounded-lg transition transform hover:-translate-y-1">
                Contact Us
            </a>
        </div>
    </div>
</section>
@endsection