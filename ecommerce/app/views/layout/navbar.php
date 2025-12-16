<nav class="bg-white shadow-sm border-b border-gray-100">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <a href="<?php echo htmlspecialchars($base_url ?? '/'); ?>" class="text-2xl font-bold text-indigo-600">
                <i class="fas fa-store mr-2"></i>ShopFlex
            </a>

            <!-- Search -->
            <div class="hidden md:flex flex-1 max-w-lg mx-8">
                <div class="relative w-full">
                    <input type="text" placeholder="Search products..."
                        class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                    <div class="absolute left-3 top-2.5 text-gray-400">
                        <i class="fas fa-search"></i>
                    </div>
                </div>
            </div>

            <!-- Icons -->
            <div class="flex items-center space-x-6">
                <a href="/cart" class="relative text-gray-600 hover:text-indigo-600 transition">
                    <i class="fas fa-shopping-cart text-xl"></i>
                    <span
                        class="absolute -top-2 -right-2 bg-red-500 text-white text-xs font-bold rounded-full w-5 h-5 flex items-center justify-center">0</span>
                </a>

                <?php if (isset($_SESSION['user_id'])): ?>
                    <div class="relative group">
                        <button class="flex items-center text-gray-600 hover:text-indigo-600">
                            <i class="fas fa-user-circle text-xl mr-2"></i>
                            <span>Account</span>
                        </button>
                        <!-- Dropdown -->
                        <div
                            class="absolute right-0 mt-2 w-48 bg-white border border-gray-100 rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                            <a href="/profile"
                                class="block px-4 py-2 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600">Profile</a>
                            <a href="/orders"
                                class="block px-4 py-2 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600">My Orders</a>
                            <hr class="border-gray-100">
                            <a href="/logout" class="block px-4 py-2 text-red-600 hover:bg-red-50">Logout</a>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="flex items-center space-x-4">
                        <a href="/login" class="text-gray-600 hover:text-indigo-600 font-medium">Login</a>
                        <a href="/register"
                            class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition shadow-sm font-medium">Register</a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>