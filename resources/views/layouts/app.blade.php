<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Home</title>
    {{-- tailwind css update cdn link use --}}
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">





    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-gray-50">

    @include('layouts.navigation')

    <div class="container mx-auto px-4">
        {{ $slot }}
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            @if (session('message'))
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true,
                    "positionClass": "toast-top-right",
                    "timeOut": "3000",
                };
                toastr.{{ session('alert-type', 'info') }}("{{ session('message') }}");
            @endif
        });
    </script>


</body>

</html>
