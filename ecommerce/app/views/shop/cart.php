<?php require_once '../app/views/layout/header.php'; ?>

<h1 class="text-3xl font-bold mb-8 text-gray-800">Shopping Cart</h1>

<div class="flex flex-col md:flex-row gap-8">
    <!-- Cart Items -->
    <div class="flex-1">
        <?php if (empty($products)): ?>
            <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 text-center">
                <div class="text-gray-300 mb-4"><i class="fas fa-shopping-basket text-6xl"></i></div>
                <p class="text-xl text-gray-600 mb-6">Your cart is empty.</p>
                <a href="/products"
                    class="inline-block bg-indigo-600 text-white font-bold px-6 py-2 rounded-lg hover:bg-indigo-700 transition">Continue
                    Shopping</a>
            </div>
        <?php else: ?>
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                <table class="w-full text-left">
                    <thead class="bg-gray-50 border-b border-gray-100">
                        <tr>
                            <th class="px-6 py-4 font-semibold text-gray-600">Product</th>
                            <th class="px-6 py-4 font-semibold text-gray-600">Price</th>
                            <th class="px-6 py-4 font-semibold text-gray-600">Quantity</th>
                            <th class="px-6 py-4 font-semibold text-gray-600">Total</th>
                            <th class="px-6 py-4"></th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        <?php foreach ($products as $item): ?>
                            <tr>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-4">
                                        <div class="w-16 h-16 bg-gray-100 rounded flex-shrink-0 overflow-hidden">
                                            <?php if ($item['image']): ?>
                                                <img src="/uploads/<?php echo $item['image']; ?>"
                                                    class="w-full h-full object-cover">
                                            <?php else: ?>
                                                <div class="w-full h-full flex items-center justify-center text-gray-300"><i
                                                        class="fas fa-image"></i></div>
                                            <?php endif; ?>
                                        </div>
                                        <div>
                                            <h3 class="font-bold text-gray-800"><?php echo $item['title']; ?></h3>
                                            <p class="text-xs text-gray-500"><?php echo $item['category_name']; ?></p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-gray-600">$<?php echo $item['price']; ?></td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center border border-gray-300 rounded w-max">
                                        <button class="px-2 py-1 text-gray-500 hover:bg-gray-100 border-r">-</button>
                                        <input type="text" value="<?php echo $item['qty']; ?>"
                                            class="w-10 text-center text-sm focus:outline-none" readonly>
                                        <button class="px-2 py-1 text-gray-500 hover:bg-gray-100 border-l">+</button>
                                    </div>
                                </td>
                                <td class="px-6 py-4 font-bold text-gray-800">$<?php echo $item['price'] * $item['qty']; ?></td>
                                <td class="px-6 py-4 text-right">
                                    <button class="text-red-400 hover:text-red-600"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>

    <!-- Order Summary -->
    <div class="w-full md:w-96">
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
            <h2 class="text-xl font-bold text-gray-800 mb-6">Order Summary</h2>
            <div class="space-y-3 mb-6">
                <div class="flex justify-between text-gray-600">
                    <span>Subtotal</span>
                    <span>$<?php echo $total ?? '0.00'; ?></span>
                </div>
                <div class="flex justify-between text-gray-600">
                    <span>Shipping</span>
                    <span>Free</span>
                </div>
                <!-- Divider -->
                <div class="border-t border-gray-100 my-2"></div>
                <div class="flex justify-between text-xl font-bold text-gray-800">
                    <span>Total</span>
                    <span>$<?php echo $total ?? '0.00'; ?></span>
                </div>
            </div>
            <a href="/checkout"
                class="block w-full bg-indigo-600 text-white font-bold py-3 text-center rounded-lg hover:bg-indigo-700 transition shadow-lg">Proceed
                to Checkout</a>
            <div class="mt-4 text-center">
                <p class="text-xs text-gray-500"><i class="fas fa-lock mr-1"></i> Secure Checkout</p>
            </div>
        </div>
    </div>
</div>

<?php require_once '../app/views/layout/footer.php'; ?>