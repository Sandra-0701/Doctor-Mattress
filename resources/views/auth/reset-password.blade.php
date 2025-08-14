@extends('includes.inc')
@section('content')
<div class="bg-gray-100 min-h-screen flex items-center justify-center p-4">
  <div class="w-full max-w-4xl mx-auto bg-white rounded-xl shadow-lg overflow-hidden flex flex-col md:flex-row">
    <!-- Image Section -->
    <div class="md:w-1/2  flex items-center justify-center">
      <img src="img/auth/reset.jpg"
        class="w-full h-full object-cover rounded-lg">
    </div>

    <!-- Form Section -->
    <div class="md:w-1/2 p-8">
      <!-- Forgot Password Form -->
      <div id="forgot-section">
        <div class="flex justify-center mb-6">
          <div class="bg-primary bg-opacity-10 p-3 rounded-full text-primary">
            <i class="fas fa-key text-2xl"></i>
          </div>
        </div>
        <h2 class="text-2xl font-bold text-gray-800 mb-2 text-center">Forgot Password?</h2>
        <p class="text-gray-600 mb-6 text-center">Enter your email to receive a secure reset link</p>

        <form id="forgot-form" class="space-y-4">
          <div class="relative">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
              <i class="fas fa-envelope text-gray-400"></i>
            </div>
            <input
              type="email"
              id="forgot-email"
              class="w-full pl-10 pr-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary"
              placeholder="Your email address"
              required />
          </div>

          <button
            type="submit"
            class="w-full bg-primary text-white font-semibold py-3 rounded-lg hover:bg-opacity-90 transition flex items-center justify-center">
            <i class="fas fa-paper-plane mr-2"></i> Send Reset Link
          </button>
        </form>

        <div id="forgot-success" class="hidden mt-4 p-3 bg-green-50 text-green-700 rounded-lg text-center">
          <i class="fas fa-check-circle mr-2"></i> If your email is registered, a reset link has been sent.
        </div>

        <div class="mt-6 text-center">
          <button
            id="show-reset"
            class="text-primary hover:underline text-sm flex items-center justify-center mx-auto"
            type="button">
            <i class="fas fa-code mr-1"></i> Already have a reset code?
          </button>
        </div>

        <div class="mt-8 pt-4 border-t border-gray-200 text-center">
          <a href="/login" class="text-gray-600 hover:text-primary text-sm">
            <i class="fas fa-arrow-left mr-1"></i> Back to login
          </a>
        </div>
      </div>

      <!-- Reset Password Form -->
      <div id="reset-section" class="hidden">
        <div class="flex justify-center mb-6">
          <div class="bg-primary bg-opacity-10 p-3 rounded-full text-primary">
            <i class="fas fa-lock-open text-2xl"></i>
          </div>
        </div>
        <h2 class="text-2xl font-bold text-gray-800 mb-2 text-center">Reset Password</h2>
        <p class="text-gray-600 mb-6 text-center">Create a new secure password for your account</p>

        <form id="reset-form" class="space-y-4">
          <div class="relative">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
              <i class="fas fa-key text-gray-400"></i>
            </div>
            <input
              type="text"
              id="reset-code"
              class="w-full pl-10 pr-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary"
              placeholder="Reset code"
              required />
          </div>

          <div class="relative">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
              <i class="fas fa-lock text-gray-400"></i>
            </div>
            <input
              type="password"
              id="reset-password"
              class="w-full pl-10 pr-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary"
              placeholder="New password"
              required />
          </div>

          <div class="relative">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
              <i class="fas fa-lock text-gray-400"></i>
            </div>
            <input
              type="password"
              id="reset-confirm"
              class="w-full pl-10 pr-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary"
              placeholder="Confirm new password"
              required />
          </div>

          <button
            type="submit"
            class="w-full bg-primary text-white font-semibold py-3 rounded-lg hover:bg-opacity-90 transition flex items-center justify-center">
            <i class="fas fa-sync-alt mr-2"></i> Reset Password
          </button>
        </form>

        <div id="reset-success" class="hidden mt-4 p-3 bg-green-50 text-green-700 rounded-lg text-center">
          <i class="fas fa-check-circle mr-2"></i> Your password has been reset successfully!
        </div>

        <div class="mt-6 text-center">
          <button
            id="show-forgot"
            class="text-primary hover:underline text-sm flex items-center justify-center mx-auto"
            type="button">
            <i class="fas fa-arrow-left mr-1"></i> Back to Forgot Password
          </button>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection