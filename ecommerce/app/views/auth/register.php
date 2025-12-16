<?php require_once '../app/views/layout/header.php'; ?>

<div class="max-w-md mx-auto bg-white p-8 rounded-xl shadow-md my-10 border border-gray-100">
    <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Create Account</h2>

    <form action="/register" method="POST">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Full Name</label>
            <input type="text" name="name"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 <?php echo (!empty($data['name_err'])) ? 'border-red-500' : 'border-gray-300'; ?>"
                value="<?php echo $data['name'] ?? ''; ?>">
            <span class="text-xs text-red-500"><?php echo $data['name_err'] ?? ''; ?></span>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Email Address</label>
            <input type="email" name="email"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 <?php echo (!empty($data['email_err'])) ? 'border-red-500' : 'border-gray-300'; ?>"
                value="<?php echo $data['email'] ?? ''; ?>">
            <span class="text-xs text-red-500"><?php echo $data['email_err'] ?? ''; ?></span>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Password</label>
            <input type="password" name="password"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 <?php echo (!empty($data['password_err'])) ? 'border-red-500' : 'border-gray-300'; ?>"
                value="<?php echo $data['password'] ?? ''; ?>">
            <span class="text-xs text-red-500"><?php echo $data['password_err'] ?? ''; ?></span>
        </div>

        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2">Confirm Password</label>
            <input type="password" name="confirm_password"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 <?php echo (!empty($data['confirm_password_err'])) ? 'border-red-500' : 'border-gray-300'; ?>"
                value="<?php echo $data['confirm_password'] ?? ''; ?>">
            <span class="text-xs text-red-500"><?php echo $data['confirm_password_err'] ?? ''; ?></span>
        </div>

        <button type="submit"
            class="w-full bg-indigo-600 text-white font-bold py-3 rounded-lg hover:bg-indigo-700 transition">Register</button>
    </form>

    <p class="mt-4 text-center text-sm text-gray-600">
        Already have an account? <a href="/login" class="text-indigo-600 hover:text-indigo-500 font-medium">Login</a>
    </p>
</div>

<?php require_once '../app/views/layout/footer.php'; ?>