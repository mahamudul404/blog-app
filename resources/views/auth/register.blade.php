<x-guest-layout>

    <form method="POST" action="{{ route('register') }}" class="space-y-6 bg-gray-900 p-8 rounded-lg shadow-2xl">
        @csrf

        <h2 class="text-3xl font-bold text-white text-center mb-6">Create Your Account</h2>

        <!-- Full Name -->
        <div>
            <label for="name" class="block text-sm font-medium text-gray-400">Full Name</label>
            <input id="name" type="text" name="name" :value="old('name')" required autofocus
                class="mt-1 block w-full px-4 py-3 bg-gray-800 text-white border border-gray-700 rounded-md shadow-sm 
                   focus:ring-indigo-500 focus:border-indigo-500 placeholder-gray-500">
        </div>

        <!-- Email -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-400">Email</label>
            <input id="email" type="email" name="email" :value="old('email')" required
                class="mt-1 block w-full px-4 py-3 bg-gray-800 text-white border border-gray-700 rounded-md shadow-sm 
                   focus:ring-indigo-500 focus:border-indigo-500 placeholder-gray-500">
        </div>

        <!-- Password -->
        <div>
            <label for="password" class="block text-sm font-medium text-gray-400">Password</label>
            <input id="password" type="password" name="password" required
                class="mt-1 block w-full px-4 py-3 bg-gray-800 text-white border border-gray-700 rounded-md shadow-sm 
                   focus:ring-indigo-500 focus:border-indigo-500 placeholder-gray-500">
        </div>

        <!-- Confirm Password -->
        <div>
            <label for="password_confirmation" class="block text-sm font-medium text-gray-400">Confirm Password</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required
                class="mt-1 block w-full px-4 py-3 bg-gray-800 text-white border border-gray-700 rounded-md shadow-sm 
                   focus:ring-indigo-500 focus:border-indigo-500 placeholder-gray-500">
        </div>

        <!-- Submit Button -->
        <div>
            <button type="submit"
                class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium 
                   rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Register
            </button>
        </div>

        <!-- Login Link -->
        <p class="text-sm text-gray-400 text-center mt-6">
            Already have an account?
            <a href="{{ route('login') }}" class="font-medium text-indigo-400 hover:text-indigo-300">
                Log in here
            </a>
        </p>
    </form>

</x-guest-layout>
