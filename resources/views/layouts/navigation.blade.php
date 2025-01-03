<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog app</title>
    @vite('resources/css/app.css')
</head>

<body>

    <nav class="bg-gray-800 p-4 shadow-lg">
        <div class="flex justify-between items-center">
            <div class="text-white text-xl font-bold">
                <a href="{{ route('home') }}" class="hover:text-gray-400">MyBlog</a>
            </div>
            <ul class="flex space-x-6 items-center md:flex">
                @guest
                    <li>
                        <a href="{{ route('login') }}"
                            class="text-white hover:text-yellow-400 transition duration-300 ease-in-out">
                            <i class="fas fa-sign-in-alt mr-2"></i>Login
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}"
                            class="text-white hover:text-yellow-400 transition duration-300 ease-in-out">
                            <i class="fas fa-user-plus mr-2"></i>Register
                        </a>
                    </li>
                @else
                    @if (Auth::user() && Auth::user()->role === 'admin')
                        @if (request()->is('admin'))
                            <li>
                                <a href="{{ route('home') }}"
                                    class="text-white hover:text-yellow-400 transition duration-300 ease-in-out">
                                    <i class="fas fa-arrow-left mr-2"></i>Go to User Page
                                </a>
                            </li>
                        @else
                            <li>
                                <a href="{{ route('admin.index') }}"
                                    class="text-white hover:text-yellow-400 transition duration-300 ease-in-out">
                                    <i class="fas fa-tachometer-alt mr-2"></i>Admin Dashboard
                                </a>
                            </li>
                        @endif
                    @endif
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                class="text-white hover:text-yellow-400 transition duration-300 ease-in-out">
                                <i class="fas fa-sign-out-alt mr-2"></i>Logout
                            </button>
                        </form>
                    </li>
                @endguest
            </ul>
            <div class="md:hidden">
                <button class="text-white focus:outline-none" onclick="toggleMenu()">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div id="mobileMenu" class="md:hidden mt-4 hidden">
            <ul class="flex flex-col space-y-4">
                @guest
                    <li>
                        <a href="{{ route('login') }}"
                            class="text-white hover:text-yellow-400 transition duration-300 ease-in-out">
                            <i class="fas fa-sign-in-alt mr-2"></i>Login
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}"
                            class="text-white hover:text-yellow-400 transition duration-300 ease-in-out">
                            <i class="fas fa-user-plus mr-2"></i>Register
                        </a>
                    </li>
                @else
                    @if (Auth::user() && Auth::user()->role === 'admin')
                        @if (request()->is('admin'))
                            <li>
                                <a href="{{ route('home') }}"
                                    class="text-white hover:text-yellow-400 transition duration-300 ease-in-out">
                                    <i class="fas fa-arrow-left mr-2"></i>Go to User Page
                                </a>
                            </li>
                        @else
                            <li>
                                <a href="{{ route('admin.index') }}"
                                    class="text-white hover:text-yellow-400 transition duration-300 ease-in-out">
                                    <i class="fas fa-tachometer-alt mr-2"></i>Admin Dashboard
                                </a>
                            </li>
                        @endif
                    @endif
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                class="text-white hover:text-yellow-400 transition duration-300 ease-in-out">
                                <i class="fas fa-sign-out-alt mr-2"></i>Logout
                            </button>
                        </form>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>


</body>

</html>
