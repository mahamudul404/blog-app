<x-app-layout>

    @if (session('error'))
        <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('admin.store') }}" method="POST" class="max-w-xl mx-auto p-6 bg-white shadow-md rounded-md">
        @csrf
        <div class="mb-4">
            <label for="title" class="block text-gray-700 font-bold mb-2">Title</label>
            <input type="text" id="title" name="title" required
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-300">
        </div>
        <div class="mb-4">
            <label for="content" class="block text-gray-700 font-bold mb-2">Content</label>
            <textarea id="content" name="content" rows="5" required
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-300"></textarea>
        </div>
        <div class="flex justify-end">
            <button type="submit"
                class="px-4 py-2 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">Create
                Post</button>
        </div>
    </form>

</x-app-layout>
