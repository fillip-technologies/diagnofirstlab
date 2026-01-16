<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Diagno First Lab</title>

    <!-- SEO (Basic) -->
    <meta name="description" content="Diagno First Lab – Advanced diagnostic & pathology services">
    <meta name="keywords" content="Diagnostic Lab, Pathology, Blood Test, Health Checkup">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


    <!-- master color -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primaryFrom: '#0B1C5D', // gradient start
                        primaryTo: '#143C8C', // gradient end
                        secondaryFrom: '#1F7A6D',
                        secondaryTo: '#2FA98F'
                    }
                }
            }
        }
    </script>



    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <!-- AOS Animation -->
    <link
        rel="stylesheet"
        href="https://unpkg.com/aos@2.3.1/dist/aos.css" />



    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="font-[Inter] bg-white text-gray-900">

    {{-- Navbar --}}
    @include('partials.header')

    {{-- Page Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')

    <!-- Custom JS -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    <script>
        AOS.init({
            once: true,
            duration: 800
        });
    </script>

</body>

</html>