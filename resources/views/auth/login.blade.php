<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-900 text-white">

    <!-- Login Section -->
    <section class="flex items-center justify-center min-h-screen bg-gray-900">
        <div class="bg-gray-800 p-8 rounded-lg shadow-lg w-full sm:w-96">
            <h2 class="text-2xl font-semibold text-center text-white mb-6">Login to Your Account</h2>

            <form action="#" method="POST">
                <!-- Email Field -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-300">Email Address</label>
                    <input type="email" id="email" name="email"
                        class="mt-2 block w-full px-4 py-2 border border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-gray-700 text-white placeholder-gray-400"
                        placeholder="Enter your email" required>
                </div>

                <!-- Password Field -->
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-300">Password</label>
                    <input type="password" id="password" name="password"
                        class="mt-2 block w-full px-4 py-2 border border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-gray-700 text-white placeholder-gray-400"
                        placeholder="Enter your password" required>
                </div>

                <!-- Login Button -->
                <div class="mb-6">
                    <button type="submit"
                        class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        Login
                    </button>
                </div>

                <!-- Forgot Password & Sign Up Links -->
                <div class="flex justify-between text-sm text-gray-400">
                    <a href=" {{ route('password.request') }} " class="hover:text-blue-500">Forgot Password?</a>
                    <a href=" {{ route('register') }} " class="hover:text-blue-500">Sign Up</a>
                </div>
            </form>
        </div>
    </section>

</body>

</html>
