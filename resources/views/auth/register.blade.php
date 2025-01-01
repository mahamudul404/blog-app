<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white">

    <!-- Register Section -->
    <section class="flex items-center justify-center min-h-screen bg-gray-900">
        <div class="bg-gray-800 p-8 rounded-lg shadow-lg w-full sm:w-96">
            <h2 class="text-2xl font-semibold text-center text-white mb-6">Create Your Account</h2>
            
            <form action="#" method="POST">
                <!-- Name Field -->
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-300">Full Name</label>
                    <input type="text" id="name" name="name" class="mt-2 block w-full px-4 py-2 border border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-gray-700 text-white placeholder-gray-400" placeholder="Enter your full name" required>
                </div>

                <!-- Email Field -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-300">Email Address</label>
                    <input type="email" id="email" name="email" class="mt-2 block w-full px-4 py-2 border border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-gray-700 text-white placeholder-gray-400" placeholder="Enter your email" required>
                </div>

                <!-- Password Field -->
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-300">Password</label>
                    <input type="password" id="password" name="password" class="mt-2 block w-full px-4 py-2 border border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-gray-700 text-white placeholder-gray-400" placeholder="Enter your password" required>
                </div>

                <!-- Confirm Password Field -->
                <div class="mb-6">
                    <label for="confirm-password" class="block text-sm font-medium text-gray-300">Confirm Password</label>
                    <input type="password" id="confirm-password" name="confirm-password" class="mt-2 block w-full px-4 py-2 border border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-gray-700 text-white placeholder-gray-400" placeholder="Confirm your password" required>
                </div>

                <!-- Register Button -->
                <div class="mb-6">
                    <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        Register
                    </button>
                </div>

                <!-- Login Link -->
                <div class="text-sm text-center text-gray-400">
                    <p>Already have an account? <a href=" {{ route('login') }} " class="text-blue-500 hover:text-blue-400">Login here</a></p>
                </div>
            </form>
        </div>
    </section>

</body>
</html>
