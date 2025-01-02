<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Tailwind CSS (make sure you have included Tailwind CSS in your project) -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-50">
    {{-- create a good div content go for the middle and good  --}}
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gradient-to-r from-gray-800 via-gray-900 to-black">

    

        <div class="w-full sm:max-w-md mt-6 px-6 py-8 bg-gray-900 shadow-2xl rounded-lg">
            <h2 class="text-3xl font-extrabold text-white mb-4 text-center">
                Create Your Account
            </h2>

            {{-- Display Validation Errors --}}
            @if ($errors->any())
                <div class="mb-4">
                    <ul class="text-red-500 text-sm list-disc pl-5 space-y-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- Registration form --}}
            <form method="POST" action="{{ route('register') }}" class="space-y-6">
                @csrf

                <!-- Full Name -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-400">Full Name</label>
                    <input id="name" type="text" name="name" :value="old('name')" required autofocus
                        class="mt-1 block w-full px-4 py-3 bg-gray-800 text-white border border-gray-600 rounded-md shadow-sm 
                           focus:ring-indigo-500 focus:border-indigo-500 placeholder-gray-500">
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-400">Email</label>
                    <input id="email" type="email" name="email" :value="old('email')" required
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

                <!-- Confirm Password -->
                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-400">Confirm
                        Password</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required
                        class="mt-1 block w-full px-4 py-3 bg-gray-800 text-white border border-gray-600 rounded-md shadow-sm 
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
        </div>

    </div>






</body>

</html>
