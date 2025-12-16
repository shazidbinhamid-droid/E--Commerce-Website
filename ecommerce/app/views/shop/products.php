<?php require_once '../app/views/layout/header.php'; ?>

<div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-bold text-gray-800">All Products</h2>
    <div class="flex gap-4">
        <select
            class="border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
            <option>Default Sorting</option>
            <option>Price: Low to High</option>
            <option>Price: High to Low</option>
        </select>
    </div>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
    <?php if (empty($products)): ?>
        <p class="col-span-full text-center text-gray-500 py-10">No products found.</p>
    <?php else: ?>
        <?php foreach ($products as $prod): ?>
            <div
                class="bg-white rounded-xl shadow-sm border border-gray-100 hover:shadow-lg transition duration-300 flex flex-col">
                <div class="relative h-48 bg-gray-100 rounded-t-xl overflow-hidden group">
                    <?php if ($prod['image']): ?>
                        <img src="/uploads/<?php echo $prod['image']; ?>" class="w-full h-full object-cover">
                    <?php else: ?>
                        <div class="absolute inset-0 flex items-center justify-center text-gray-300"><i
                                class="fas fa-image text-4xl"></i></div>
                    <?php endif; ?>
                    <div
                        class="absolute inset-x-0 bottom-0 p-4 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition">
                        <form action="/cart/add" method="POST">
                            <input type="hidden" name="product_id" value="<?php echo $prod['id']; ?>">
                            <input type="hidden" name="quantity" value="1">
                            <button
                                class="w-full bg-white text-gray-900 font-medium py-2 rounded shadow-sm hover:bg-gray-50 flex items-center justify-center gap-2">
                                <i class="fas fa-shopping-cart text-xs"></i> Add to Cart
                            </button>
                        </form>
                    </div>
                </div>
                <div class="p-4 flex-grow flex flex-col">
                    <div class="text-xs text-indigo-600 font-semibold mb-1 uppercase tracking-wider">
                        <?php echo $prod['category_name'] ?? 'Generic'; ?></div>
                    <a href="/product/<?php echo $prod['id']; ?>"
                        class="font-bold text-gray-800 mb-2 truncate hover:text-indigo-600"><?php echo $prod['title']; ?></a>
                    <div class="mt-auto flex justify-between items-center">
                        <span class="text-xl font-bold text-gray-900">$<?php echo $prod['price']; ?></span>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

<?php require_once '../app/views/layout/footer.php'; ?>