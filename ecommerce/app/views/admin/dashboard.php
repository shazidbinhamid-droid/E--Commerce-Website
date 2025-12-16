<?php
// Simple Admin Layout
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
</head>

<body class="bg-gray-100 font-sans">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-slate-800 text-white flex flex-col">
            <div class="p-6 text-2xl font-bold bg-slate-900 text-center">Admin Panel</div>
            <nav class="flex-1 px-4 py-6 space-y-2">
                <a href="/admin" class="block px-4 py-3 rounded hover:bg-slate-700 bg-slate-700"><i
                        class="fas fa-tachometer-alt w-6"></i> Dashboard</a>
                <a href="/admin/products" class="block px-4 py-3 rounded hover:bg-slate-700 text-slate-300"><i
                        class="fas fa-box w-6"></i> Products</a>
                <a href="/admin/orders" class="block px-4 py-3 rounded hover:bg-slate-700 text-slate-300"><i
                        class="fas fa-shopping-cart w-6"></i> Orders</a>
                <a href="/admin/users" class="block px-4 py-3 rounded hover:bg-slate-700 text-slate-300"><i
                        class="fas fa-users w-6"></i> Users</a>
            </nav>
            <div class="p-4 border-t border-slate-700">
                <a href="/" class="block px-4 py-2 hover:bg-slate-700 rounded text-slate-300 mb-2"><i
                        class="fas fa-external-link-alt w-6"></i> View Site</a>
                <a href="/logout" class="block px-4 py-2 hover:bg-red-600 rounded text-red-200"><i
                        class="fas fa-sign-out-alt w-6"></i> Logout</a>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 overflow-y-auto">
            <header class="bg-white shadow-sm p-6">
                <h1 class="text-2xl font-semibold text-gray-800">Dashboard Overview</h1>
            </header>

            <div class="p-8">
                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
                    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-gray-500 text-sm font-semibold uppercase">Total Sales</h3>
                            <div class="bg-indigo-100 text-indigo-600 p-2 rounded-full"><i
                                    class="fas fa-dollar-sign"></i></div>
                        </div>
                        <p class="text-3xl font-bold text-gray-800">$12,450</p>
                        <p class="text-green-500 text-sm mt-2"><i class="fas fa-arrow-up"></i> 12% from last month</p>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-gray-500 text-sm font-semibold uppercase">New Orders</h3>
                            <div class="bg-blue-100 text-blue-600 p-2 rounded-full"><i class="fas fa-shopping-bag"></i>
                            </div>
                        </div>
                        <p class="text-3xl font-bold text-gray-800">45</p>
                        <p class="text-blue-500 text-sm mt-2">5 pending processing</p>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-gray-500 text-sm font-semibold uppercase">Total Users</h3>
                            <div class="bg-purple-100 text-purple-600 p-2 rounded-full"><i class="fas fa-users"></i>
                            </div>
                        </div>
                        <p class="text-3xl font-bold text-gray-800">1,208</p>
                        <p class="text-gray-400 text-sm mt-2">Total registered customers</p>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-gray-500 text-sm font-semibold uppercase">Low Stock</h3>
                            <div class="bg-red-100 text-red-600 p-2 rounded-full"><i
                                    class="fas fa-exclamation-triangle"></i></div>
                        </div>
                        <p class="text-3xl font-bold text-gray-800">8</p>
                        <p class="text-red-500 text-sm mt-2">Items need reordering</p>
                    </div>
                </div>

                <!-- Recent Orders Table -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-100 overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-100 font-bold text-gray-800">Recent Orders</div>
                    <table class="w-full text-left">
                        <thead class="bg-gray-50 text-gray-600 text-xs uppercase">
                            <tr>
                                <th class="px-6 py-3">Order ID</th>
                                <th class="px-6 py-3">Customer</th>
                                <th class="px-6 py-3">Date</th>
                                <th class="px-6 py-3">Status</th>
                                <th class="px-6 py-3">Total</th>
                                <th class="px-6 py-3">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 text-gray-700 text-sm">
                            <tr>
                                <td class="px-6 py-4">#ORD-001</td>
                                <td class="px-6 py-4">John Doe</td>
                                <td class="px-6 py-4">Oct 24, 2023</td>
                                <td class="px-6 py-4"><span
                                        class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full text-xs">Pending</span>
                                </td>
                                <td class="px-6 py-4">$120.00</td>
                                <td class="px-6 py-4"><button
                                        class="text-indigo-600 hover:text-indigo-900">View</button></td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">#ORD-002</td>
                                <td class="px-6 py-4">Jane Smith</td>
                                <td class="px-6 py-4">Oct 23, 2023</td>
                                <td class="px-6 py-4"><span
                                        class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs">Completed</span>
                                </td>
                                <td class="px-6 py-4">$250.00</td>
                                <td class="px-6 py-4"><button
                                        class="text-indigo-600 hover:text-indigo-900">View</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</body>

</html>