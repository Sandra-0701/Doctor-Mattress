@extends('includes.inc')
@section('content')

<div class="bg-white min-h-screen flex items-center justify-center border m-2 md:m-8 lg:m-14 px-2 sm:px-4 md:px-6">
    <div class="max-w-6xl w-full grid grid-cols-1 md:grid-cols-2 gap-12">
        <!-- Left side form -->
        <div class="flex flex-col mt-6 px-4 sm:px-6 md:px-0">
            <h1 class="text-4xl font-extrabold text-primary mb-8 select-none">SIGN IN</h1>
            <form class="space-y-6" action="#" method="POST" novalidate>
                <input
                    type="email"
                    name="email"
                    placeholder="Your Email Address"
                    required
                    class="w-full border border-gray-300 rounded-md py-3 px-4 text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-secondary focus:border-secondary" />

                <div class="relative">
                    <input
                        type="password"
                        id="passwordInput"
                        name="password"
                        placeholder="Your Password"
                        required
                        class="w-full border border-gray-300 rounded-md py-3 px-4 pr-12 text-gray-700 placeholder-gray-600 font-semibold focus:outline-none focus:ring-2 focus:ring-secondary focus:border-secondary" />

                    <span id="togglePassword" class="absolute inset-y-0 right-4 flex items-center cursor-pointer text-gray-500">
                        <i class="fas fa-eye"></i>
                    </span>
                </div>


                <div class="flex justify-between items-center">
                    <div class="flex items-center">
                        <input
                            type="checkbox"
                            name="remember"
                            id="remember"
                            class="h-4 w-4 text-secondary focus:ring-secondary border-gray-300 rounded" />
                        <label for="remember" class="ml-2 text-gray-700">Remember Me</label>
                    </div>
                    <a href="/reset" class="text-secondary hover:underline text-sm">Forgot Password?</a>
                </div>
                <div class="flex justify-center">
                    <button
                        type="submit"
                        class="bg-primary text-white px-12 py-3 rounded-full font-semibold hover:bg-secondary transition-colors shadow-md">
                        Sign In
                    </button>
                </div>
            </form>

            <!-- Not registered yet? Create an Account -->
            <div class="mt-6 text-center">
                <p class="text-gray-600">
                    Not registered yet?
                    <a href="/register" class="text-secondary hover:underline">Create an Account</a>
                </p>
            </div>
        </div>

        <!-- Right side image: hidden on small screens -->
        <div class="hidden md:flex justify-center items-center m-4 bg-gray-50 rounded-lg overflow-hidden shadow-lg">
            <img
                src="img/auth/login.jpeg"
                alt="Woman reading a floral-patterned book comfortably seated on a bed with white and gray bedding, soft warm lighting, and a vintage tripod spotlight in the background"
                class="object-cover w-full h-full max-h-[600px]" />
        </div>
    </div>
</div>
@endsection