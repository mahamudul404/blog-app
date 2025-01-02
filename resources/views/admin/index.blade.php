<x-app-layout>

    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-4">
            <h1 class="text-2xl font-semibold text-black">Manage Your Posts</h1>
            <a href="{{ route('admin.create') }}"
                class="bg-blue-600 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded">
                Create Post
            </a>
        </div>

        @if (session('success'))
            <div class="bg-green-500 p-4 rounded-lg mb-6 text-white text-center">
          {{ session('success') }}
            </div>
        @endif

        <div class="bg-gray-800 shadow-md rounded my-6">
            <table class="min-w-full table-auto">
                <thead>
                    <tr class="bg-gray-700 text-gray-300 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">Title</th>
                        <th class="py-3 px-6 text-left">Content</th>
                        <th class="py-3 px-6 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-300 text-sm font-light">
                    @foreach ($posts as $post)
                        <tr class="border-b border-gray-700 hover:bg-gray-600">
                            <td class="py-3 px-6 text-left">{{ $post->title }}</td>
                            <td class="py-3 px-6 text-left">{{ Str::limit($post->content, 50) }}</td>
                            <td class="py-3 px-6 text-left">
                                <a href="{{ route('admin.edit', $post->id) }}"
                                    class="bg-yellow-600 hover:bg-yellow-800 text-white font-bold py-2 px-4 rounded">
                                    Edit
                                </a>
                                <form action="{{ route('admin.destroy', $post->id) }}" method="POST"
                                    class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-600 hover:bg-red-800 text-white font-bold py-2 px-4 rounded">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-app-layout>
