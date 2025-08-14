<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Doctor Mattress - Admin</title>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#D61261',
            secondary: '#2688D8',
          }
        }
      }
    }
  </script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
 
</head>
<body class="bg-gray-100 font-sans">
  <div class="flex h-screen overflow-hidden">
    @include('admin.sidebar')
    
    <!-- Main content -->
    <div class="flex flex-col flex-1 overflow-hidden">
      <!-- Top navigation -->
      <header class="flex items-center justify-between h-16 px-6 bg-white border-b border-gray-200">
        <div class="flex items-center md:hidden">
          <button id="sidebarToggle" class="text-gray-500 focus:outline-none">
            <i class="fas fa-bars"></i>
          </button>
        </div>
        <div class="flex items-center">
          <h1 class="text-lg font-semibold text-gray-800">@yield('header')</h1>
        </div>
        <div class="flex items-center space-x-4">
          <button class="text-gray-500 focus:outline-none">
            <i class="fas fa-bell"></i>
          </button>
          <button class="text-gray-500 focus:outline-none">
            <i class="fas fa-envelope"></i>
          </button>
        </div>
      </header>

      <!-- Main content area -->
      <main class="flex-1 overflow-y-auto p-6">
        @yield('content')
      </main>
    </div>
  </div>

 <script src="{{ asset('js/admin.js') }}"></script>
</body>
</html>