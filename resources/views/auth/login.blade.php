<!-- resources/views/auth/login.blade.php -->

<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500">
        <div class="bg-white w-full max-w-md p-8 rounded-xl shadow-lg overflow-hidden">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-indigo-600 mb-2">Welcome Back!</h2>
                <p class="text-sm text-gray-600">Please login to your account to continue</p>
            </div>

            <!-- Login Form -->
            <form action="{{ route('login') }}" method="POST">
                @csrf

                <!-- Email Field -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                    <input type="email" id="email" name="email" class="w-full px-4 py-3 mt-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200 ease-in-out placeholder-gray-400" placeholder="Enter your email" value="{{ old('email') }}" required autofocus>
                </div>

                <!-- Password Field -->
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="password" name="password" class="w-full px-4 py-3 mt-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200 ease-in-out placeholder-gray-400" placeholder="Enter your password" required>
                </div>

                <!-- Forgot Password Link -->
                <div class="flex justify-end mb-6">
                    <a href="{{ route('password.request') }}" class="text-sm text-indigo-500 hover:text-indigo-400">Forgot your password?</a>
                </div>

                <!-- Login Button -->
                <div>
                    <button type="submit" class="w-full bg-indigo-600 text-white py-3 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition duration-300 ease-in-out">
                        Login
                    </button>
                </div>

                <!-- Register Link -->
                <div class="text-center text-sm text-gray-600 mt-4">
                    <p>Don't have an account? <a href="{{ route('register') }}" class="text-indigo-500 hover:text-indigo-400">Register here</a></p>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
