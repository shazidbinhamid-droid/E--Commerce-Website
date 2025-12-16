<?php require_once '../app/views/layout/header.php'; ?>

<div class="grid grid-cols-1 md:grid-cols-2 gap-8 my-8">
    <!-- Image Gallery -->
    <div class="bg-white rounded-xl shadow-sm p-4 border border-gray-100">
        <?php if (!empty($product['image'])): ?>
            <img src="/uploads/<?php echo $product['image']; ?>" class="w-full h-auto rounded-lg"
                alt="<?php echo $product['title']; ?>">
        <?php else: ?>
            <div class="w-full h-96 bg-gray-100 rounded-lg flex items-center justify-center text-gray-300">
                <i class="fas fa-image text-6xl"></i>
            </div>
        <?php endif; ?>
    </div>

    <!-- Details -->
    <div>
        <div class="text-sm text-indigo-600 font-semibold mb-2 uppercase tracking-wide">
            <?php echo $product['category_name'] ?? 'Uncategorized'; ?>
        </div>
        <h1 class="text-3xl font-bold text-gray-900 mb-4"><?php echo $product['title']; ?></h1>

        <div class="flex items-center mb-6">
            <span class="text-3xl font-bold text-gray-900 mr-4">$<?php echo $product['price']; ?></span>
            <?php if (!empty($product['sale_price'])): ?>
                <span class="text-xl text-gray-400 line-through">$<?php echo $product['sale_price']; ?></span>
            <?php endif; ?>
        </div>

        <p class="text-gray-600 mb-8 leading-relaxed">
            <?php echo $product['description']; ?>
        </p>

        <form action="/cart/add" method="POST" class="flex items-center gap-4 mb-8">
            <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
            <div class="w-24">
                <input type="number" name="quantity" value="1" min="1"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg text-center font-bold focus:ring-2 focus:ring-indigo-500 outline-none">
            </div>
            <button type="submit"
                class="flex-1 bg-indigo-600 text-white font-bold py-3 px-8 rounded-lg hover:bg-indigo-700 transition flex items-center justify-center gap-2">
                <i class="fas fa-shopping-cart"></i> Add to Cart
            </button>
        </form>

        <div class="grid grid-cols-3 gap-4 text-center border-t border-gray-100 pt-6">
            <div>
                <i class="fas fa-truck text-indigo-600 mb-2 text-xl"></i>
                <p class="text-xs text-gray-500">Free Shipping</p>
            </div>
            <div>
                <i class="fas fa-undo text-indigo-600 mb-2 text-xl"></i>
                <p class="text-xs text-gray-500">30 Days Return</p>
            </div>
            <div>
                <i class="fas fa-shield-alt text-indigo-600 mb-2 text-xl"></i>
                <p class="text-xs text-gray-500">Secure Payment</p>
            </div>
        </div>
    </div>
</div>

<?php require_once '../app/views/layout/footer.php'; ?>