
<nav class="bg-gray-800 p-4">
  <ul class="flex justify-end space-x-4">
    @guest
      <li>
        <a href="{{ route('login') }}" class="text-white hover:text-gray-400">Login</a>
      </li>
      <li>
        <a href="{{ route('register') }}" class="text-white hover:text-gray-400">Register</a>
      </li>
    @else
      <li>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="text-white hover:text-gray-400">Logout</button>
        </form>
      </li>
    @endguest
  </ul>
</nav>
