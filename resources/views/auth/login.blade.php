<x-guest-layout>

    <div class="w-full sm:max-w-md mt-6 px-6 py-8 bg-gray-900 shadow-2xl rounded-lg">
        <h2 class="text-3xl font-extrabold text-white mb-4 text-center">
            Login to Your Account
        </h2>

        <form method="POST" action="{{ route('login') }}" class="space-y-6">
            @csrf

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-400">Email</label>
                <input id="email" type="email" name="email" :value="old('email')" required autofocus
                    class="mt-1 block w-full px-4 py-3 bg-gray-800 text-white border border-gray-600 rounded-md shadow-sm 
                               focus:ring-indigo-500 focus:border-indigo-500 placeholder-gray-500">
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-400">Password</label>
                <input id="password" type="password" name="password" required
                    class="mt-1 block w-full px-4 py-3 bg-gray-800 text-white border border-gray-600 rounded-md shadow-sm 
                               focus:ring-indigo-500 focus:border-indigo-500 placeholder-gray-500">
            </div>

            <!-- Remember Me -->
            <div class="flex items-center justify-between">
                <label for="remember_me" class="flex items-center">
                    <input id="remember_me" type="checkbox" name="remember"
                        class="h-4 w-4 text-indigo-400 focus:ring-indigo-500 bg-gray-800 border-gray-600 rounded">
                    <span class="ml-2 text-sm text-gray-400">Remember me</span>
                </label>
                <a href="{{ route('password.request') }}"
                    class="text-sm font-medium text-indigo-400 hover:text-indigo-300">
                    Forgot your password?
                </a>
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit"
                    class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium 
                               rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Log in
                </button>
            </div>

            <!-- Register Link -->
            <p class="text-sm text-gray-400 text-center">
                Don't have an account?
                <a href="{{ route('register') }}" class="font-medium text-indigo-400 hover:text-indigo-300">
                    Register here
                </a>
            </p>
        </form>
    </div>

</x-guest-layout>
