<x-app-layout>
    {{-- edit page --}}
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-4">
            <h1 class="text-2xl font-semibold text-black">Edit Post</h1>
            <a href="{{ route('admin.index') }}"
                class="bg-blue-600 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded">
                Back
            </a>

            @if (session('error'))
                <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                    {{ session('error') }}
                </div>
            @endif

        </div>
        <div class="bg-gray-800 shadow-md rounded my-6">
            <form action="{{ route('admin.update', $post->id) }}" method="POST" class="p-6">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="title" class="block text-gray-300 text-sm font-bold mb-2">Title</label>
                    <input type="text" name="title" id="title" value="{{ $post->title }}"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-6">
                    <label for="content" class="block text-gray-300 text-sm font-bold mb-2">Content</label>
                    <textarea name="content" id="content"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ $post->content }}</textarea>
                </div>
                <div class="flex items-center justify-between">
                    <button type="submit"
                        class="bg-green-600 hover:bg-green-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Update Post
                    </button>
                </div>
            </form>
        </div>
    </div>


</x-app-layout>
