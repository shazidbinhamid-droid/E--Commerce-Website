<?php require_once '../app/views/layout/header.php'; ?>

<!-- Hero Section -->
<section class="bg-indigo-600 rounded-2xl p-8 md:p-12 mb-12 text-white relative overflow-hidden">
    <div class="relative z-10 max-w-2xl">
        <h1 class="text-4xl md:text-5xl font-bold mb-6">Upgrade Your Tech Game</h1>
        <p class="text-lg md:text-xl text-indigo-100 mb-8">Discover the latest gadgets and accessories at unbeatable
            prices. Free shipping on orders over $50.</p>
        <a href="/products"
            class="inline-block bg-white text-indigo-600 font-bold px-8 py-3 rounded-lg hover:bg-indigo-50 transition transform hover:scale-105 shadow-lg">Shop
            Now</a>
    </div>
    <div class="absolute right-0 top-0 h-full w-1/2 bg-gradient-to-l from-indigo-500 to-transparent opacity-50"></div>
</section>

<!-- Featured Categories -->
<section class="mb-12">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Shop by Category</h2>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <?php
        $categories = ['Electronics', 'Fashion', 'Home', 'Beauty'];
        foreach ($categories as $cat):
            ?>
            <a href="/category/<?php echo strtolower($cat); ?>"
                class="group block overflow-hidden rounded-xl bg-white shadow-sm hover:shadow-md transition border border-gray-100">
                <div
                    class="h-32 bg-gray-100 flex items-center justify-center text-indigo-200 group-hover:text-indigo-300 transition">
                    <i class="fas fa-box text-4xl"></i>
                </div>
                <div class="p-4 text-center">
                    <h3 class="font-semibold text-gray-800 group-hover:text-indigo-600 transition"><?php echo $cat; ?></h3>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</section>

<!-- Featured Products -->
<section>
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Featured Products</h2>
        <a href="/products" class="text-indigo-600 hover:text-indigo-700 font-medium">View All <i
                class="fas fa-arrow-right ml-1"></i></a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <!-- Mock Product Card -->
        <?php for ($i = 1; $i <= 4; $i++): ?>
            <div
                class="bg-white rounded-xl shadow-sm border border-gray-100 hover:shadow-lg transition duration-300 flex flex-col">
                <div class="relative h-48 bg-gray-100 rounded-t-xl overflow-hidden group">
                    <!-- <img src="..." alt="Product" class="w-full h-full object-cover"> -->
                    <div class="absolute inset-0 flex items-center justify-center text-gray-300">
                        <i class="fas fa-image text-4xl"></i>
                    </div>
                    <div
                        class="absolute inset-x-0 bottom-0 p-4 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition">
                        <button
                            class="w-full bg-white text-gray-900 font-medium py-2 rounded shadow-sm hover:bg-gray-50 flex items-center justify-center gap-2">
                            <i class="fas fa-shopping-cart text-xs"></i> Add to Cart
                        </button>
                    </div>
                </div>
                <div class="p-4 flex-grow flex flex-col">
                    <div class="text-xs text-indigo-600 font-semibold mb-1 uppercase tracking-wider">Electronics</div>
                    <h3 class="font-bold text-gray-800 mb-2 truncate">Wireless Noise Cancelling Headphones</h3>
                    <div class="flex items-center mb-3">
                        <div class="text-yellow-400 text-xs flex">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="text-xs text-gray-400 ml-1">(42)</span>
                    </div>
                    <div class="mt-auto flex justify-between items-center">
                        <span class="text-xl font-bold text-gray-900">$299.00</span>
                        <button class="text-gray-400 hover:text-red-500 transition"><i class="far fa-heart"></i></button>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</section>

<?php require_once '../app/views/layout/footer.php'; ?>