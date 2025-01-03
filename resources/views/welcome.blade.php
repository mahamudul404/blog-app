 <x-app-layout>
     <!-- Hero Section -->
     <section class="bg-blue-100 py-16">
         <div class="container mx-auto text-center">
             <h1 class="text-4xl font-semibold text-gray-800">Welcome to My Blog</h1>
             <p class="text-lg text-gray-600 mt-4">Latest articles, news, and insights</p>
         </div>
     </section>



     <!-- Footer Section -->
     <footer class="bg-gray-800 text-white py-4">
         <div class="container mx-auto text-center">
             <p>&copy; {{ date('Y') }} My Blog. All rights reserved.</p>
         </div>
     </footer>

 </x-app-layout>
