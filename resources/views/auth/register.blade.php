@extends('includes.inc')
@section('content')
<div class="bg-white min-h-screen flex items-center justify-center border m-2 md:m-8 lg:m-14 px-2 sm:px-4 md:px-6">
    <div class="max-w-6xl w-full grid grid-cols-1 md:grid-cols-2 gap-12">
        <!-- Left side form -->
        <div class="flex flex-col mt-6 px-4 sm:px-6 md:px-0">
            <h1 class="text-4xl font-extrabold text-primary mb-8 select-none">SIGN UP</h1>
            <form class="space-y-6" action="#" novalidate>
                <div class="flex flex-col sm:flex-row gap-6">
                    <input
                        type="text"
                        name="first-name"
                        placeholder="First Name"
                        required
                        class="w-full sm:w-1/2 border border-gray-300 rounded-md py-3 px-4 text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-secondary focus:border-secondary" />
                    <input
                        type="text"
                        name="last-name"
                        placeholder="Last Name"
                        required
                        class="w-full sm:w-1/2 border border-gray-300 rounded-md py-3 px-4 text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-secondary focus:border-secondary" />
                </div>
                <input
                    type="email"
                    name="email"
                    placeholder="Your Email Address"
                    required
                    
                    class="w-full border border-gray-300 rounded-md py-3 px-4 text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-secondary focus:border-secondary" />
                <input
                    type="text"
                    name="phone"
                    placeholder="Your Phone Number"
                    required
                    class="w-full border border-gray-300 rounded-md py-3 px-4 text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-secondary focus:border-secondary">

                <input
                    type="password"
                    name="password"
                    placeholder="Your Password"
                    required
                    class="w-full border border-gray-300 rounded-md py-3 px-4 text-gray-700 placeholder-gray-600 font-semibold focus:outline-none focus:ring-2 focus:ring-secondary focus:border-secondary" />
                <div class="flex justify-center">
                    <button
                        type="submit"
                        class="bg-primary text-white px-12 py-3 rounded-full font-semibold hover:bg-secondary transition-colors shadow-md">
                        Sign Up
                    </button>
                </div>
            </form>

            <div class="mt-6 text-center">
                <p class="text-gray-600">
                    Already have an account?
                    <a href="/login" class="text-secondary hover:underline">Login</a>
                </p>
            </div>
        </div>

        <!-- Right side image: hidden on small screens -->
        <div class="hidden md:flex justify-center items-center bg-gray-50 rounded-lg overflow-hidden shadow-lg">
            <img
                src="https://rukminim2.flixcart.com/image/850/1000/xif0q/bed-mattress/b/w/g/normal-top-single-6-36-72-foamy-flip-reversible-mattress-with-original-imagjx2wzby7zzwe.jpeg?q=90&crop=false"
                alt="Woman reading a floral-patterned book comfortably seated on a bed with white and gray bedding, soft warm lighting, and a vintage tripod spotlight in the background"
                class="object-cover w-full h-full max-h-[600px]" />
        </div>
    </div>
</div>

@endsection