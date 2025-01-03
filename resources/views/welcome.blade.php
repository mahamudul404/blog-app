 <x-app-layout>
     <!-- Hero Section -->
     <section class="bg-blue-100 py-16">
         <div class="container mx-auto text-center">
             <h1 class="text-4xl font-semibold text-gray-800">Welcome to My Blog</h1>
             <p class="text-lg text-gray-600 mt-4">Latest articles, news, and insights</p>
         </div>
     </section>

     <!-- Articles Section -->

     {{-- <section class="py-16">
         <div class="container mx-auto">
             <h2 class="text-2xl font-semibold text-gray-800">Latest Articles</h2>
             <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-8">
                 @foreach ($articles as $article)
                     <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                         <img src="{{ $article->image }}" alt="{{ $article->title }}" class="w-full h-36 object-cover">
                         <div class="p-6">
                             <h3 class="font-semibold text-lg text-gray-800">{{ $article->title }}</h3>
                             <p class="text-gray-600 mt-2">{{ $article->excerpt }}</p>
                             <a href="{{ route('articles.show', $article) }}"
                                 class="block bg-blue-500 text-white px-4 py-2 rounded-lg mt-4">Read More</a>
                         </div>
                     </div>
                 @endforeach
             </div>
         </div>
     </section> --}}





     <!-- Footer Section -->
     <footer class="bg-gray-800 text-white py-4">
         <div class="container mx-auto text-center">
             <p>&copy; {{ date('Y') }} My Blog. All rights reserved.</p>
         </div>
     </footer>

 </x-app-layout>
