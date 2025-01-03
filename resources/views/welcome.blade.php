<x-app-layout>
    <!-- Hero Section -->
    <section class="bg-blue-100 py-16 bg-cover bg-center" style="background-image: url('/images/hero-bg.jpg');">
        <div class="container mx-auto text-center">
            <h1 class="text-5xl font-bold text-white">Welcome to My Blog</h1>
            <p class="text-xl text-gray-200 mt-4">Explore the latest articles, news, and insights</p>
            <a href="#articles"
                class="mt-6 inline-block px-6 py-3 text-lg font-semibold text-blue-600 bg-white rounded-lg hover:bg-gray-100">Get
                Started</a>
        </div>
    </section>

    <!-- Articles Section -->
    <section id="articles" class="py-16 bg-gray-50">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-gray-800 text-center mb-8">Latest Articles</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($posts->sortByDesc('created_at') as $post)
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                       
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-800">{{ $post->title }}</h3>
                            <p class="text-gray-600 mt-4">{{ Str::limit($post->content, 100) }}</p>
                           
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-gray-800 text-gray-200 py-8">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center md:text-left">
                <h3 class="text-lg font-semibold">My Blog</h3>
                <p class="text-gray-400 mt-2">Sharing knowledge and insights on various topics.</p>
            </div>
            <div class="text-center">
                <h3 class="text-lg font-semibold">Quick Links</h3>
                <ul class="mt-2 space-y-2">
                    <li><a href="#" class="hover:underline">About</a></li>
                    <li><a href="#" class="hover:underline">Contact</a></li>
                    <li><a href="#" class="hover:underline">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="text-center md:text-right">
                <h3 class="text-lg font-semibold">Follow Us</h3>
                <div class="mt-2 flex justify-center md:justify-end space-x-4">
                    <a href="#" class="hover:text-blue-500"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="hover:text-blue-300"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="hover:text-pink-500"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="text-center mt-8 border-t border-gray-700 pt-4">
            <p>&copy; {{ date('Y') }} My Blog. All rights reserved.</p>
        </div>
    </footer>
</x-app-layout>
