<div class="hidden md:flex md:flex-shrink-0">
  <div class="flex flex-col w-64 bg-white border-r border-gray-200">
    <!-- Logo -->
    <div class="flex items-center justify-center h-20 px-4">
    <img src="{{ asset('img/logo/DM-LOGO-01.png') }}" alt="Doctor Mattress Logo" class="h-20 w-auto">
</div>

    <!-- Navigation -->
    <div class="flex flex-col flex-grow px-4 py-4 overflow-y-auto">
      <nav class="flex-1 space-y-2">
        <a href="{{ route('admin.dashboard') }}" class="nav-item flex items-center px-4 py-3 text-sm font-medium rounded-lg text-gray-600 hover:bg-gray-100 hover:text-primary transition-colors duration-200" data-route="dashboard">
          <i class="fas fa-tachometer-alt mr-3"></i>
          Dashboard
        </a>

        <a href="/admin/orders" class="nav-item flex items-center px-4 py-3 text-sm font-medium rounded-lg text-gray-600 hover:bg-gray-100 hover:text-primary transition-colors duration-200" data-route="orders">
          <i class="fas fa-shopping-cart mr-3"></i>
          Orders
        </a>

        <a href="{{ route('admin.products') }}" class="nav-item flex items-center px-4 py-3 text-sm font-medium rounded-lg text-gray-600 hover:bg-gray-100 hover:text-primary transition-colors duration-200" data-route="products">
          <i class="fas fa-boxes mr-3"></i>
          Products
        </a>

        <a href="/admin/customers" class="nav-item flex items-center px-4 py-3 text-sm font-medium rounded-lg text-gray-600 hover:bg-gray-100 hover:text-primary transition-colors duration-200" data-route="customers">
          <i class="fas fa-users mr-3"></i>
          Customers
        </a>

        <a href="/admin/analytics" class="nav-item flex items-center px-4 py-3 text-sm font-medium rounded-lg text-gray-600 hover:bg-gray-100 hover:text-primary transition-colors duration-200" data-route="analytics">
          <i class="fas fa-chart-line mr-3"></i>
          Analytics
        </a>

        <a href="/admin/settings" class="nav-item flex items-center px-4 py-3 text-sm font-medium rounded-lg text-gray-600 hover:bg-gray-100 hover:text-primary transition-colors duration-200" data-route="settings">
          <i class="fas fa-cog mr-3"></i>
          Settings
        </a>
      </nav>
    </div>

    <!-- User Profile -->
    <div class="p-4 border-t border-gray-200">
      <div class="flex items-center">
        <img class="w-10 h-10 rounded-full" src="" alt="User">
        <div class="ml-3">
          <p class="text-sm font-medium text-gray-700">San</p>
          <p class="text-xs font-medium text-gray-500">s@gmail.com</p>
        </div>
      </div>
    </div>
  </div>
</div>

