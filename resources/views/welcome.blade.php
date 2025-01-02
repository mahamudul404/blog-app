 <x-app-layout>
     <!-- Hero Section -->
     <section class="bg-blue-100 py-16">
         <div class="container mx-auto text-center">
             <h1 class="text-4xl font-semibold text-gray-800">Welcome to My Blog</h1>
             <p class="text-lg text-gray-600 mt-4">Latest articles, news, and insights</p>
         </div>
     </section>

     <!-- Blog Posts Section -->
     <section class="container mx-auto py-16 px-4">
         <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
             <!-- Blog Post 1 -->
             <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                 <img src="https://via.placeholder.com/400x250" alt="Blog Post Image" class="w-full h-56 object-cover">
                 <div class="p-6">
                     <h2 class="text-2xl font-bold text-gray-800">Blog Post Title 1</h2>
                     <p class="text-gray-600 mt-2">This is a short description of the blog post. It provides an
                         introduction to the content...</p>
                     <a href="#" class="text-blue-600 hover:text-blue-800 mt-4 inline-block">Read More</a>
                 </div>
             </div>

             <!-- Blog Post 2 -->
             <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                 <img src="https://via.placeholder.com/400x250" alt="Blog Post Image" class="w-full h-56 object-cover">
                 <div class="p-6">
                     <h2 class="text-2xl font-bold text-gray-800">Blog Post Title 2</h2>
                     <p class="text-gray-600 mt-2">This is a short description of the blog post. It provides an
                         introduction to the content...</p>
                     <a href="#" class="text-blue-600 hover:text-blue-800 mt-4 inline-block">Read More</a>
                 </div>
             </div>

             <!-- Blog Post 3 -->
             <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                 <img src="https://via.placeholder.com/400x250" alt="Blog Post Image" class="w-full h-56 object-cover">
                 <div class="p-6">
                     <h2 class="text-2xl font-bold text-gray-800">Blog Post Title 3</h2>
                     <p class="text-gray-600 mt-2">This is a short description of the blog post. It provides an
                         introduction to the content...</p>
                     <a href="#" class="text-blue-600 hover:text-blue-800 mt-4 inline-block">Read More</a>
                 </div>
             </div>

         </div>
     </section>

     <!-- Footer -->
     <footer class="bg-blue-600 text-white py-6">
         <div class="container mx-auto text-center">
             <p>&copy; 2025 My Blog. All Rights Reserved.</p>
         </div>
     </footer>

 </x-app-layout>
