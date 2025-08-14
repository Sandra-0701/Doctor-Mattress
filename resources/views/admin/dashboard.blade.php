@extends('admin.dashboardLayout')
@section('title', 'Dashboard')
@section('header', 'Dashboard')

@section('content')

<!-- Stats cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-500 text-sm">Total Revenue</p>
                <p class="text-2xl font-bold text-gray-800">₹1,25,480</p>
            </div>
            <div class="p-3 rounded-full bg-primary bg-opacity-10 text-primary">
                <i class="fas fa-rupee-sign"></i>
            </div>
        </div>
        <div class="mt-4">
            <span class="text-green-500 text-sm font-medium">+12.5%</span>
            <span class="text-gray-500 text-sm ml-2">from last month</span>
        </div>
    </div>
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-500 text-sm">Total Orders</p>
                <p class="text-2xl font-bold text-gray-800">342</p>
            </div>
            <div class="p-3 rounded-full bg-secondary bg-opacity-10 text-secondary">
                <i class="fas fa-shopping-cart"></i>
            </div>
        </div>
        <div class="mt-4">
            <span class="text-green-500 text-sm font-medium">+8.2%</span>
            <span class="text-gray-500 text-sm ml-2">from last month</span>
        </div>
    </div>
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-500 text-sm">Customers</p>
                <p class="text-2xl font-bold text-gray-800">1,234</p>
            </div>
            <div class="p-3 rounded-full bg-primary bg-opacity-10 text-primary">
                <i class="fas fa-users"></i>
            </div>
        </div>
        <div class="mt-4">
            <span class="text-green-500 text-sm font-medium">+5.7%</span>
            <span class="text-gray-500 text-sm ml-2">from last month</span>
        </div>
    </div>
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-500 text-sm">Inventory</p>
                <p class="text-2xl font-bold text-gray-800">568</p>
            </div>
            <div class="p-3 rounded-full bg-secondary bg-opacity-10 text-secondary">
                <i class="fas fa-boxes"></i>
            </div>
        </div>
        <div class="mt-4">
            <span class="text-red-500 text-sm font-medium">-2.3%</span>
            <span class="text-gray-500 text-sm ml-2">from last month</span>

        </div>
    </div>
</div>

<!-- Charts and tables -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
    <div class="bg-white rounded-lg shadow p-6 lg:col-span-2">
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-lg font-semibold text-gray-800">Sales Overview</h2>
            <div class="flex space-x-2">
                <button class="px-3 py-1 text-xs bg-primary text-white rounded">Month</button>
                <button class="px-3 py-1 text-xs bg-gray-100 text-gray-600 rounded">Week</button>
                <button class="px-3 py-1 text-xs bg-gray-100 text-gray-600 rounded">Day</button>
            </div>
        </div>
        <div class="h-64">
            <div class="flex items-center justify-center h-full bg-gray-50 rounded-lg">
                <p class="text-gray-500">Sales chart will appear here</p>
            </div>
        </div>
    </div>

    <!-- Recent orders -->
    <div class="bg-white rounded-lg shadow p-6">
        <h2 class="text-lg font-semibold text-gray-800 mb-4">Recent Orders</h2>
        <div class="space-y-4">
            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                <div>
                    <p class="font-medium text-gray-800">#ORD-1254</p>
                    <p class="text-sm text-gray-500">Ortho Mattress</p>
                </div>
                <div class="text-right">
                    <p class="font-medium text-primary">₹12,999</p>
                    <p class="text-xs text-gray-500">2 days ago</p>
                </div>
            </div>
            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                <div>
                    <p class="font-medium text-gray-800">#ORD-1253</p>
                    <p class="text-sm text-gray-500">Memory Foam</p>
                </div>
                <div class="text-right">
                    <p class="font-medium text-primary">₹18,499</p>
                    <p class="text-xs text-gray-500">3 days ago</p>
                </div>
            </div>
            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                <div>
                    <p class="font-medium text-gray-800">#ORD-1252</p>
                    <p class="text-sm text-gray-500">Pillow Set</p>
                </div>
                <div class="text-right">
                    <p class="font-medium text-primary">₹2,499</p>
                    <p class="text-xs text-gray-500">4 days ago</p>
                </div>
            </div>
            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                <div>
                    <p class="font-medium text-gray-800">#ORD-1251</p>
                    <p class="text-sm text-gray-500">Spring Mattress</p>
                </div>
                <div class="text-right">
                    <p class="font-medium text-primary">₹15,999</p>
                    <p class="text-xs text-gray-500">5 days ago</p>
                </div>
            </div>
        </div>
        <a href="#" class="block mt-4 text-sm font-medium text-primary text-right">View all orders</a>
    </div>
</div>



@endsection